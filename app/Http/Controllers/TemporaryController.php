<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matrix;
use App\TemporarySubject;

class TemporaryController extends Controller{

    //remove constraints
    public function electiveGroup(){
        $fy = Matrix::where([
            ['total_subject_left', '<', '10']
            ])->get();


            foreach ($fy as $rows) {

                 // remove constrain if the subject remaining is the only choice either (S22/S23)
                if (($rows->S22_E1=='1') && ($rows->S22_E1+$rows->S23_E1 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S22_E1','subject_code' => 'SCSD2623','subject_long_name' => 'Pengaturcaraan Pangkalan Data']);
                }

                if (($rows->S23_E1=='1') && ($rows->S22_E1+$rows->S23_E1 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S22_E1','subject_code' => 'SCSJ2253','subject_long_name' => 'Requirement Engineering & Software Modelling']);
                }

                // remove constrain if the subject remaining is the only choice either (S25/S26/S27/S28/S29)
                if (($rows->S25_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S25_E2','subject_code' => 'SCSJ3553','subject_long_name' => 'Artificial Intelligent']);
                }

                if (($rows->S26_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S26_E2','subject_code' => 'SCSJ3104','subject_long_name' => 'Application Development']);
                }

                if (($rows->S27_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S27_E2','subject_code' => 'SCSJ3303','subject_long_name' => 'Internet Programming']);
                }

                if (($rows->S28_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S28_E2','subject_code' => 'SCSJ3343','subject_long_name' => 'Software Quality Assurance']);
                }

                if (($rows->S29_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S29_E2','subject_code' => 'SCSJ3603','subject_long_name' => 'Knowledge-Based & Expert System']);
                }

                // remove constrain if the subject remaining is the only choice either (S30/S31/S32/S33)
                if (($rows->S30_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S30_E3','subject_code' => 'SCSJ3323','subject_long_name' => 'Software Design & Architecture']);
                }

                if (($rows->S31_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S31_E3','subject_code' => 'SCSJ3563','subject_long_name' => 'Computer Intelligence']);
                }

                if (($rows->S32_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S32_E3','subject_code' => 'SCSJ3253','subject_long_name' => 'Programming Technique 3']);
                }

                if (($rows->S33_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S33 _E3','subject_code' => 'SCSJ3403','subject_long_name' => 'Special Topic in Software Engineering']);
                }

                // remove constrain if the subject remaining is the only choice either (S34/S35/S36/S37)
                if (($rows->S34_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S34_E4','subject_code' => 'SCSJ4383','subject_long_name' => 'Software Construction']);
                }

                if (($rows->S35_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S35_E4','subject_code' => 'SCSJ4423','subject_long_name' => 'Real-Time Software Engineering']);
                }

                if (($rows->S36_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S36_E4','subject_code' => 'SCSJ4483','subject_long_name' => 'Web Technology']);
                }

                if (($rows->S37_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S37_E4','subject_code' => 'SCSJ4463','subject_long_name' => 'Agent-Oriented Software Engineering']);
                }
        }
        //return view('offer subject')->with(compact('subj'));
    }
}

