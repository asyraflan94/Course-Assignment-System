<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matrix;
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

        $finalyear_students = Matrix::get()->where('total_subject_left','<',10);
        return view('admin.final_year_list')->with(compact('finalyear_students'));
    }

    public function showSubjectListFinalYear(){

        $t1  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S1');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S1'],
                ['student_number' => $t1]);  
        $t2  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S2');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S2'],
                ['student_number' => $t2]); 
        $t3  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S3');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S3'],
                ['student_number' => $t3]); 
        $t4  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S4');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S4'],
                ['student_number' => $t4]); 
        $t5  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S5');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S5'],
                ['student_number' => $t5]); 
        $t6  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S6');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S6'],
                ['student_number' => $t6]); 
        $t7  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S7');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S7'],
                ['student_number' => $t7]); 
        $t8  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S8');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S8'],
                ['student_number' => $t8]); 
        $t9  = DB::table('matrices')->where('total_subject_left','<',10)->sum('S9');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S9'],
                ['student_number' => $t9]); 
        $t10 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S10');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S10'],
                ['student_number' => $t10]); 
        $t11 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S11');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S11'],
                ['student_number' => $t11]); 
        $t12 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S12');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S12'],
                ['student_number' => $t12]); 
        $t13 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S13');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S13'],
                ['student_number' => $t13]); 
        $t14 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S14');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S14'],
                ['student_number' => $t14]); 
        $t15 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S15');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S15'],
                ['student_number' => $t15]); 
        $t16 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S16');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S16'],
                ['student_number' => $t16]); 
        $t17 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S17');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S17'],
                ['student_number' => $t17]); 
        $t18 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S18');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S18'],
                ['student_number' => $t18]); 
        $t19 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S19');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S19'],
                ['student_number' => $t19]); 
        $t20 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S20');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S20'],
                ['student_number' => $t20]); 
        $t21 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S21');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S21'],
                ['student_number' => $t21]); 
        $t22 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S23_E1');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S23_E1'],
                ['student_number' => $t22]); 
        $t23 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S24_E1');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S24_E1'],
                ['student_number' => $t23]); 
        $t24 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S25_E2');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S25_E2'],
                ['student_number' => $t24]); 
        $t25 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S26_E2');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S26_E2'],
                ['student_number' => $t25]); 
        $t26 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S27_E2');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S27_E2'],
                ['student_number' => $t26]); 
        $t27 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S28_E2');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S28_E2'],
                ['student_number' => $t27]); 
        $t28 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S29_E2');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S29_E2'],
                ['student_number' => $t28]); 
        $t29 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S30_E3');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S30_E3'],
                ['student_number' => $t29]); 
        $t30 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S31_E3');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S31_E3'],
                ['student_number' => $t30]); 
        $t31 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S32_E3');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S32_E3'],
                ['student_number' => $t31]); 
        $t32 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S33_E3');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S33_E3'],
                ['student_number' => $t32]); 
        $t33 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S34_E4');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S34_E4'],
                ['student_number' => $t33]); 
        $t34 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S35_E4');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S35_E4'],
                ['student_number' => $t34]); 
        $t35 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S36_E4');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S36_E4'],
                ['student_number' => $t35]); 
        $t36 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S37_E4');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S37_E4'],
                ['student_number' => $t36]); 
        $t37 = DB::table('matrices')->where('total_subject_left','<',10)->sum('S22_E1');
        $s1  = DB::table('finalyear_subjects')
                ->updateOrInsert(
                ['subject_name' => 'S22_E1'],
                ['student_number' => $t37]); 

        return view ('admin.final_year_subject_list')->with(compact('t1','t2','t3','t4','t5','t6','t7','t8','t9','t10','t11','t12','t13','t14','t15','t16','t17','t18','t19','t20','t21',
                                                        't22','t23','t24','t25','t26','t27','t28','t29','t30','t31','t32','t33','t34','t35','t36','t37'));
    }
}
