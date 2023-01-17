<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function list()
    {
        $students = Student::paginate(20);
        return view('student_show', compact('students'));
    }
}
