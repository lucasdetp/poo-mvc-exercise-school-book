<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SchoolClass;

class SchoolClassController extends Controller
{

    public function list()
    {
        $nombreEtudiant = SchoolClass::all();
        $requete = SchoolClass::query();
        $pageclass = $requete->paginate(20);
        return view('classes', [
            'nombreEtudiant' => $nombreEtudiant,
            'pageclass' => $pageclass,

        ]);
    }
    public function show($class_id)
    {
        $class = SchoolClass::findOrFail($class_id);
        $students = $class->students;
        return view('school_class_show', ['class' => $class, 'students' => $students]);
    }
}
