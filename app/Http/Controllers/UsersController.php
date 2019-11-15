<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $notes = User::all();
        return view('public.users.index', compact('notes'));
    }

    public function edit($id)
    {
        $note = User::where('id', $id)->first();
        return view('public.users.edit', compact('note'));
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
