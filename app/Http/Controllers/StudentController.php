<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function list()
    {
        $students = Student::take(20)->get();
        return view('student_show', compact('students'));
    }
}
