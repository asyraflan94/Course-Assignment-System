<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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

            $t1  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S1');
            $t2  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S2');
            $t3  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S3');
            $t4  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S4');
            $t5  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S5');
            $t6  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S6');
            $t7  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S7');
            $t8  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S8');
            $t9  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S9');
            $t10 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S10');
            $t11 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S11');
            $t12 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S12');
            $t13 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S13');
            $t14 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S14');
            $t15 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S15');
            $t16 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S16');
            $t17 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S17');
            $t18 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S18');
            $t19 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S19');
            $t20 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S20');
            $t21 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S21');
            $t22 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S23_E1');
            $t23 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S24_E1');
            $t24 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S25_E2');
            $t25 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S26_E2');
            $t26 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S27_E2');
            $t27 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S28_E2');
            $t28 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S29_E2');
            $t29 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S30_E3');
            $t30 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S31_E3');
            $t31 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S32_E3');
            $t32 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S33_E3');
            $t33 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S34_E4');
            $t34 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S35_E4');
            $t35 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S36_E4');
            $t36 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S37_E4');
            $t37 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S22_E1');

            return view ('admin.dashboard')->with(compact('t1','t2','t3','t4','t5','t6','t7','t8','t9','t10','t11','t12','t13','t14','t15','t16','t17','t18','t19','t20','t21',
                                                            't22','t23','t24','t25','t26','t27','t28','t29','t30','t31','t32','t33','t34','t35','t36','t37'));
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
