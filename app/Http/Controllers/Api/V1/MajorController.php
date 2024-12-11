<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Models\Major;
use App\Http\Controllers\Controller;
use App\Http\Resources\DoctorResource;
use App\Http\Resources\MajorResource;
use Illuminate\Http\Request;

class MajorController extends Controller
{
   public function index(){
    $majors = Major::with('users')->get();
    return MajorResource::collection($majors);
    // return $this->apiResponse($majors);
   }


    public function show($id){
      $major = Major::findOrFail($id);
      return new MajorResource($major);
      // return response()->json(["data=>$majors]);
    }


    public function doctors($id){
        $doctors = User::where('role','doctor')->where('major_id',$id)->get();
     

        return response()->json(["data" => $doctors]);
      }





}
