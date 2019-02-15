<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Scsr;

class ScsrController extends Controller
{
    public function showStudent(){
        $scsr = Scsr::get();
        return view('admin.scsr')->with(compact('scsr'));
    }
}
