<?php

namespace App\Http\Controllers;

use function PHPUnit\Framework\returnSelf;

abstract class Controller
{
   public function apiResponse($data=[],$status=200){
    return response()->json($data,$status);
   }
}
