<?php

namespace App\Http\Controllers\Front;
use App\Models\Major;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public   function index() {
        $majors = Major::orderBy('id',"DESC")->Paginate(20);
        return view('front.majors', ['majors' => $majors]);
    }

}
