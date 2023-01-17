<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function list(Request $request)
    {
        $orderBy = $request->input('order_by', 'id');
        $order = $request->input('order', 'asc');
        $students = Student::orderBy($orderBy, $order)->paginate(20);
        return view('student_show', compact('students'));
    }
}
