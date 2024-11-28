<?php

namespace App\Http\Controllers\Front\doctors;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public   function index() {
        $doctors = User::where('role',"doctor")->paginate(20);
        return view('front.doctors.index',compact('doctors'));
    }

}
