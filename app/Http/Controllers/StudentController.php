<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matrix;

class StudentController extends Controller
{
    public function showStudent($id){

        $student = Matrix::find($id);

        return view('student.student_detail')->with(compact('student'));
    }
}
