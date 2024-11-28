<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\doctors\IndexController;
use App\Http\Controllers\Front\doctors\DoctorController;
use App\Http\Controllers\Front\RegisterController;
use App\Http\Controllers\Front\MajorController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\HistoryController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get( "/", [HomeController::class , "index"]);
Route::get( "history", [HistoryController::class , "index"]);
Route::get( "login", [LoginController::class , "index"]);
Route::get( "majors", [MajorController::class , "index"]);
Route::get( "register", [RegisterController::class , "index"]);
Route::get( "doctors.doctor", [DoctorController::class , "index"]);
Route::get( "doctors.index", [IndexController::class , "index"]);

Route::get( "contact", [ContactController::class , "index"]);
Route::post( "send-message", [ContactController::class , "sendMessage"]);

require_once('admin.php');

// Route::get('majors/add,[]);



