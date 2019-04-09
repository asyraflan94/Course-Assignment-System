<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matrix;
use App\TemporarySubject;

class TemporaryController extends Controller{

    //remove constraints
    public function electiveGroup(){

        //elective E2
        $S25_E2 = Matrix::where('total_subject_left','<',10)->sum('S25_E2');
        $S26_E2 = Matrix::where('total_subject_left','<',10)->sum('S26_E2');
        $S27_E2 = Matrix::where('total_subject_left','<',10)->sum('S27_E2');
        $S28_E2 = Matrix::where('total_subject_left','<',10)->sum('S28_E2');
        $S29_E2 = Matrix::where('total_subject_left','<',10)->sum('S29_E2');

        //elective E3
        $S30_E3 = Matrix::where('total_subject_left','<',10)->sum('S30_E3');
        $S31_E3 = Matrix::where('total_subject_left','<',10)->sum('S31_E3');
        $S32_E3 = Matrix::where('total_subject_left','<',10)->sum('S32_E3');
        $S33_E3 = Matrix::where('total_subject_left','<',10)->sum('S33_E3');

        //elective E4
        $S34_E4 = Matrix::where('total_subject_left','<',10)->sum('S34_E4');
        $S35_E4 = Matrix::where('total_subject_left','<',10)->sum('S35_E4');
        $S36_E4 = Matrix::where('total_subject_left','<',10)->sum('S36_E4');
        $S37_E4 = Matrix::where('total_subject_left','<',10)->sum('S37_E4');




        $fy = Matrix::where([
            ['total_subject_left', '<', '10']
            ])->get();


            foreach ($fy as $rows) {

                 // remove constrain if the subject remaining is the only choice either (S22/S23)

                if (($rows->S23_E1=='1' && $rows->S24_E1=='1') && ($rows->S24_E1+$rows->S23_E1 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S23_E1','subject_code' => 'SCSJ2253','subject_long_name' => 'Requirement Engineering & Software Modelling']);
                }

                // if (($rows->S24_E1=='1') && ($rows->S24_E1+$rows->S23_E1 > '1')){
                //     $subj = TemporarySubject::updateOrCreate(
                //         ['subject_name' => 'S24_E1','subject_code' => 'SCSJ2363','subject_long_name' => 'Software Project Management']);
                // }

                // remove constrain if the subject remaining is the only choice either (S25/S26/S27/S28/S29)
                if (($rows->S25_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    if ($S25_E2 > max($S26_E2,$S27_E2,$S28_E2,$S29_E2)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S25_E2','subject_code' => 'SCSJ3553','subject_long_name' => 'Artificial Intelligent']);
                    }
                }

                if (($rows->S26_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    if ($S26_E2 > max($S25_E2,$S27_E2,$S28_E2,$S29_E2)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S26_E2','subject_code' => 'SCSJ3104','subject_long_name' => 'Application Development']);
                    }
                }

                if (($rows->S27_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    if ($S27_E2 > max($S25_E2,$S26_E2,$S28_E2,$S29_E2)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S27_E2','subject_code' => 'SCSJ3303','subject_long_name' => 'Internet Programming']);
                    }
                }

                if (($rows->S28_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    if ($S28_E2 > max($S25_E2,$S26_E2,$S27_E2,$S29_E2)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S28_E2','subject_code' => 'SCSJ3343','subject_long_name' => 'Software Quality Assurance']);
                    }
                }

                if (($rows->S29_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    if ($S29_E2 > max($S25_E2,$S26_E2,$S27_E2,$S28_E2)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S29_E2','subject_code' => 'SCSJ3603','subject_long_name' => 'Knowledge-Based & Expert System']);

                    }
                }

                // remove constrain if the subject remaining is the only choice either (S30/S31/S32/S33)
                if (($rows->S30_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1')){
                    if ($S30_E3 > max($S31_E3,$S32_E3,$S33_E3)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S30_E3','subject_code' => 'SCSJ3323','subject_long_name' => 'Software Design & Architecture']);
                    }
                }

                if (($rows->S31_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1')){
                    if ($S31_E3 > max($S30_E3,$S32_E3,$S33_E3)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S31_E3','subject_code' => 'SCSJ3563','subject_long_name' => 'Computer Intelligence']);
                    }
                }

                if (($rows->S32_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1')){
                    if ($S32_E3 > max($S30_E3,$S31_E3,$S33_E3)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S32_E3','subject_code' => 'SCSJ3253','subject_long_name' => 'Programming Technique 3']);
                    }
                }

                if (($rows->S33_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1')){
                    if ($S33_E3 > max($S30_E3,$S31_E3,$S32_E3)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S33 _E3','subject_code' => 'SCSJ3403','subject_long_name' => 'Special Topic in Software Engineering']);
                    }
                }

                //remove constrain if the subject remaining is the only choice either (S34/S35/S36/S37)
                if (($rows->S34_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1')){
                    if ($S34_E4 > max($S35_E4,$S36_E4,$S37_E4)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S34_E4','subject_code' => 'SCSJ4383','subject_long_name' => 'Software Construction']);
                    }
                }

                if (($rows->S35_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1')){
                    if ($S35_E4 > max($S34_E4,$S36_E4,$S37_E4)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S35_E4','subject_code' => 'SCSJ4423','subject_long_name' => 'Real-Time Software Engineering']);
                    }
                }

                if (($rows->S36_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1')){
                    if ($S36_E4 > max($S34_E4,$S35_E4,$S37_E4)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S36_E4','subject_code' => 'SCSJ4483','subject_long_name' => 'Web Technology']);
                    }
                }

                if (($rows->S37_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1')){
                    if ($S37_E4 > max($S34_E4,$S35_E4,$S36_E4)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S37_E4','subject_code' => 'SCSJ4463','subject_long_name' => 'Agent-Oriented Software Engineering']);
                    }
                }
        }
        //return view('offer subject')->with(compact('subj'));
    }
}

