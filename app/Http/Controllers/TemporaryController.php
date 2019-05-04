<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matrix;
use App\TemporarySubject;

class TemporaryController extends Controller
{

    //remove constraints
    public function generateSubject()
    {

        set_time_limit(0);


        $vars = Matrix::get();
        foreach ($vars as $row) {
            //s1
            if ($row->S1 == 'TC' || $row->S1 == 'Y' || $row->S1 == '0') {
                $save = Matrix::find($row->id);
                $save->S1 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S1 = '1';
            }
            //s2
            if ($row->S2 == 'TC' || $row->S2 == 'Y' || $row->S2 == '0') {
                $save = Matrix::find($row->id);
                $save->S2 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S2 = '1';
            }
            //s3
            if ($row->S3 == 'TC' || $row->S3 == 'Y' || $row->S3 == '0') {
                $save = Matrix::find($row->id);
                $save->S3 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S3 = '1';
            }
            //s4
            if ($row->S4 == 'TC' || $row->S4 == 'Y' || $row->S4 == '0') {
                $save = Matrix::find($row->id);
                $save->S4 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S4 = '1';
            }
            //s5
            if ($row->S5 == 'TC' || $row->S5 == 'Y' || $row->S5 == '0') {
                $save = Matrix::find($row->id);
                $save->S5 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S5 = '1';
            }
            //s6
            if ($row->S6 == 'TC' || $row->S6 == 'Y' || $row->S6 == '0') {
                $save = Matrix::find($row->id);
                $save->S6 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S6 = '1';
            }
            //s7
            if ($row->S7 == 'TC' || $row->S7 == 'Y' || $row->S7 == '0') {
                $save = Matrix::find($row->id);
                $save->S7 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S7 = '1';
            }
            //s7
            if ($row->S8 == 'TC' || $row->S8 == 'Y' || $row->S8 == '0') {
                $save = Matrix::find($row->id);
                $save->S8 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S8 = '1';
            }
            //s8
            if ($row->S9 == 'TC' || $row->S9 == 'Y' || $row->S9 == '0') {
                $save = Matrix::find($row->id);
                $save->S9 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S9 = '1';
            }
            //s9
            if ($row->S10 == 'TC' || $row->S10 == 'Y' || $row->S10 == '0') {
                $save = Matrix::find($row->id);
                $save->S10 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S10 = '1';
            }
            //s10
            if ($row->S11 == 'TC' || $row->S11 == 'Y' || $row->S11 == '0') {
                $save = Matrix::find($row->id);
                $save->S11 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S11 = '1';
            }
            //s11
            if ($row->S12 == 'TC' || $row->S12 == 'Y' || $row->S12 == '0') {
                $save = Matrix::find($row->id);
                $save->S12 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S12 = '1';
            }
            //s12
            if ($row->S13 == 'TC' || $row->S13 == 'Y' || $row->S13 == '0') {
                $save = Matrix::find($row->id);
                $save->S13 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S13 = '1';
            }
            //s13
            if ($row->S14 == 'TC' || $row->S14 == 'Y' || $row->S14 == '0') {
                $save = Matrix::find($row->id);
                $save->S14 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S14 = '1';
            }
            //s14
            if ($row->S15 == 'TC' || $row->S15 == 'Y' || $row->S15 == '0') {
                $save = Matrix::find($row->id);
                $save->S15 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S15 = '1';
            }
            //s15
            if ($row->S16 == 'TC' || $row->S16 == 'Y' || $row->S16 == '0') {
                $save = Matrix::find($row->id);
                $save->S16 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S16 = '1';
            }
            //s16
            if ($row->S17 == 'TC' || $row->S17 == 'Y' || $row->S17 == '0') {
                $save = Matrix::find($row->id);
                $save->S17 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S17 = '1';
            }
            //s17
            if ($row->S18 == 'TC' || $row->S18 == 'Y' || $row->S18 == '0') {
                $save = Matrix::find($row->id);
                $save->S18 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S18 = '1';
            }
            //s18
            if ($row->S19 == 'TC' || $row->S19 == 'Y' || $row->S19 == '0') {
                $save = Matrix::find($row->id);
                $save->S19 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S19 = '1';
            }
            //s19
            if ($row->S20 == 'TC' || $row->S20 == 'Y' || $row->S20 == '0') {
                $save = Matrix::find($row->id);
                $save->S20 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S20 = '1';
            }
            //s20
            if ($row->S21 == 'TC' || $row->S21 == 'Y' || $row->S21 == '0') {
                $save = Matrix::find($row->id);
                $save->S21 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S21 = '1';
            }
            //s21
            if ($row->S22_E1 == 'TC' || $row->S22_E1 == 'Y' || $row->S22_E1 == '0') {
                $save = Matrix::find($row->id);
                $save->S22_E1 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S22_E1 = '1';
            }
            if ($row->S23_E1 == 'TC' || $row->S23_E1 == 'Y' || $row->S23_E1 == '0') {
                $save = Matrix::find($row->id);
                $save->S23_E1 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S23_E1 = '1';
            }
            //s22
            if ($row->S24_E1 == 'TC' || $row->S24_E1 == 'Y' || $row->S24_E1 == '0') {
                $save = Matrix::find($row->id);
                $save->S24_E1 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S24_E1 = '1';
            }
            if ($row->kejuruteraan_keperluan == 'TC' || $row->kejuruteraan_keperluan == 'Y' || $row->kejuruteraan_keperluan == '0') {
                $save = Matrix::find($row->id);
                $save->kejuruteraan_keperluan = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S25_E2 = '1';
            }
            //s23
            if ($row->S25_E2 == 'TC' || $row->S25_E2 == 'Y' || $row->S25_E2 == '0') {
                $save = Matrix::find($row->id);
                $save->S25_E2 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S25_E2 = '1';
            }
            //s24
            if ($row->S26_E2 == 'TC' || $row->S26_E2 == 'Y' || $row->S26_E2 == '0') {
                $save = Matrix::find($row->id);
                $save->S26_E2 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S26_E2 = '1';
            }
            //s25
            if ($row->S27_E2 == 'TC' || $row->S27_E2 == 'Y' || $row->S27_E2 == '0') {
                $save = Matrix::find($row->id);
                $save->S27_E2 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S27_E2 = '1';
            }
            //s26
            if ($row->S28_E2 == 'TC' || $row->S28_E2 == 'Y' || $row->S28_E2 == '0') {
                $save = Matrix::find($row->id);
                $save->S28_E2 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S28_E2 = '1';
            }
            //s27
            if ($row->S29_E2 == 'TC' || $row->S29_E2 == 'Y' || $row->S29_E2 == '0') {
                $save = Matrix::find($row->id);
                $save->S29_E2 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S29_E2 = '1';
            }
            //s28
            if ($row->S30_E3 == 'TC' || $row->S30_E3 == 'Y' || $row->S30_E3 == '0') {
                $save = Matrix::find($row->id);
                $save->S30_E3 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S30_E3 = '1';
            }

            if ($row->S31_E3 == 'TC' || $row->S31_E3 == 'Y' || $row->S31_E3 == '0') {
                $save = Matrix::find($row->id);
                $save->S31_E3 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S31_E3 = '1';
            }

            if ($row->S32_E3 == 'TC' || $row->S32_E3 == 'Y' || $row->S32_E3 == '0') {
                $save = Matrix::find($row->id);
                $save->S32_E3 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S32_E3 = '1';
            }

            if ($row->S33_E3 == 'TC' || $row->S33_E3 == 'Y' || $row->S33_E3 == '0') {
                $save = Matrix::find($row->id);
                $save->S33_E3 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S33_E3 = '1';
            }

            if ($row->S34_E4 == 'TC' || $row->S34_E4 == 'Y' || $row->S34_E4 == '0') {
                $save = Matrix::find($row->id);
                $save->S34_E4 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S34_E4 = '1';
            }

            if ($row->S35_E4 == 'TC' || $row->S35_E4 == 'Y' || $row->S35_E4 == '0') {
                $save = Matrix::find($row->id);
                $save->S35_E4 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S35_E4 = '1';
            }

            if ($row->S36_E4 == 'TC' || $row->S36_E4 == 'Y' || $row->S36_E4 == '0') {
                $save = Matrix::find($row->id);
                $save->S36_E4 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S36_E4 = '1';
            }

            if ($row->S37_E4 == 'TC' || $row->S37_E4 == 'Y' || $row->S37_E4 == '0') {
                $save = Matrix::find($row->id);
                $save->S37_E4 = '0';
                $save->save();
            } else {
                $save = Matrix::find($row->id);
                $save->S37_E4 = '1';
            }
        }
        // code to save the total subject left inside the database
        \DB::table('matrices')->update([
            'total_subject_left' => \DB::raw('S1+S2+S3+S4+S5+S6+ S7+S8+S9+S10
            +S11+S12+S13+ S14+S15
            +S16+S17+S18+ S19+S20+S21+S22_E1+S23_E1+S24_E1
            +S25_E2+S26_E2+S27_E2+S28_E2+S29_E2+S30_E3
            +S31_E3+S32_E3+ S33_E3+ S34_E4+ S35_E4+S36_E4+ S37_E4')
        ]);


        //elective E2
        $S25_E2 = Matrix::where('total_subject_left', '<', 10)->sum('S25_E2');
        $S26_E2 = Matrix::where('total_subject_left', '<', 10)->sum('S26_E2');
        $S27_E2 = Matrix::where('total_subject_left', '<', 10)->sum('S27_E2');
        $S28_E2 = Matrix::where('total_subject_left', '<', 10)->sum('S28_E2');
        $S29_E2 = Matrix::where('total_subject_left', '<', 10)->sum('S29_E2');

        //elective E3
        $S30_E3 = Matrix::where('total_subject_left', '<', 10)->sum('S30_E3');
        $S31_E3 = Matrix::where('total_subject_left', '<', 10)->sum('S31_E3');
        $S32_E3 = Matrix::where('total_subject_left', '<', 10)->sum('S32_E3');
        $S33_E3 = Matrix::where('total_subject_left', '<', 10)->sum('S33_E3');

        //elective E4
        $S34_E4 = Matrix::where('total_subject_left', '<', 10)->sum('S34_E4');
        $S35_E4 = Matrix::where('total_subject_left', '<', 10)->sum('S35_E4');
        $S36_E4 = Matrix::where('total_subject_left', '<', 10)->sum('S36_E4');
        $S37_E4 = Matrix::where('total_subject_left', '<', 10)->sum('S37_E4');

        $fy = Matrix::where([
            ['total_subject_left', '<', '10']
        ])->get();

        foreach ($fy as $rows) {

            // remove constrain if the subject remaining is the only choice either (S23/S24)

            if (($rows->S23_E1 == '1' && $rows->S24_E1 == '1') && ($rows->S24_E1 + $rows->S23_E1 > '1')) {
                $subj = TemporarySubject::updateOrCreate(
                    ['subject_name' => 'S23_E1', 'subject_code' => 'SCSJ2253', 'subject_long_name' => 'Requirement Engineering & Software Modelling', 'subject_type' => 'elective 1']
                );
            }

            // remove constrain if the subject remaining is the only choice either (S25/S26/S27/S28/S29)
            //special condition if all rows for E2 == 4 means the student didnt take any subject yet from E2 yet, the system will offer subject with greatest value
            if ($rows->S25_E2 + $rows->S27_E2 + $rows->S28_E2 + $rows->S29_E2 == '4') {
                if ($S25_E2 > max($S27_E2, $S28_E2, $S29_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S25_E2', 'subject_code' => 'SCSJ3553', 'subject_long_name' => 'Artificial Intelligent', 'subject_type' => 'elective 2']
                    );
                } elseif ($S27_E2 > max($S25_E2, $S28_E2, $S29_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S27_E2', 'subject_code' => 'SCSJ3303', 'subject_long_name' => 'Internet Programming', 'subject_type' => 'elective 2']
                    );
                } elseif ($S28_E2 > max($S25_E2, $S27_E2, $S29_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S28_E2', 'subject_code' => 'SCSJ3343', 'subject_long_name' => 'Software Quality Assurance', 'subject_type' => 'elective 2']
                    );
                } elseif ($S29_E2 > max($S25_E2, $S27_E2, $S28_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S29_E2', 'subject_code' => 'SCSJ3603', 'subject_long_name' => 'Knowledge-Based & Expert System', 'subject_type' => 'elective 2']
                    );
                }
            }
            //sum E2 == '3'
            if ($rows->S25_E2 + $rows->S27_E2 + $rows->S28_E2 + $rows->S29_E2 == '3') {
                if ($rows->S25_E2 == '1' && ($rows->S25_E2 + $rows->S27_E2 + $rows->S28_E2 == '3') && ($S25_E2 > max($S27_E2, $S28_E2))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S25_E2', 'subject_code' => 'SCSJ3553', 'subject_long_name' => 'Artificial Intelligent', 'subject_type' => 'elective 2']
                    );
                } else if ($rows->S25_E2 == '1' && ($rows->S25_E2 + $rows->S27_E2 + $rows->S29_E2 == '3') && ($S25_E2 > max($S27_E2, $S29_E2))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S25_E2', 'subject_code' => 'SCSJ3553', 'subject_long_name' => 'Artificial Intelligent', 'subject_type' => 'elective 2']
                    );
                } else if ($rows->S25_E2 == '1' && ($rows->S25_E2 + $rows->S28_E2 + $rows->S29_E2 == '3') && ($S25_E2 > max($S28_E2, $S29_E2))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S25_E2', 'subject_code' => 'SCSJ3553', 'subject_long_name' => 'Artificial Intelligent', 'subject_type' => 'elective 2']
                    );
                }
                if ($rows->S27_E2 == '1' && ($rows->S27_E2 + $rows->S25_E2 + $rows->S28_E2 == '3') && ($S27_E2 > max($S25_E2, $S28_E2))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S27_E2', 'subject_code' => 'SCSJ3303', 'subject_long_name' => 'Internet Programming', 'subject_type' => 'elective 2']
                    );
                } else if ($rows->S27_E2 == '1' && ($rows->S27_E2 + $rows->S25_E2 + $rows->S29_E2 == '3') && ($S27_E2 > max($S25_E2, $S29_E2))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S27_E2', 'subject_code' => 'SCSJ3303', 'subject_long_name' => 'Internet Programming', 'subject_type' => 'elective 2']
                    );
                } else if ($rows->S27_E2 == '1' && ($rows->S27_E2 + $rows->S28_E2 + $rows->S29_E2 == '3') && ($S27_E2 > max($S28_E2, $S29_E2))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S27_E2', 'subject_code' => 'SCSJ3303', 'subject_long_name' => 'Internet Programming', 'subject_type' => 'elective 2']
                    );
                }
                if ($rows->S28_E2 == '1' && ($rows->S28_E2 + $rows->S25_E2 + $rows->S27_E2 == '3') && ($S28_E2 > max($S27_E2, $S25_E2))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S28_E2', 'subject_code' => 'SCSJ3343', 'subject_long_name' => 'Software Quality Assurance', 'subject_type' => 'elective 2']
                    );
                } else if ($rows->S28_E2 == '1' && ($rows->S28_E2 + $rows->S25_E2 + $rows->S29_E2 == '3') && ($S28_E2 > max($S25_E2, $S29_E2))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S28_E2', 'subject_code' => 'SCSJ3343', 'subject_long_name' => 'Software Quality Assurance', 'subject_type' => 'elective 2']
                    );
                } else if ($rows->S28_E2 == '1' && ($rows->S28_E2 + $rows->S27_E2 + $rows->S29_E2 == '3') && ($S28_E2 > max($S27_E2, $S29_E2))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S28_E2', 'subject_code' => 'SCSJ3343', 'subject_long_name' => 'Software Quality Assurance', 'subject_type' => 'elective 2']
                    );
                }
                if ($rows->S29_E2 == '1' && ($rows->S29_E2 + $rows->S25_E2 + $rows->S27_E2 == '3') && ($S29_E2 > max($S25_E2, $S27_E2))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S29_E2', 'subject_code' => 'SCSJ3603', 'subject_long_name' => 'Knowledge-Based & Expert System', 'subject_type' => 'elective 2']
                    );
                } else if ($rows->S29_E2 == '1' && ($rows->S29_E2 + $rows->S25_E2 + $rows->S28_E2 == '3') && ($S29_E2 > max($S25_E2, $S28_E2))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S28_E2', 'subject_code' => 'SCSJ3343', 'subject_long_name' => 'Software Quality Assurance', 'subject_type' => 'elective 2']
                    );
                } else if ($rows->S29_E2 == '1' && ($rows->S29_E2 + $rows->S27_E2 + $rows->S28_E2 == '3') && ($S29_E2 > max($S27_E2, $S28_E2))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S28_E2', 'subject_code' => 'SCSJ3343', 'subject_long_name' => 'Software Quality Assurance', 'subject_type' => 'elective 2']
                    );
                }
            }

            //if sum E2 == '2'
            if ($rows->S25_E2 + $rows->S27_E2 + $rows->S28_E2 + $rows->S29_E2 == '2') {
                if (($rows->S25_E2 + $rows->S27_E2 == '2') && ($S25_E2 > $S27_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S25_E2', 'subject_code' => 'SCSJ3553', 'subject_long_name' => 'Artificial Intelligent', 'subject_type' => 'elective 2']
                    );
                } elseif (($rows->S25_E2 + $rows->S28_E2 == '2') && ($S25_E2 > $S28_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S25_E2', 'subject_code' => 'SCSJ3553', 'subject_long_name' => 'Artificial Intelligent', 'subject_type' => 'elective 2']
                    );
                } elseif (($rows->S25_E2 + $rows->S29_E2 == '2') && ($S25_E2 > $S29_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S25_E2', 'subject_code' => 'SCSJ3553', 'subject_long_name' => 'Artificial Intelligent', 'subject_type' => 'elective 2']
                    );
                }

                if (($rows->S27_E2 + $rows->S28_E2 == '2') && ($S27_E2 > $S28_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S27_E2', 'subject_code' => 'SCSJ3303', 'subject_long_name' => 'Internet Programming', 'subject_type' => 'elective 2']
                    );
                } else if (($rows->S27_E2 + $rows->S25_E2 == '2') && ($S27_E2 > $S25_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S27_E2', 'subject_code' => 'SCSJ3303', 'subject_long_name' => 'Internet Programming', 'subject_type' => 'elective 2']
                    );
                } else if (($rows->S27_E2 + $rows->S29_E2 == '2') && ($S27_E2 > $S29_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S27_E2', 'subject_code' => 'SCSJ3303', 'subject_long_name' => 'Internet Programming', 'subject_type' => 'elective 2']
                    );
                }

                if (($rows->S28_E2 + $rows->S29_E2 == '2') && ($S28_E2 > $S29_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S28_E2', 'subject_code' => 'SCSJ3343', 'subject_long_name' => 'Software Quality Assurance', 'subject_type' => 'elective 2']
                    );
                } else if (($rows->S28_E2 + $rows->S25_E2 == '2') && ($S28_E2 > $S25_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S28_E2', 'subject_code' => 'SCSJ3343', 'subject_long_name' => 'Software Quality Assurance', 'subject_type' => 'elective 2']
                    );
                } else if (($rows->S28_E2 + $rows->S27_E2 == '2') && ($S28_E2 > $S27_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S28_E2', 'subject_code' => 'SCSJ3343', 'subject_long_name' => 'Software Quality Assurance', 'subject_type' => 'elective 2']
                    );
                }

                if (($rows->S29_E2 + $rows->S25_E2 == '2') && ($S29_E2 > $S25_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S29_E2', 'subject_code' => 'SCSJ3603', 'subject_long_name' => 'Knowledge-Based & Expert System', 'subject_type' => 'elective 2']
                    );
                } else if (($rows->S29_E2 + $rows->S27_E2 == '2') && ($S29_E2 > $S27_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S29_E2', 'subject_code' => 'SCSJ3603', 'subject_long_name' => 'Knowledge-Based & Expert System', 'subject_type' => 'elective 2']
                    );
                } else if (($rows->S29_E2 + $rows->S28_E2 == '2') && ($S29_E2 > $S28_E2)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S29_E2', 'subject_code' => 'SCSJ3603', 'subject_long_name' => 'Knowledge-Based & Expert System', 'subject_type' => 'elective 2']
                    );
                }
            }

            //special condition if all rows for E3 == 4 means the student didnt take any subject from E3 yet, the system will offer subject with greatest value
            if ($rows->S30_E3 + $rows->S31_E3 + $rows->S32_E3 + $rows->S33_E3 == '4') {
                if ($S30_E3 > max($S31_E3, $S32_E3, $S33_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S30_E3', 'subject_code' => 'SCSJ3323', 'subject_long_name' => 'Software Design & Architecture', 'subject_type' => 'elective 3']
                    );
                } else if ($S31_E3 > max($S30_E3, $S32_E3, $S33_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S31_E3', 'subject_code' => 'SCSJ3563', 'subject_long_name' => 'Computer Intelligence', 'subject_type' => 'elective 3']
                    );
                } else if ($S32_E3 > max($S30_E3, $S31_E3, $S33_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S32_E3', 'subject_code' => 'SCSJ3253', 'subject_long_name' => 'Programming Technique 3', 'subject_type' => 'elective 3']
                    );
                } else if ($S33_E3 > max($S30_E3, $S31_E3, $S32_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S33 _E3', 'subject_code' => 'SCSJ3403', 'subject_long_name' => 'Special Topic in Software Engineering', 'subject_type' => 'elective 3']
                    );
                }
            }
            // sum E3 == '3'
            if ($rows->S30_E3 + $rows->S31_E3 + $rows->S32_E3 + $rows->S33_E3 == '3') {
                if ($rows->S30_E3 == '1' && ($rows->S30_E3 + $rows->S31_E3 + $rows->S32_E3 == '3') && ($S30_E3 > max($S31_E3, $S32_E3))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S30_E3', 'subject_code' => 'SCSJ3323', 'subject_long_name' => 'Software Design & Architecture', 'subject_type' => 'elective 3']
                    );
                } else if ($rows->S30_E3 == '1' && ($rows->S30_E3 + $rows->S32_E3 + $rows->S33_E3 == '3') && ($S30_E3 > max($S32_E3, $S33_E3))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S30_E3', 'subject_code' => 'SCSJ3323', 'subject_long_name' => 'Software Design & Architecture', 'subject_type' => 'elective 3']
                    );
                } else if ($rows->S30_E3 == '1' && ($rows->S30_E3 + $rows->S31_E3 + $rows->S33_E3 == '3') && ($S30_E3 > max($S31_E3, $S33_E3))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S30_E3', 'subject_code' => 'SCSJ3323', 'subject_long_name' => 'Software Design & Architecture', 'subject_type' => 'elective 3']
                    );
                }
                if ($rows->S31_E3 == '1' && ($rows->S31_E3 + $rows->S30_E3 + $rows->S32_E3 == '3') && ($S31_E3 > max($S30_E3, $S32_E3))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S31_E3', 'subject_code' => 'SCSJ3563', 'subject_long_name' => 'Computer Intelligence', 'subject_type' => 'elective 3']
                    );
                } else if ($rows->S31_E3 == '1' && ($rows->S31_E3 + $rows->S30_E3 + $rows->S33_E3 == '3') && ($S31_E3 > max($S30_E3, $S33_E3))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S31_E3', 'subject_code' => 'SCSJ3563', 'subject_long_name' => 'Computer Intelligence', 'subject_type' => 'elective 3']
                    );
                } else if ($rows->S31_E3 == '1' && ($rows->S31_E3 + $rows->S32_E3 + $rows->S33_E3 == '3') && ($S31_E3 > max($S32_E3, $S33_E3))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S31_E3', 'subject_code' => 'SCSJ3563', 'subject_long_name' => 'Computer Intelligence', 'subject_type' => 'elective 3']
                    );
                }
                if ($rows->S32_E3 == '1' && ($rows->S32_E3 + $rows->S30_E3 + $rows->S31_E3 == '3') && ($S32_E3 > max($S30_E3, $S31_E3))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S32_E3', 'subject_code' => 'SCSJ3253', 'subject_long_name' => 'Programming Technique 3', 'subject_type' => 'elective 3']
                    );
                } else if ($rows->S32_E3 == '1' && ($rows->S32_E3 + $rows->S30_E3 + $rows->S33_E3 == '3') && ($S32_E3 > max($S30_E3, $S33_E3))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S32_E3', 'subject_code' => 'SCSJ3253', 'subject_long_name' => 'Programming Technique 3', 'subject_type' => 'elective 3']
                    );
                } else if ($rows->S32_E3 == '1' && ($rows->S32_E3 + $rows->S31_E3 + $rows->S33_E3 == '3') && ($S32_E3 > max($S31_E3, $S33_E3))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S32_E3', 'subject_code' => 'SCSJ3253', 'subject_long_name' => 'Programming Technique 3', 'subject_type' => 'elective 3']
                    );
                }
                if ($rows->S33_E3 == '1' && ($rows->S33_E3 + $rows->S30_E3 + $rows->S31_E3 == '3') && ($S33_E3 > max($S30_E3, $S31_E3))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S33 _E3', 'subject_code' => 'SCSJ3403', 'subject_long_name' => 'Special Topic in Software Engineering', 'subject_type' => 'elective 3']
                    );
                } else if ($rows->S33_E3 == '1' && ($rows->S33_E3 + $rows->S30_E3 + $rows->S32_E3 == '3') && ($S33_E3 > max($S30_E3, $S32_E3))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S33 _E3', 'subject_code' => 'SCSJ3403', 'subject_long_name' => 'Special Topic in Software Engineering', 'subject_type' => 'elective 3']
                    );
                } else if ($rows->S33_E3 == '1' && ($rows->S33_E3 + $rows->S31_E3 + $rows->S32_E3 == '3') && ($S33_E3 > max($S31_E3, $S32_E3))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S33 _E3', 'subject_code' => 'SCSJ3403', 'subject_long_name' => 'Special Topic in Software Engineering', 'subject_type' => 'elective 3']
                    );
                }
            }
            // sum E3 == '2'
            if ($rows->S30_E3 + $rows->S31_E3 + $rows->S32_E3 + $rows->S33_E3 == '2') {
                // remove constrain if the subject remaining is the only choice either (S30/S31/S32/S33)
                if (($rows->S30_E3 + $rows->S31_E3 == '2') && ($S30_E3 > $S31_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S30_E3', 'subject_code' => 'SCSJ3323', 'subject_long_name' => 'Software Design & Architecture', 'subject_type' => 'elective 3']
                    );
                } else if (($rows->S30_E3 + $rows->S32_E3 == '2') && ($S30_E3 > $S32_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S30_E3', 'subject_code' => 'SCSJ3323', 'subject_long_name' => 'Software Design & Architecture', 'subject_type' => 'elective 3']
                    );
                } else if (($rows->S30_E3 + $rows->S33_E3 == '2') && ($S30_E3 > $S33_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S30_E3', 'subject_code' => 'SCSJ3323', 'subject_long_name' => 'Software Design & Architecture', 'subject_type' => 'elective 3']
                    );
                }

                if (($rows->S31_E3 + $rows->S32_E3 == '2') && ($S31_E3 > $S32_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S31_E3', 'subject_code' => 'SCSJ3563', 'subject_long_name' => 'Computer Intelligence', 'subject_type' => 'elective 3']
                    );
                } else if (($rows->S31_E3 + $rows->S30_E3 == '2') && ($S31_E3 > $S30_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S31_E3', 'subject_code' => 'SCSJ3563', 'subject_long_name' => 'Computer Intelligence', 'subject_type' => 'elective 3']
                    );
                } else if (($rows->S31_E3 + $rows->S33_E3 == '2') && ($S31_E3 > $S33_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S31_E3', 'subject_code' => 'SCSJ3563', 'subject_long_name' => 'Computer Intelligence', 'subject_type' => 'elective 3']
                    );
                }

                if (($rows->S32_E3 + $rows->S33_E3 == '2') && ($S32_E3 > $S33_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S32_E3', 'subject_code' => 'SCSJ3253', 'subject_long_name' => 'Programming Technique 3', 'subject_type' => 'elective 3']
                    );
                } else if (($rows->S32_E3 + $rows->S30_E3 == '2') && ($S32_E3 > $S30_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S32_E3', 'subject_code' => 'SCSJ3253', 'subject_long_name' => 'Programming Technique 3', 'subject_type' => 'elective 3']
                    );
                } else if (($rows->S32_E3 + $rows->S31_E3 == '2') && ($S32_E3 > $S31_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S32_E3', 'subject_code' => 'SCSJ3253', 'subject_long_name' => 'Programming Technique 3', 'subject_type' => 'elective 3']
                    );
                }

                if (($rows->S33_E3 + $rows->S30_E3 == '2') && ($S33_E3 > $S30_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S33 _E3', 'subject_code' => 'SCSJ3403', 'subject_long_name' => 'Special Topic in Software Engineering', 'subject_type' => 'elective 3']
                    );
                } else if (($rows->S33_E3 + $rows->S31_E3 == '2') && ($S33_E3 > $S31_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S33 _E3', 'subject_code' => 'SCSJ3403', 'subject_long_name' => 'Special Topic in Software Engineering', 'subject_type' => 'elective 3']
                    );
                } else if (($rows->S33_E3 + $rows->S32_E3 == '2') && ($S33_E3 > $S32_E3)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S33 _E3', 'subject_code' => 'SCSJ3403', 'subject_long_name' => 'Special Topic in Software Engineering', 'subject_type' => 'elective 3']
                    );
                }
            }

            //special condition if sum of E4 == '4'
            if ($rows->S34_E4 + $rows->S35_E4 + $rows->S36_E4 + $rows->S37_E4 == '4') {
                if ($S34_E4 > max($S35_E4, $S36_E4, $S37_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S34_E4', 'subject_code' => 'SCSJ4383', 'subject_long_name' => 'Software Construction', 'subject_type' => 'elective 4']
                    );
                } else if ($S35_E4 > max($S34_E4, $S36_E4, $S37_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S35_E4', 'subject_code' => 'SCSJ4423', 'subject_long_name' => 'Real-Time Software Engineering', 'subject_type' => 'elective 4']
                    );
                } else if ($S36_E4 > max($S34_E4, $S35_E4, $S37_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S36_E4', 'subject_code' => 'SCSJ4483', 'subject_long_name' => 'Web Technology', 'subject_type' => 'elective 4']
                    );
                } else if ($S37_E4 > max($S34_E4, $S35_E4, $S36_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S37_E4', 'subject_code' => 'SCSJ4463', 'subject_long_name' => 'Agent-Oriented Software Engineering', 'subject_type' => 'elective 4']
                    );
                }
            }
            //if sum E4 == '3'
            if ($rows->S34_E4 + $rows->S35_E4 + $rows->S36_E4 + $rows->S37_E4 == '3') {
                if ($rows->S34_E4 == '1' && ($rows->S34_E4 + $rows->S35_E4 + $rows->S36_E4 == '3') && ($S34_E4 > max($S35_E4, $S36_E4))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S34_E4', 'subject_code' => 'SCSJ4383', 'subject_long_name' => 'Software Construction', 'subject_type' => 'elective 4']
                    );
                } elseif ($rows->S34_E4 == '1' && ($rows->S34_E4 + $rows->S35_E4 + $rows->S37_E4 == '3') && ($S34_E4 > max($S35_E4, $S37_E4))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S34_E4', 'subject_code' => 'SCSJ4383', 'subject_long_name' => 'Software Construction', 'subject_type' => 'elective 4']
                    );
                } elseif ($rows->S34_E4 == '1' && ($rows->S34_E4 + $rows->S36_E4 + $rows->S37_E4 == '3') && ($S34_E4 > max($S36_E4, $S37_E4))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S34_E4', 'subject_code' => 'SCSJ4383', 'subject_long_name' => 'Software Construction', 'subject_type' => 'elective 4']
                    );
                }
                if ($rows->S35_E4 == '1' && ($rows->S35_E4 + $rows->S34_E4 + $rows->S36_E4 == '3') && ($S35_E4 > max($S34_E4, $S36_E4))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S35_E4', 'subject_code' => 'SCSJ4423', 'subject_long_name' => 'Real-Time Software Engineering', 'subject_type' => 'elective 4']
                    );
                } else if ($rows->S35_E4 == '1' && ($rows->S35_E4 + $rows->S34_E4 + $rows->S37_E4 == '3') && ($S35_E4 > max($S34_E4, $S37_E4))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S35_E4', 'subject_code' => 'SCSJ4423', 'subject_long_name' => 'Real-Time Software Engineering', 'subject_type' => 'elective 4']
                    );
                } else if ($rows->S35_E4 == '1' && ($rows->S35_E4 + $rows->S36_E4 + $rows->S37_E4 == '3') && ($S35_E4 > max($S36_E4, $S37_E4))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S35_E4', 'subject_code' => 'SCSJ4423', 'subject_long_name' => 'Real-Time Software Engineering', 'subject_type' => 'elective 4']
                    );
                }
                if ($rows->S36_E4 == '1' && ($rows->S36_E4 + $rows->S34_E4 + $rows->S35_E4 == '3') && ($S36_E4 > max($S34_E4, $S35_E4))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S36_E4', 'subject_code' => 'SCSJ4483', 'subject_long_name' => 'Web Technology', 'subject_type' => 'elective 4']
                    );
                } else if ($rows->S36_E4 == '1' && ($rows->S36_E4 + $rows->S34_E4 + $rows->S37_E4 == '3') && ($S36_E4 > max($S34_E4, $S37_E4))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S36_E4', 'subject_code' => 'SCSJ4483', 'subject_long_name' => 'Web Technology', 'subject_type' => 'elective 4']
                    );
                } else if ($rows->S36_E4 == '1' && ($rows->S36_E4 + $rows->S35_E4 + $rows->S37_E4 == '3') && ($S36_E4 > max($S35_E4, $S37_E4))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S36_E4', 'subject_code' => 'SCSJ4483', 'subject_long_name' => 'Web Technology', 'subject_type' => 'elective 4']
                    );
                }
                if ($rows->S37_E4 == '1' && ($rows->S37_E4 + $rows->S34_E4 + $rows->S35_E4 == '3') && ($S37_E4 > max($S34_E4, $S35_E4))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S37_E4', 'subject_code' => 'SCSJ4463', 'subject_long_name' => 'Agent-Oriented Software Engineering', 'subject_type' => 'elective 4']
                    );
                } else if ($rows->S37_E4 == '1' && ($rows->S37_E4 + $rows->S34_E4 + $rows->S36_E4 == '3') && ($S37_E4 > max($S34_E4, $S36_E4))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S37_E4', 'subject_code' => 'SCSJ4463', 'subject_long_name' => 'Agent-Oriented Software Engineering', 'subject_type' => 'elective 4']
                    );
                } else if ($rows->S37_E4 == '1' && ($rows->S37_E4 + $rows->S35_E4 + $rows->S36_E4 == '3') && ($S37_E4 > max($S35_E4, $S36_E4))) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S37_E4', 'subject_code' => 'SCSJ4463', 'subject_long_name' => 'Agent-Oriented Software Engineering', 'subject_type' => 'elective 4']
                    );
                }
            }
            // sum E4 == '2'
            if ($rows->S34_E4 + $rows->S35_E4 + $rows->S36_E4 + $rows->S37_E4 == '2') {
                //remove constrain if the subject remaining is the only choice either (S34/S35/S36/S37)
                if (($rows->S34_E4 + $rows->S35_E4 == '2') && ($S34_E4 > $S35_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S34_E4', 'subject_code' => 'SCSJ4383', 'subject_long_name' => 'Software Construction', 'subject_type' => 'elective 4']
                    );
                } else if (($rows->S34_E4 + $rows->S36_E4 == '2') && ($S34_E4 > $S36_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S34_E4', 'subject_code' => 'SCSJ4383', 'subject_long_name' => 'Software Construction', 'subject_type' => 'elective 4']
                    );
                } else if (($rows->S34_E4 + $rows->S37_E4 == '2') && ($S34_E4 > $S37_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S34_E4', 'subject_code' => 'SCSJ4383', 'subject_long_name' => 'Software Construction', 'subject_type' => 'elective 4']
                    );
                }

                if (($rows->S35_E4 + $rows->S36_E4 == '2') && ($S35_E4 > $S36_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S35_E4', 'subject_code' => 'SCSJ4423', 'subject_long_name' => 'Real-Time Software Engineering', 'subject_type' => 'elective 4']
                    );
                } else if (($rows->S35_E4 + $rows->S37_E4 == '2') && ($S35_E4 > $S37_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S35_E4', 'subject_code' => 'SCSJ4423', 'subject_long_name' => 'Real-Time Software Engineering', 'subject_type' => 'elective 4']
                    );
                } else if (($rows->S35_E4 + $rows->S34_E4 == '2') && ($S35_E4 > $S34_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S35_E4', 'subject_code' => 'SCSJ4423', 'subject_long_name' => 'Real-Time Software Engineering', 'subject_type' => 'elective 4']
                    );
                }

                if (($rows->S36_E4 + $rows->S37_E4 == '2') && ($S36_E4 > $S37_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S36_E4', 'subject_code' => 'SCSJ4483', 'subject_long_name' => 'Web Technology', 'subject_type' => 'elective 4']
                    );
                } else if (($rows->S36_E4 + $rows->S34_E4 == '2') && ($S36_E4 > $S34_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S36_E4', 'subject_code' => 'SCSJ4483', 'subject_long_name' => 'Web Technology', 'subject_type' => 'elective 4']
                    );
                } else if (($rows->S36_E4 + $rows->S35_E4 == '2') && ($S36_E4 > $S35_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S36_E4', 'subject_code' => 'SCSJ4483', 'subject_long_name' => 'Web Technology', 'subject_type' => 'elective 4']
                    );
                }

                if (($rows->S37_E4 + $rows->S34_E4 == '2') && ($S37_E4 > $S34_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S37_E4', 'subject_code' => 'SCSJ4463', 'subject_long_name' => 'Agent-Oriented Software Engineering', 'subject_type' => 'elective 4']
                    );
                } else if (($rows->S37_E4 + $rows->S35_E4 == '2') && ($S37_E4 > $S35_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S37_E4', 'subject_code' => 'SCSJ4463', 'subject_long_name' => 'Agent-Oriented Software Engineering', 'subject_type' => 'elective 4']
                    );
                } else if (($rows->S37_E4 + $rows->S36_E4 == '2') && ($S37_E4 > $S36_E4)) {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S37_E4', 'subject_code' => 'SCSJ4463', 'subject_long_name' => 'Agent-Oriented Software Engineering', 'subject_type' => 'elective 4']
                    );
                }
            }

            // offer compulsory subject for fy student that have <= 3 subject left
            if ($rows->S1 + $rows->S2 + $rows->S3 + $rows->S4 + $rows->S5 + $rows->S6 + $rows->S7 + $rows->S8 + $rows->S9 + $rows->S10 + $rows->S11 + $rows->S12 + $rows->S13 + $rows->S14 + $rows->S15 + $rows->S16 + $rows->S17 + $rows->S18 + $rows->S19 + ($rows->S20 || $rows->S21) <= '3') {
                if ($rows->S1 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S1', 'subject_code' => 'SCSD1513', 'subject_long_name' => 'Technology & Information System', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S2 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S2', 'subject_code' => 'SCSI1013', 'subject_long_name' => 'Discrete Structure', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S3 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S3', 'subject_code' => 'SCSJ1013', 'subject_long_name' => 'Programming Technique 1', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S4 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S4', 'subject_code' => 'SCSR1013', 'subject_long_name' => 'Digital Logic', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S5 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S5', 'subject_code' => 'SCSI1113', 'subject_long_name' => 'Computational Mathematics', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S6 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S6', 'subject_code' => 'SCSJ1023', 'subject_long_name' => 'Programming Technique 2', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S7 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S7', 'subject_code' => 'SCSR1213', 'subject_long_name' => 'Network Communications', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S8 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S8', 'subject_code' => 'SCSV1223', 'subject_long_name' => 'Web Programming', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S9 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S9', 'subject_code' => 'SCSD2523', 'subject_long_name' => 'Database', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S10 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S10', 'subject_code' => 'SCSJ2013', 'subject_long_name' => 'Data Structure & Algorithm', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S11 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S11', 'subject_code' => 'SCSD2613', 'subject_long_name' => 'System Analysis and Design', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S12 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S12', 'subject_code' => 'SCSR2033', 'subject_long_name' => 'Computer Organisation and Architecture', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S13 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S13', 'subject_code' => 'SCSV2113', 'subject_long_name' => 'Human Computer Interaction', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S14 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S14', 'subject_code' => 'SCSI2143', 'subject_long_name' => 'Probability & Statistical Data Analysis', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S15 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S15', 'subject_code' => 'SCSJ2154', 'subject_long_name' => 'Object Oriented Programming', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S16 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S16', 'subject_code' => 'SCSJ2203', 'subject_long_name' => 'Software Engineering', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S17 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S17', 'subject_code' => 'SCSR2043', 'subject_long_name' => 'Operating System', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S18 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S18', 'subject_code' => 'SCSJ3203', 'subject_long_name' => 'Theory of Computer Science', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S19 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S19', 'subject_code' => 'UCSD2762', 'subject_long_name' => 'Technopreneurship and Seminar', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S20 == '1' && $rows->S21 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S20', 'subject_code' => 'SCSJ3032', 'subject_long_name' => 'Software Engineering Project 1', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S20 == '0' && $rows->S21 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S21', 'subject_code' => 'SCSJ4134', 'subject_long_name' => 'Software Engineering Project 2', 'subject_type' => 'compulsory']
                    );
                }
                if ($rows->S26_E2 == '1') {
                    $subj = TemporarySubject::updateOrCreate(
                        ['subject_name' => 'S26', 'subject_code' => 'SCSJ3104', 'subject_long_name' => 'Application Development', 'subject_type' => 'compulsory']
                    );
                }
            }
        }

        return redirect('admin/generated-subject');
    }
}
