<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;
use App\Http\Traits\UploadImage;

class MajorController extends Controller
{

    use UploadImage;

    public function index() {
        return view('admin.pages.majors.index');
    }



    public function create() {
        return view('admin.majors.create');
    }

    public function store() {
        request()->validate([
          'name'=>"required|string|min:3|max:50",
          'image'=>["required","image"]
       ]);
       $image_name = $this->upload('uploads/majors/');
     Major::create([
       'name'=>request()->name,
       'image'=>$image_name

     ]);

   return back()->with("success","data added successfully");

    }

    public function edit(Major $major){
        return view('admin.majors.edit',compact('major'));
    }

    public function update(Request $request, Major $major){


        $request->validate([
            'name'=>"required|string|min:3|max:50",
            'image'=>["required","image"]
        ] );
        $image_name = $this->upload('uploads/majors/');

        $major->name=$request->name;
        $major->image=$image_name;
        $major->save();
        return back()->with('success',"data updated successfully");
    }

    public function destroy(Major $major){
       $major->delete();
       return back()->with('success','data deleted successfully');
    }



}
