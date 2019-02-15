<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scsj;

class ScsjController extends Controller
{
    public function showStudent(){
        $scsj = Scsj::get();
        return view('admin.scsj')->with(compact('scsj'));
    }
}
