<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

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

    public function setting(){
        return view('admin.setting');
    }

    public function checkPassword(Request $request){
        $data = $request->all();
        $current_password = $data['current_pswd'];
        $check_password = User::where(['admin'=>'1'])->first();
        if(Hash::check($current_password,$check_password->password)){
            echo "true";die;
        }else{
            echo "false";die;
        }
    }

    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $check_password = User::where(['username'=> Auth::user()->username])->first();
            $current_password = $data['current_pswd'];

            if(Hash::check($current_password,$check_password->password)){
            $password = bcrypt($data['new_pswd']);
            User::where('id','1')->update(['password'=>$password]);
            return redirect('/admin/dashboard')->with('flash_message_success','Password Successfully Updated!');
            }else{
                return redirect('/admin/setting')->with('flash_message_error','Incorrect Current Password!');
            }
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logged out Successfully');
    }
}
