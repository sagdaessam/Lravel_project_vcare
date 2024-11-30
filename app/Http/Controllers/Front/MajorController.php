<?php

namespace App\Http\Controllers\Front;
use App\Models\User;
use App\Models\Major;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public   function index() {
        $majors = Major::orderBy('id',"DESC")->Paginate(20);
        return view('front.majors', ['majors' => $majors]);
    }



    public   function doctors(Major $major) {
        $doctors = User::with('major')
        ->where('role',"doctor")
        ->where('major_id',$major->id)
        ->paginate(20);
        return view('front.doctors.index',compact('doctors'));
    }


}
