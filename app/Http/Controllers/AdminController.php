<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function login(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->input();
            if (Auth::attempt(['username'=> $data['username'],'password'=> $data['password'],'admin'=>'1'])) {
                return redirect('/admin/dashboard');
            }
            else {
                return redirect('/admin')->with('flash_message_error','Invalid credentials');
            }
        }
        return view('admin.admin_login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
