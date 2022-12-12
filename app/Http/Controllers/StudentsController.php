<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
//        $dataStudent = Students::all(); // lazy loading
        $dataStudent = Students::with('class.teacher')->get(); // eager loading
         return view('students.student' , ['students' => $dataStudent]);
    }
}
