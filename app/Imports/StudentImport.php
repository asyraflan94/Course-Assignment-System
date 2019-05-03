<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class StudentImport implements ToModel, WithHeadingRow
{
    public function model(array $row){
        return new Student([
            'matrix_no' => $row['matrix no'],
            'student_name' => $row['student name'],
            'S1' => $row['S1'],
            'S2' => $row['S2'],
            'S3' => $row['S3'],
            'S4' => $row['S4'],
            'S5' => $row['S5'],
            'S6' => $row['S6'],
            'S7' => $row['S7'],
            'S8' => $row['S8'],
            'S9' => $row['S9'],
            'S10' => $row['S10'],
            'S11' => $row['S11'],
            'S12' => $row['S12'],
            'S13' => $row['S13'],
            'S14' => $row['S14'],
            'S15' => $row['S15'],
            'S16' => $row['S16'],
            'S17' => $row['S17'],
            'S18' => $row['S18'],
            'S19' => $row['S19'],
            'S20' => $row['S20'],
            'S21' => $row['S21'],
            'S22_E1' => $row['S22 E1'],
            'S23_E1' => $row['S23 E1'],
            'S24_E1' => $row['S24 E1'],
            'S25_E2' => $row['S25 E2'],
            'S26_E2' => $row['S26 E2'],
            'S27_E2' => $row['S27 E2'],
            'S28_E2' => $row['S28 E2'],
            'S29_E2' => $row['S29 E2'],
            'S30_E3' => $row['S30 E3'],
            'S31_E3' => $row['S31 E3'],
            'S32_E3' => $row['S32 E3'],
            'S33_E3' => $row['S33 E3'],
            'S34_E4' => $row['S34 E4'],
            'S35_E4' => $row['S35 E4'],
            'S36_E4' => $row['S36 E4'],
            'S37_E4' => $row['S37 E4'],
        ]);
    }
}
