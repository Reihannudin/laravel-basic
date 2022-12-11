<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesContoller extends Controller
{
    public function index(){
        $dataClass = Classes::all();
        return view('students.classes' , ['classes' => $dataClass]);
    }
}
