<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Matrix extends Model
{
    protected $fillable = ['matrix_no','student_name','S1','S2','S3','S4','S5','S6','S7','S8','S9','S10','S11','S12','S13','S14','S15','S16','S17','S18','S19','S20','S21',
                            'S22_E1','S23_E1','S24_E1','S25_E2','S26_E2','S27_E2','S28_E2','S29_E2','S30_E3','S31_E3','S32_E3','S33_E3','S34_E4','S35_E4','S36_E4','S37_E4'];
                            
    public $timestamps = false;

}
