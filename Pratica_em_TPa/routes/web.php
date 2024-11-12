<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DisciplineController;

Route::resource('teachers', TeacherController::class);
Route::resource('disciplines', DisciplineController::class);


Route::get('/', function () {
    return view('welcome');
});
