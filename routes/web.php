<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('contact', [ContactController::class, 'index']);
Route::post('contact/submit', [ContactController::class, 'store'])->name('submit-contact');
Route::get('contact-list', [ContactController::class, 'list']);


Route::get('students', [StudentController::class, 'index'])->name('student.list');
Route::get('add-student', [StudentController::class, 'create'])->name('student.add');
Route::post('save-student', [StudentController::class, 'store'])->name('student.save');
Route::get('edit-student/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('update-student/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('delete-student/{id}', [StudentController::class, 'destroy'])->name('student.delete');
