<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matrix;
use App\Subject;
use App\TemporarySubject;
use App\FinalyearSubject;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function showSubjectList(){

        $t1 = DB::table('matrices')->sum('S1');
        $t2  = DB::table('matrices')->sum('S2');
        $t3  = DB::table('matrices')->sum('S3');
        $t4  = DB::table('matrices')->sum('S4');
        $t5  = DB::table('matrices')->sum('S5');
        $t6  = DB::table('matrices')->sum('S6');
        $t7  = DB::table('matrices')->sum('S7');
        $t8  = DB::table('matrices')->sum('S8');
        $t9  = DB::table('matrices')->sum('S9');
        $t10  = DB::table('matrices')->sum('S10');
        $t11  = DB::table('matrices')->sum('S11');
        $t12  = DB::table('matrices')->sum('S12');
        $t13  = DB::table('matrices')->sum('S13');
        $t14  = DB::table('matrices')->sum('S14');
        $t15  = DB::table('matrices')->sum('S15');
        $t16  = DB::table('matrices')->sum('S16');
        $t17  = DB::table('matrices')->sum('S17');
        $t18  = DB::table('matrices')->sum('S18');
        $t19  = DB::table('matrices')->sum('S19');
        $t20  = DB::table('matrices')->sum('S20');
        $t21  = DB::table('matrices')->sum('S21');
        $t37  = DB::table('matrices')->sum('S22_E1');
        $t22  = DB::table('matrices')->sum('S23_E1');
        $t23  = DB::table('matrices')->sum('S24_E1');
        $t24  = DB::table('matrices')->sum('S25_E2');
        $t25  = DB::table('matrices')->sum('S26_E2');
        $t26  = DB::table('matrices')->sum('S27_E2');
        $t27  = DB::table('matrices')->sum('S28_E2');
        $t28  = DB::table('matrices')->sum('S29_E2');
        $t29  = DB::table('matrices')->sum('S30_E3');
        $t30  = DB::table('matrices')->sum('S31_E3');
        $t31  = DB::table('matrices')->sum('S32_E3');
        $t32  = DB::table('matrices')->sum('S33_E3');
        $t33  = DB::table('matrices')->sum('S34_E4');
        $t34  = DB::table('matrices')->sum('S35_E4');
        $t35  = DB::table('matrices')->sum('S36_E4');
        $t36  = DB::table('matrices')->sum('S37_E4');


        return view ('admin.subject_list')->with(compact('t1','t2','t3','t4','t5','t6','t7','t8','t9','t10','t11','t12','t13','t14','t15','t16','t17','t18','t19','t20','t21',
                                                        't22','t23','t24','t25','t26','t27','t28','t29','t30','t31','t32','t33','t34','t35','t36','t37'));

    }

    public function showMatrix(){
        set_time_limit(0);


        $vars = Matrix::get();
        foreach($vars as $row){
            //s1
            if($row->S1 == 'TC' || $row->S1 == 'Y' || $row->S1 == '0'){
                $save = Matrix::find($row->id);
                $save->S1='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S1 = '1';

            }
            //s2
            if($row->S2 == 'TC' || $row->S2 == 'Y' || $row->S2 == '0'){
                $save = Matrix::find($row->id);
                $save->S2='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S2 = '1';

            }
            //s3
            if($row->S3 == 'TC' || $row->S3 == 'Y' || $row->S3 == '0'){
                $save = Matrix::find($row->id);
                $save->S3='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S3 = '1';

            }
            //s4
            if($row->S4 == 'TC' || $row->S4 == 'Y' || $row->S4 == '0'){
                $save = Matrix::find($row->id);
                $save->S4='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S4 = '1';

            }
            //s5
            if($row->S5 == 'TC' || $row->S5 == 'Y' || $row->S5 == '0'){
                $save = Matrix::find($row->id);
                $save->S5='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S5 = '1';

            }
            //s6
            if($row->S6 == 'TC' || $row->S6 == 'Y' || $row->S6 == '0'){
                $save = Matrix::find($row->id);
                $save->S6='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S6 = '1';
            }
            //s7
            if($row->S7 == 'TC' || $row->S7 == 'Y' || $row->S7 == '0'){
                $save = Matrix::find($row->id);
                $save->S7='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S7 = '1';
            }
            //s7
            if($row->S8 == 'TC' || $row->S8 == 'Y' || $row->S8 == '0'){
                $save = Matrix::find($row->id);
                $save->S8='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S8 = '1';
            }
            //s8
            if($row->S9 == 'TC' || $row->S9 == 'Y' || $row->S9 == '0'){
                $save = Matrix::find($row->id);
                $save->S9='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S9 = '1';
            }
            //s9
            if($row->S10 == 'TC' || $row->S10 == 'Y' || $row->S10 == '0'){
                $save = Matrix::find($row->id);
                $save->S10='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S10 = '1';
            }
            //s10
            if($row->S11 == 'TC' || $row->S11 == 'Y' || $row->S11 == '0'){
                $save = Matrix::find($row->id);
                $save->S11='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S11 = '1';
            }
            //s11
            if($row->S12 == 'TC' || $row->S12 == 'Y' || $row->S12 == '0'){
                $save = Matrix::find($row->id);
                $save->S12='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S12 = '1';
            }
            //s12
            if($row->S13 == 'TC' || $row->S13 == 'Y' || $row->S13 == '0'){
                $save = Matrix::find($row->id);
                $save->S13='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S13 = '1';
            }
            //s13
            if($row->S14 == 'TC' || $row->S14 == 'Y' || $row->S14 == '0'){
                $save = Matrix::find($row->id);
                $save->S14='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S14 = '1';
            }
            //s14
            if($row->S15 == 'TC' || $row->S15 == 'Y' || $row->S15 == '0'){
                $save = Matrix::find($row->id);
                $save->S15='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S15 = '1';
            }
            //s15
            if($row->S16 == 'TC' || $row->S16 == 'Y' || $row->S16 == '0'){
                $save = Matrix::find($row->id);
                $save->S16='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S16 = '1';
            }
            //s16
            if($row->S17 == 'TC' || $row->S17 == 'Y' || $row->S17 == '0'){
                $save = Matrix::find($row->id);
                $save->S17='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S17 = '1';
            }
            //s17
            if($row->S18 == 'TC' || $row->S18 == 'Y' || $row->S18 == '0'){
                $save = Matrix::find($row->id);
                $save->S18='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S18 = '1';
            }
            //s18
            if($row->S19 == 'TC' || $row->S19 == 'Y' || $row->S19 == '0'){
                $save = Matrix::find($row->id);
                $save->S19='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S19 = '1';
            }
            //s19
            if($row->S20 == 'TC' || $row->S20 == 'Y' || $row->S20 == '0'){
                $save = Matrix::find($row->id);
                $save->S20='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S20 = '1';
            }
            //s20
            if($row->S21 == 'TC' || $row->S21 == 'Y' || $row->S21 == '0'){
                $save = Matrix::find($row->id);
                $save->S21='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S21 = '1';
            }
            //s21
            if($row->S22_E1 == 'TC' || $row->S22_E1 == 'Y' || $row->S22_E1 == '0'){
                $save = Matrix::find($row->id);
                $save->S22_E1='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S22_E1 = '1';
            }
            if($row->S23_E1 == 'TC' || $row->S23_E1 == 'Y' || $row->S23_E1 == '0'){
                $save = Matrix::find($row->id);
                $save->S23_E1='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S23_E1 = '1';
            }
            //s22
            if($row->S24_E1 == 'TC' || $row->S24_E1 == 'Y' || $row->S24_E1 == '0'){
                $save = Matrix::find($row->id);
                $save->S24_E1='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S24_E1 = '1';
            }
            if($row->kejuruteraan_keperluan == 'TC' || $row->kejuruteraan_keperluan == 'Y' || $row->kejuruteraan_keperluan == '0'){
                $save = Matrix::find($row->id);
                $save->kejuruteraan_keperluan='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S25_E2 = '1';
            }
            //s23
            if($row->S25_E2 == 'TC' || $row->S25_E2 == 'Y' || $row->S25_E2 == '0'){
                $save = Matrix::find($row->id);
                $save->S25_E2='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S25_E2 = '1';
            }
            //s24
            if($row->S26_E2 == 'TC' || $row->S26_E2 == 'Y' || $row->S26_E2 == '0'){
                $save = Matrix::find($row->id);
                $save->S26_E2='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S26_E2 = '1';
            }
            //s25
            if($row->S27_E2 == 'TC' || $row->S27_E2 == 'Y' || $row->S27_E2 == '0'){
                $save = Matrix::find($row->id);
                $save->S27_E2='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S27_E2 = '1';
            }
            //s26
            if($row->S28_E2 == 'TC' || $row->S28_E2 == 'Y' || $row->S28_E2 == '0'){
                $save = Matrix::find($row->id);
                $save->S28_E2='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S28_E2 = '1';
            }
            //s27
            if($row->S29_E2 == 'TC' || $row->S29_E2 == 'Y' || $row->S29_E2 == '0'){
                $save = Matrix::find($row->id);
                $save->S29_E2='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S29_E2 = '1';
            }
            //s28
            if($row->S30_E3 == 'TC' || $row->S30_E3 == 'Y' || $row->S30_E3 == '0'){
                $save = Matrix::find($row->id);
                $save->S30_E3='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S30_E3 = '1';
            }

            if($row->S31_E3 == 'TC' || $row->S31_E3 == 'Y' || $row->S31_E3 == '0'){
                $save = Matrix::find($row->id);
                $save->S31_E3='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S31_E3 = '1';
            }

            if($row->S32_E3 == 'TC' || $row->S32_E3 == 'Y' || $row->S32_E3 == '0'){
                $save = Matrix::find($row->id);
                $save->S32_E3='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S32_E3 = '1';
            }

            if($row->S33_E3 == 'TC' || $row->S33_E3 == 'Y' || $row->S33_E3 == '0'){
                $save = Matrix::find($row->id);
                $save->S33_E3='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S33_E3 = '1';
            }

            if($row->S34_E4 == 'TC' || $row->S34_E4 == 'Y' || $row->S34_E4 == '0'){
                $save = Matrix::find($row->id);
                $save->S34_E4='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S34_E4 = '1';
            }

            if($row->S35_E4 == 'TC' || $row->S35_E4 == 'Y' || $row->S35_E4 == '0'){
                $save = Matrix::find($row->id);
                $save->S35_E4='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S35_E4 = '1';
            }

            if($row->S36_E4 == 'TC' || $row->S36_E4 == 'Y' || $row->S36_E4 == '0'){
                $save = Matrix::find($row->id);
                $save->S36_E4='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S36_E4 = '1';
            }

            if($row->S37_E4 == 'TC' || $row->S37_E4 == 'Y' || $row->S37_E4 == '0'){
                $save = Matrix::find($row->id);
                $save->S37_E4='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->S37_E4 = '1';
            }

        }
        //     // code to save the total subject left inside the database
            \DB::table('matrices')->update([
            'total_subject_left' => \DB::raw('S1+S2+S3+S4+S5+S6+ S7+S8+S9+S10
            +S11+S12+S13+ S14+S15
            +S16+S17+S18+ S19+S20+S21+S22_E1+S23_E1+S24_E1
            +S25_E2+S26_E2+S27_E2+S28_E2+S29_E2+S30_E3
            +S31_E3+S32_E3+ S33_E3+ S34_E4+ S35_E4+S36_E4+ S37_E4')
        ]);

        return view('admin.subject_matrix')->with(compact('vars'));
    }

    public function showFinalYear(){

        $finalyear_students = Matrix::where('total_subject_left','<',10)->get();
        //$finalyear_students = Matrix::get();
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

        return view('admin.final_year_list')->with(compact('finalyear_students','t1','t2','t3','t4','t5','t6','t7','t8','t9','t10','t11','t12','t13','t14','t15','t16','t17','t18','t19','t20','t21',
        't22','t23','t24','t25','t26','t27','t28','t29','t30','t31','t32','t33','t34','t35','t36','t37'));
    }

    public function generalSubject(){

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

        return view ('admin.general subject')->with(compact('t1','t2','t3','t4','t5','t6','t7','t8','t9','t10','t11','t12','t13','t14','t15','t16','t17','t18','t19','t20','t21',
        't22','t23','t24','t25','t26','t27','t28','t29','t30','t31','t32','t33','t34','t35','t36','t37'));

    }

    public function generatedSubject(){

        $subjects = TemporarySubject::orderBy('subject_type','asc')->get();

        return view('admin.generated subject')->with(compact('subjects'));
    }

    public function AnalisadanRekabentukSistem(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S11', '=', '1']
            ])->get();
        return view ('scsj_subject.Analisa dan Rekabentuk Sistem')->with(compact('subject'));
    }

    public function InteraksiKomputerManusia(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S13', '=', '1']
            ])->get();
        return view ('scsj_subject.Interaksi Komputer Manusia')->with(compact('subject'));
    }

    public function JaminanKualitiPerisian(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S28_E2', '=', '1']
            ])->get();
        return view ('scsj_subject.Jaminan Kualiti Perisian')->with(compact('subject'));
    }

    public function KebarangkaliandanAnalisaDataStatistik(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S14', '=', '1']
            ])->get();
        return view ('scsj_subject.Kebarangkalian dan Analisa Data Statistik')->with(compact('subject'));
    }

    public function KejuruteraanKeperluandanPermodelanPerisian(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S23_E1', '=', '1']
            ])->get();
        return view ('scsj_subject.Kejuruteraan Keperluan dan Permodelan Perisian')->with(compact('subject'));
    }

    public function KejuruteraanPerisianBerorentasikanEjen(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S37_E4', '=', '1']
            ])->get();
        return view ('scsj_subject.Kejuruteraan Perisian Berorentasikan Ejen')->with(compact('subject'));
    }

    public function KejuruteraanPerisianMasaNyata(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S35_E4', '=', '1']
            ])->get();
        return view ('scsj_subject.Kejuruteraan Perisian Masa Nyata')->with(compact('subject'));
    }

    public function KepintaranKomputer(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S31_E3', '=', '1']
            ])->get();
        return view ('scsj_subject.Kepintaran Komputer')->with(compact('subject'));
    }

    public function KeushawananTeknologiMaklumatdanSeminar(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S19', '=', '1']
            ])->get();
        return view ('scsj_subject.Keushawanan Teknologi Maklumat dan Seminar')->with(compact('subject'));
    }

    public function KejuruteraanPerisian(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S16', '=', '1']
            ])->get();
        return view ('scsj_subject.Kejuruteraan Perisian')->with(compact('subject'));
    }

    public function KepintaranBuatan(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S25_E2', '=', '1']
            ])->get();
        return view ('scsj_subject.Kepintaran Buatan')->with(compact('subject'));
    }

    public function KomunikasiRangkaian(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S7', '=', '1']
            ])->get();
        return view ('scsj_subject.Komunikasi Rangkaian')->with(compact('subject'));
    }

    public function LogikDigital(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S4', '=', '1']
            ])->get();
        return view ('scsj_subject.Logik Digital')->with(compact('subject'));
    }

    public function MatematikPengkomputeran(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S5', '=', '1']
            ])->get();
        return view ('scsj_subject.Matematik Pengkomputeran')->with(compact('subject'));
    }

    public function OrganisasiSenibinaKomputer(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S12', '=', '1']
            ])->get();
        return view ('scsj_subject.Organisasi Senibina Komputer')->with(compact('subject'));
    }

    public function PangkalanData(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S9', '=', '1']
            ])->get();
        return view ('scsj_subject.Pangkalan Data')->with(compact('subject'));
    }

    public function PembangunanAplikasi(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S26_E2', '=', '1']
            ])->get();
        return view ('scsj_subject.Pembangunan Aplikasi')->with(compact('subject'));
    }

    public function PembinaanPerisian(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S34_E4', '=', '1']
            ])->get();
        return view ('scsj_subject.Pembinaan Perisian')->with(compact('subject'));
    }

    public function PengaturcaraanBerorentasikanObjek(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S15', '=', '1']
            ])->get();
        return view ('scsj_subject.Pengaturcaraan Berorentasikan Objek')->with(compact('subject'));
    }

    public function PengaturcaraanInternet(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S27_E2', '=', '1']
            ])->get();
        return view ('scsj_subject.Pengaturcaraan Internet')->with(compact('subject'));
    }

    public function PengaturcaraanPangkalanData(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S22_E1', '=', '1']
            ])->get();
        return view ('scsj_subject.Pengaturcaraan Pangkalan Data')->with(compact('subject'));
    }

    public function PengaturcaraanWeb(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S8', '=', '1']
            ])->get();
        return view ('scsj_subject.Pengaturcaraan Web')->with(compact('subject'));
    }

    public function PengurusanProjekPerisian(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S24_E1', '=', '1']
            ])->get();
        return view ('scsj_subject.Pengurusan Projek Perisian')->with(compact('subject'));
    }

    public function Projek1(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S20', '=', '1']
            ])->get();
        return view ('scsj_subject.Projek 1')->with(compact('subject'));
    }

    public function Projek2(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S21', '=', '1']
            ])->get();
        return view ('scsj_subject.Projek 2')->with(compact('subject'));
    }

    public function RekabentukdanSenibinaPerisian(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S30_E3', '=', '1']
            ])->get();
        return view ('scsj_subject.Rekabentuk dan Senibina Perisian')->with(compact('subject'));
    }

    public function SistemPakarBerasaskanPengetahuan(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S29_E2', '=', '1']
            ])->get();
        return view ('scsj_subject.Sistem Pakar Berasaskan Pengetahuan')->with(compact('subject'));
    }

    public function SistemPengoperasian(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S17', '=', '1']
            ])->get();
        return view ('scsj_subject.Sistem Pengoperasian')->with(compact('subject'));
    }

    public function StrukturDatadanAlgoritma(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S10', '=', '1']
            ])->get();
        return view ('scsj_subject.Struktur Data dan Algoritma')->with(compact('subject'));
    }

    public function StrukturDiskrit(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S2', '=', '1']
            ])->get();
        return view ('scsj_subject.Struktur Diskrit')->with(compact('subject'));
    }

    public function TeknikPengaturcaraan1(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S3', '=', '1']
            ])->get();
        return view ('scsj_subject.Teknik Pengaturcaraan 1')->with(compact('subject'));
    }

    public function TeknikPengaturcaraan2(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S6', '=', '1']
            ])->get();
        return view ('scsj_subject.Teknik Pengaturcaraan 2')->with(compact('subject'));
    }

    public function TeknikPengaturcaraan3(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S32_E3', '=', '1']
            ])->get();
        return view ('scsj_subject.Teknik Pengaturcaraan 3')->with(compact('subject'));
    }

    public function TeknologidanSistemMaklumat(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S1', '=', '1']
            ])->get();
        return view ('scsj_subject.Teknologi dan Sistem Maklumat')->with(compact('subject'));
    }

    public function TeknologiWeb(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S36_E4', '=', '1']
            ])->get();
        return view ('scsj_subject.Teknologi Web')->with(compact('subject'));
    }

    public function TeoriSainsKomputer(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S18', '=', '1']
            ])->get();
        return view ('scsj_subject.Teori Sains Komputer')->with(compact('subject'));
    }

    public function TopikKhasdalamKejuruteraanPerisian(){

        $subject = Matrix::where([
            ['total_subject_left', '<', '10'],
            ['S33_E3', '=', '1']
            ])->get();
        return view ('scsj_subject.Topik Khas dalam Kejuruteraan Perisian')->with(compact('subject'));
    }
}
