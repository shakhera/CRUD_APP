<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



Route::get('/', function () {
    return view('students.index');
})->name('welcome');

Route::get('/test', function () {
    return "shifa";
});

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
route::get('/student/delete/{student}',[StudentController::class, 'delete'])->name('students.delete');



 