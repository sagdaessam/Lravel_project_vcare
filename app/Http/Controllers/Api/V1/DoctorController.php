<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
   public function index(){
     $doctors = User::where('role','doctor')->paginate();
      return response()->json($doctors);
   }
}
