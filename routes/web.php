<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\SchoolClass;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolClassController;

Route::get('/', function () {
    $random_students = Student::inRandomOrder()->take(10)->get();
    return view('home', ['students' => $random_students]);
});

Route::get('/students', [StudentController::class, 'list'])->name('student.list');
Route::get('/students/{student_id}', [StudentController::class, 'show']);
Route::get('/classes', [SchoolClassController::class, 'list']);

Route::get('/classes/{class_id}', function ($student_id) {
    return abort(501, 'This should be a controller function');
});
