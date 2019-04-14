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

        // $fy = Matrix::get();

        //  //elective E2
        //  $S25_E2 = Matrix::sum('S25_E2');
        //  $S26_E2 = Matrix::sum('S26_E2');
        //  $S27_E2 = Matrix::sum('S27_E2');
        //  $S28_E2 = Matrix::sum('S28_E2');
        //  $S29_E2 = Matrix::sum('S29_E2');

        //  //elective E3
        //  $S30_E3 = Matrix::sum('S30_E3');
        //  $S31_E3 = Matrix::sum('S31_E3');
        //  $S32_E3 = Matrix::sum('S32_E3');
        //  $S33_E3 = Matrix::sum('S33_E3');

        //  //elective E4
        //  $S34_E4 = Matrix::sum('S34_E4');
        //  $S35_E4 = Matrix::sum('S35_E4');
        //  $S36_E4 = Matrix::sum('S36_E4');
        //  $S37_E4 = Matrix::sum('S37_E4');


            foreach ($fy as $rows) {

                 // remove constrain if the subject remaining is the only choice either (S22/S23)

                if (($rows->S23_E1=='1' && $rows->S24_E1=='1') && ($rows->S24_E1+$rows->S23_E1 > '1')){
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S23_E1','subject_code' => 'SCSJ2253','subject_long_name' => 'Requirement Engineering & Software Modelling','subject_type'=>'elective 1']);
                }

                // if (($rows->S24_E1=='1') && ($rows->S24_E1+$rows->S23_E1 > '1')){
                //     $subj = TemporarySubject::updateOrCreate(
                //         ['subject_name' => 'S24_E1','subject_code' => 'SCSJ2363','subject_long_name' => 'Software Project Management']);
                // }

                // remove constrain if the subject remaining is the only choice either (S25/S26/S27/S28/S29)
                if (($rows->S25_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    if ($S25_E2 > max($S26_E2,$S27_E2,$S28_E2,$S29_E2)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S25_E2','subject_code' => 'SCSJ3553','subject_long_name' => 'Artificial Intelligent','subject_type'=>'elective 2']);
                    }
                }

                if (($rows->S26_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    if ($S26_E2 > max($S25_E2,$S27_E2,$S28_E2,$S29_E2)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S26_E2','subject_code' => 'SCSJ3104','subject_long_name' => 'Application Development','subject_type'=>'elective 2']);
                    }
                }

                if (($rows->S27_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    if ($S27_E2 > max($S25_E2,$S26_E2,$S28_E2,$S29_E2)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S27_E2','subject_code' => 'SCSJ3303','subject_long_name' => 'Internet Programming','subject_type'=>'elective 2']);
                    }
                }

                if (($rows->S28_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    if ($S28_E2 > max($S25_E2,$S26_E2,$S27_E2,$S29_E2)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S28_E2','subject_code' => 'SCSJ3343','subject_long_name' => 'Software Quality Assurance','subject_type'=>'elective 2']);
                    }
                }

                if (($rows->S29_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1')){
                    if ($S29_E2 > max($S25_E2,$S26_E2,$S27_E2,$S28_E2)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S29_E2','subject_code' => 'SCSJ3603','subject_long_name' => 'Knowledge-Based & Expert System','subject_type'=>'elective 2']);

                    }
                }

                // remove constrain if the subject remaining is the only choice either (S30/S31/S32/S33)
                if (($rows->S30_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1')){
                    if ($S30_E3 > max($S31_E3,$S32_E3,$S33_E3)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S30_E3','subject_code' => 'SCSJ3323','subject_long_name' => 'Software Design & Architecture','subject_type'=>'elective 3']);
                    }
                    // elseif ($rows->S30_E3+$rows->S31_E3 == '2') {
                    //     $subj = TemporarySubject::updateOrCreate(
                    //         ['subject_name' => 'S30_E3','subject_code' => 'SCSJ3323','subject_long_name' => 'Software Design & Architecture','subject_type'=>'elective 3']);
                    // }
                }

                if (($rows->S31_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1')){
                    if ($S31_E3 > max($S30_E3,$S32_E3,$S33_E3)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S31_E3','subject_code' => 'SCSJ3563','subject_long_name' => 'Computer Intelligence','subject_type'=>'elective 3']);
                    }
                    // elseif ($rows->S31_E3+$rows->S32_E3 == '2') {
                    //     $subj = TemporarySubject::updateOrCreate(
                    //         ['subject_name' => 'S31_E3','subject_code' => 'SCSJ3563','subject_long_name' => 'Computer Intelligence','subject_type'=>'elective 3']);
                    // }
                }

                if (($rows->S32_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1')){
                    if ($S32_E3 > max($S30_E3,$S31_E3,$S33_E3)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S32_E3','subject_code' => 'SCSJ3253','subject_long_name' => 'Programming Technique 3','subject_type'=>'elective 3']);
                    }
                    // elseif ($rows->S32_E3+$rows->S33_E3 == '2') {
                    //     $subj = TemporarySubject::updateOrCreate(
                    //         ['subject_name' => 'S32_E3','subject_code' => 'SCSJ3253','subject_long_name' => 'Programming Technique 3','subject_type'=>'elective 3']);
                    // }
                }

                if (($rows->S33_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1')){
                    if ($S33_E3 > max($S30_E3,$S31_E3,$S32_E3)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S33 _E3','subject_code' => 'SCSJ3403','subject_long_name' => 'Special Topic in Software Engineering','subject_type'=>'elective 3']);
                    }
                }

                //remove constrain if the subject remaining is the only choice either (S34/S35/S36/S37)
                if (($rows->S34_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1')){
                    if ($S34_E4 > max($S35_E4,$S36_E4,$S37_E4)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S34_E4','subject_code' => 'SCSJ4383','subject_long_name' => 'Software Construction','subject_type'=>'elective 4']);
                    }
                }

                if (($rows->S35_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1')){
                    if ($S35_E4 > max($S34_E4,$S36_E4,$S37_E4)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S35_E4','subject_code' => 'SCSJ4423','subject_long_name' => 'Real-Time Software Engineering','subject_type'=>'elective 4']);
                    }
                }

                if (($rows->S36_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1')){
                    if ($S36_E4 > max($S34_E4,$S35_E4,$S37_E4)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S36_E4','subject_code' => 'SCSJ4483','subject_long_name' => 'Web Technology','subject_type'=>'elective 4']);
                    }
                }

                if (($rows->S37_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1')){
                    if ($S37_E4 > max($S34_E4,$S35_E4,$S36_E4)) {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S37_E4','subject_code' => 'SCSJ4463','subject_long_name' => 'Agent-Oriented Software Engineering','subject_type'=>'elective 4']);
                    }
                }

                // offer compulsory subject for fy student that have <= 3 subject left
                if($rows->S1+$rows->S2+$rows->S3+$rows->S4+$rows->S5+$rows->S6+$rows->S7+$rows->S8+$rows->S9+$rows->S10+$rows->S11+$rows->S12+$rows->S13+$rows->S14+$rows->S15+$rows->S16+$rows->S17+$rows->S18+$rows->S19+($rows->S20||$rows->S21)<= '3') {
                    if ($rows->S1=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S1','subject_code' => 'SCSD1513','subject_long_name' => 'Technology & Information System','subject_type'=>'compulsory']);
                    }
                    if ($rows->S2=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S2','subject_code' => 'SCSI1013','subject_long_name' => 'Discrete Structure','subject_type'=>'compulsory']);
                    }
                    if ($rows->S3=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S3','subject_code' => 'SCSJ1013','subject_long_name' => 'Programming Technique 1','subject_type'=>'compulsory']);
                    }
                    if ($rows->S4=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S4','subject_code' => 'SCSR1013','subject_long_name' => 'Digital Logic','subject_type'=>'compulsory']);
                    }
                    if ($rows->S5=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S5','subject_code' => 'SCSI1113','subject_long_name' => 'Computational Mathematics','subject_type'=>'compulsory']);
                    }
                    if ($rows->S6=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S6','subject_code' => 'SCSJ1023','subject_long_name' => 'Programming Technique 2','subject_type'=>'compulsory']);
                    }
                    if ($rows->S7=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S7','subject_code' => 'SCSR1213','subject_long_name' => 'Network Communications','subject_type'=>'compulsory']);
                    }
                    if ($rows->S8=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S8','subject_code' => 'SCSV1223','subject_long_name' => 'Web Programming','subject_type'=>'compulsory']);
                    }
                    if ($rows->S9=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S9','subject_code' => 'SCSD2523','subject_long_name' => 'Database','subject_type'=>'compulsory']);
                    }
                    if ($rows->S10=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S10','subject_code' => 'SCSJ2013','subject_long_name' => 'Data Structure & Algorithm','subject_type'=>'compulsory']);
                    }
                    if ($rows->S11=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S11','subject_code' => 'SCSD2613','subject_long_name' => 'System Analysis and Design','subject_type'=>'compulsory']);
                    }
                    if ($rows->S12=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S12','subject_code' => 'SCSR2033','subject_long_name' => 'Computer Organisation and Architecture','subject_type'=>'compulsory']);
                    }
                    if ($rows->S13=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S13','subject_code' => 'SCSV2113','subject_long_name' => 'Human Computer Interaction','subject_type'=>'compulsory']);
                    }
                    if ($rows->S14=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S14','subject_code' => 'SCSI2143','subject_long_name' => 'Probability & Statistical Data Analysis','subject_type'=>'compulsory']);
                    }
                    if ($rows->S15=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S15','subject_code' => 'SCSJ2154','subject_long_name' => 'Object Oriented Programming','subject_type'=>'compulsory']);
                    }
                    if ($rows->S16=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S16','subject_code' => 'SCSJ2203','subject_long_name' => 'Software Engineering','subject_type'=>'compulsory']);
                    }
                    if ($rows->S17=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S17','subject_code' => 'SCSR2043','subject_long_name' => 'Operating System','subject_type'=>'compulsory']);
                    }
                    if ($rows->S18=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S18','subject_code' => 'SCSJ3203','subject_long_name' => 'Theory of Computer Science','subject_type'=>'compulsory']);
                    }
                    if ($rows->S19=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S19','subject_code' => 'UCSD2762','subject_long_name' => 'Technopreneurship and Seminar','subject_type'=>'compulsory']);
                    }
                    if ($rows->S20=='1' && $rows->S21=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S20','subject_code' => 'SCSJ3032','subject_long_name' => 'Software Engineering Project 1','subject_type'=>'compulsory']);
                    }
                    if ($rows->S20=='0' && $rows->S21=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S21','subject_code' => 'SCSJ4134','subject_long_name' => 'Software Engineering Project 2','subject_type'=>'compulsory']);
                    }
                }
                // check if all elective <=3 offer the elective
                if ($rows->S23_E1+$rows->S24_E1+$rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2+$rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3+$rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 < '4'){
                    if ($rows->S25_E2=='1'){
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S25_E2','subject_code' => 'SCSJ3553','subject_long_name' => 'Artificial Intelligent','subject_type'=>'elective 2']);
                    }
                    if ($rows->S26_E2=='1'){
                            $subj = TemporarySubject::updateOrCreate(
                                ['subject_name' => 'S26_E2','subject_code' => 'SCSJ3104','subject_long_name' => 'Application Development','subject_type'=>'elective 2']);
                    }

                    if ($rows->S27_E2=='1'){
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S27_E2','subject_code' => 'SCSJ3303','subject_long_name' => 'Internet Programming','subject_type'=>'elective 2']);
                    }

                    if ($rows->S28_E2=='1'){
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S28_E2','subject_code' => 'SCSJ3343','subject_long_name' => 'Software Quality Assurance','subject_type'=>'elective 2']);
                    }

                    if ($rows->S29_E2=='1'){
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S29_E2','subject_code' => 'SCSJ3603','subject_long_name' => 'Knowledge-Based & Expert System','subject_type'=>'elective 2']);
                    }

                    if ($rows->S30_E3=='1'){
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S30_E3','subject_code' => 'SCSJ3323','subject_long_name' => 'Software Design & Architecture','subject_type'=>'elective 3']);
                    }

                    if ($rows->S31_E3=='1'){
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S31_E3','subject_code' => 'SCSJ3563','subject_long_name' => 'Computer Intelligence','subject_type'=>'elective 3']);
                    }

                    if ($rows->S32_E3=='1'){
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S32_E3','subject_code' => 'SCSJ3253','subject_long_name' => 'Programming Technique 3','subject_type'=>'elective 3']);
                    }

                    if ($rows->S33_E3=='1'){
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S33 _E3','subject_code' => 'SCSJ3403','subject_long_name' => 'Special Topic in Software Engineering','subject_type'=>'elective 3']);
                    }

                    if ($rows->S34_E4=='1'){
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S34_E4','subject_code' => 'SCSJ4383','subject_long_name' => 'Software Construction','subject_type'=>'elective 4']);
                    }

                    if ($rows->S35_E4=='1') {
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S35_E4','subject_code' => 'SCSJ4423','subject_long_name' => 'Real-Time Software Engineering','subject_type'=>'elective 4']);
                    }

                    if ($rows->S36_E4=='1'){
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S36_E4','subject_code' => 'SCSJ4483','subject_long_name' => 'Web Technology','subject_type'=>'elective 4']);
                    }

                    if ($rows->S37_E4=='1'){
                        $subj = TemporarySubject::updateOrCreate(
                            ['subject_name' => 'S37_E4','subject_code' => 'SCSJ4463','subject_long_name' => 'Agent-Oriented Software Engineering','subject_type'=>'elective 4']);
                    }
                }
            }
        //return view('offer subject')->with(compact('subj'));
    }
}

