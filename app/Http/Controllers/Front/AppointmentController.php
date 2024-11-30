<?php

namespace App\Http\Controllers\Front;

use Illuminate\support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\ConfirmationAppointmentMail;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\User;

class AppointmentController extends Controller
{
    public   function index() {
        return view(view:'front.appointments.index');
    }

    public function create(User $user){
       return view('front.appointments.create',compact('user'));
    }


    public function store(Request $request,User $user){
        $request->validate([
          "name"=>['required','string','max:30'],
          "email"=>['required','email'],
          "phone"=>['required','numeric']
        ]);

            //create new appointment
        $appointment= new Appointment();
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->phone = $request->phone;
        $appointment->appointment_time = date('Y-m-d H:i:s');
        $appointment->patient_id = auth()->user()->id;
        $appointment->doctor_id = $user->id;
        $appointment->save();

        Mail::to(auth()->user()->email)->send(new ConfirmationAppointmentMail());

        return redirect()->back()->with('success','Your appointment has been sent Successfully');



    }
}
