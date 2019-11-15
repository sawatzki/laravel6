<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Appointment;
use Illuminate\Support\Facades\Auth;

class AppointmentsController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('public.appointments.index', compact('appointments'));
    }
   public function my()
    {
        $appointments = Appointment::where('user_id', Auth::user()->id)->get();
        return view('public.appointments.index', compact('appointments'));
    }

    public function edit($id)
    {
        $appointment = Appointment::where('id', $id)->first();
        return view('public.appointments.edit', compact('appointment'));
    }

    public function store(Request $request, $id = null)
    {
        if (Auth::user()){
            $user_id = Auth::user()->id;
        }

        if ($id > 0) {
            Appointment::whereId($id)->update(
                [
                    'user_id' => $user_id,
                    'title' => $request->appointmentTitle,
                    'description' => $request->appointmentDescription,
                ]);
        } else {
            Appointment::create([
                'user_id' => $user_id,
                'title' => $request->appointmentTitle,
                'description' => $request->appointmentDescription,
            ]);
        }

        return redirect()->route('appointments.index');
    }

    public function destroy($id)
    {
        Appointment::destroy($id);
        return redirect()->route('appointments.index');
    }
}
