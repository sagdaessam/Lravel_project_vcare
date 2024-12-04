<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Models\Major;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MajorController extends Controller
{
   public function index(){
    $majors = Major::all();
    return response()->json($majors);
   }


    public function show($id){
      $major = Major::findOrFail($id);
      return response()->json(["data" => $major]);
    }


    public function doctors($id){
        $doctors = User::where('role','doctor')->where('major_id',$id)->get();
        return response()->json(["data" => $doctors]);
      }





}
