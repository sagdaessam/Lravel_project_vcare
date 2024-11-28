<?php

namespace App\Http\Controllers\Front\doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public   function index() {
        return view(view:'front.doctors.doctor');
    }

}
