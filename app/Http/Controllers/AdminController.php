<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\Matrix;
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

            $t1  = Matrix::where([['total_subject_left', '<', '10'],['S1', '=', '1']])->sum('S1');
            $t2  = Matrix::where([['total_subject_left', '<', '10'],['S2', '=', '1']])->sum('S2');
            $t3  = Matrix::where([['total_subject_left', '<', '10'],['S3', '=', '1']])->sum('S3');
            $t4  = Matrix::where([['total_subject_left', '<', '10'],['S4', '=', '1']])->sum('S4');
            $t5  = Matrix::where([['total_subject_left', '<', '10'],['S5', '=', '1']])->sum('S5');
            $t6  = Matrix::where([['total_subject_left', '<', '10'],['S6', '=', '1']])->sum('S6');
            $t7  = Matrix::where([['total_subject_left', '<', '10'],['S7', '=', '1']])->sum('S7');
            $t8  = Matrix::where([['total_subject_left', '<', '10'],['S8', '=', '1']])->sum('S8');
            $t9  = Matrix::where([['total_subject_left', '<', '10'],['S9', '=', '1']])->sum('S9');;
            $t10 = Matrix::where([['total_subject_left', '<', '10'],['S10', '=', '1']])->sum('S10');
            $t11 = Matrix::where([['total_subject_left', '<', '10'],['S11', '=', '1']])->sum('S11');
            $t12 = Matrix::where([['total_subject_left', '<', '10'],['S12', '=', '1']])->sum('S12');
            $t13 = Matrix::where([['total_subject_left', '<', '10'],['S13', '=', '1']])->sum('S13');
            $t14 = Matrix::where([['total_subject_left', '<', '10'],['S14', '=', '1']])->sum('S14');
            $t15 = Matrix::where([['total_subject_left', '<', '10'],['S15', '=', '1']])->sum('S15');
            $t16 = Matrix::where([['total_subject_left', '<', '10'],['S16', '=', '1']])->sum('S16');
            $t17 = Matrix::where([['total_subject_left', '<', '10'],['S17', '=', '1']])->sum('S17');
            $t18 = Matrix::where([['total_subject_left', '<', '10'],['S18', '=', '1']])->sum('S18');
            $t19 = Matrix::where([['total_subject_left', '<', '10'],['S19', '=', '1']])->sum('S19');
            $t20 = Matrix::where([['total_subject_left', '<', '10'],['S20', '=', '1']])->sum('S20');
            $t21 = Matrix::where([['total_subject_left', '<', '10'],['S21', '=', '1']])->sum('S21');
            $t22 = Matrix::where([['total_subject_left', '<', '10'],['S23_E1', '=', '1']])->sum('S23_E1');
            $t23 = Matrix::where([['total_subject_left', '<', '10'],['S24_E1', '=', '1']])->sum('S24_E1');
            $t24 = Matrix::where([['total_subject_left', '<', '10'],['S25_E2', '=', '1']])->sum('S25_E2');
            $t25 = Matrix::where([['total_subject_left', '<', '10'],['S26_E2', '=', '1']])->sum('S26_E2');
            $t26 = Matrix::where([['total_subject_left', '<', '10'],['S27_E2', '=', '1']])->sum('S27_E2');
            $t27 = Matrix::where([['total_subject_left', '<', '10'],['S28_E2', '=', '1']])->sum('S28_E2');
            $t28 = Matrix::where([['total_subject_left', '<', '10'],['S29_E2', '=', '1']])->sum('S29_E2');
            $t29 = Matrix::where([['total_subject_left', '<', '10'],['S30_E3', '=', '1']])->sum('S30_E3');
            $t30 = Matrix::where([['total_subject_left', '<', '10'],['S31_E3', '=', '1']])->sum('S31_E3');
            $t31 = Matrix::where([['total_subject_left', '<', '10'],['S32_E3', '=', '1']])->sum('S32_E3');
            $t32 = Matrix::where([['total_subject_left', '<', '10'],['S33_E3', '=', '1']])->sum('S33_E3');
            $t33 = Matrix::where([['total_subject_left', '<', '10'],['S34_E4', '=', '1']])->sum('S34_E4');
            $t34 = Matrix::where([['total_subject_left', '<', '10'],['S35_E4', '=', '1']])->sum('S35_E4');
            $t35 = Matrix::where([['total_subject_left', '<', '10'],['S36_E4', '=', '1']])->sum('S36_E4');
            $t36 = Matrix::where([['total_subject_left', '<', '10'],['S37_E4', '=', '1']])->sum('S37_E4');
            $t37 = Matrix::where([['total_subject_left', '<', '10'],['S22_E1', '=', '1']])->sum('S22_E1');

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
