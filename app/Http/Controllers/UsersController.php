<?php

namespace App\Http\Controllers;

use App\Model\Appointment;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('public.users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('public.users.show', compact('user'));
    }

    public function appointments($id)
    {
        $appointments = Appointment::where('user_id', $id)->get();
        $user = User::where('id', Auth::user()->id)->first();
        return view('public.users.appointments', compact('appointments', 'user'));
    }

    public function store(Request $request, $id = null)
    {
        if ($id > 0) {
            User::whereId($id)->update(
                [
                    'title' => $request->noteTitle,
                    'description' => $request->noteDescription,
                ]);
        } else {
            User::create([
                'title' => $request->noteTitle,
                'description' => $request->noteDescription,
            ]);
        }

        return redirect()->route('public.users.index');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('public.users.index');
    }
}
