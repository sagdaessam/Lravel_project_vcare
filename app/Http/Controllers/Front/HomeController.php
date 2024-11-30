<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use App\Models\Major;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 public   function index() {
      $majors =  Major::take(20)->get();
      $doctors =  User::where('role','doctor')->with('major')->take(20)->get();
        return view('front.home', compact('majors','doctors'));
    }

}
