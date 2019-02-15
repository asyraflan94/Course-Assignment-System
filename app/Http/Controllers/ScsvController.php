<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScsvController extends Controller
{
    public function showStudent(){
        $scsv = SCSV::get();
        return view('admin.scsv')->with(compact('scsv'));
    }
}
