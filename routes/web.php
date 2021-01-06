<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/students', [StudentController::class, 'index']);
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');



 