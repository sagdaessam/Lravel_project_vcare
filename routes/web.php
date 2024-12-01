<?php

use App\Http\Controllers\Front\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\doctors\IndexController;
use App\Http\Controllers\Front\RegisterController;
use App\Http\Controllers\Front\MajorController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\HistoryController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
// use App\Models\Appointment;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get( "/", [HomeController::class , "index"])->name('home')->middleware('admin.area');
Route::get( "history", [HistoryController::class , "index"]);
Route::get( "login", [LoginController::class , "index"]);
Route::get( "majors", [MajorController::class , "index"]);
Route::get( "majors/{major}/doctors", [MajorController::class , "doctors"]);
Route::get( "register", [RegisterController::class , "index"]);

Route::middleware('auth')->group(function(){
    Route::get( "appointments/{user}", [AppointmentController::class , "create"])->name('appointments.create');
    Route::post( "appointments/{user}", [AppointmentController::class , "store"])->name('appointments.store');

});

Route::get( "doctors.index", [IndexController::class , "index"]);

Route::get( "contact", [ContactController::class , "index"]);
Route::post( "send-message", [ContactController::class , "sendMessage"]);

require_once('admin.php');
require_once(__DIR__.'/auth.php');
require_once(__DIR__.'/api.php');

// Route::get('majors/add,[]);



