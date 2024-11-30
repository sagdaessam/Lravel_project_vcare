<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Major;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MajorController extends Controller
{
   public function index(){
    $majors = Major::all();
    return response()->json($majors);
   }
}
