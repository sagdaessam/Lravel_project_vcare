<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Message;

use function Ramsey\Uuid\v1;

class ContactController extends Controller
{
    public   function index() {
        return view(view:'front.contact');
    }


    public function sendMessage(Request $request){
       $request->validate(
              [
                 "name" => ["required" , "string" , "min:3" ,"max:30"],
                 "email" => ["required" , "email" ],
                 "subject" => ["required" , "string" , "min:5" ,"max:50"],
                 "content" => ["required" , "min:10" ,"max:500" ]
              ]


       );


        $message = new Message();

        $message->name = $request-> name;
        $message->email = $request-> email;
        $message->subject = $request-> subject;
        $message->message = $request-> content;
        $message->save();

        return redirect('contact')->with('success','Your Message has been sent Successfully');
    }
}
