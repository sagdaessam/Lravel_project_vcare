<?php

use App\Http\Controllers\Api\V1\DoctorController;
use App\Http\Controllers\Api\V1\MajorController;

Route::get('api/v1/majors',[MajorController::class ,"index"]);
Route::get('api/v1/majors/{id}',[MajorController::class ,"show"]);
Route::get('api/v1/majors/{id}/doctors',[MajorController::class ,"doctors"]);
Route::get('api/v1/doctors',[DoctorController::class ,"index"]);

