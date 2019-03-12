<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Matrix extends Model
{
    protected $table = 'matrices';
    public $timestamps = false;

    public function getSubjects()
    {
        $subjects = [];
        $subjects[] = $this->S1 == 1 ? 'S1' : null;
        $subjects[] = $this->S2 == 1 ? 'S2' : null;
        $subjects[] = $this->S3 == 1 ? 'S3' : null;
        $subjects[] = $this->S4 == 1 ? 'S4' : null;
        $subjects[] = $this->S5 == 1 ? 'S5' : null;
        $subjects[] = $this->S6 == 1 ? 'S6' : null;
        $subjects[] = $this->S7 == 1 ? 'S7' : null;
        $subjects[] = $this->S8 == 1 ? 'S8' : null;
        $subjects[] = $this->S9 == 1 ? 'S9' : null;
        $subjects[] = $this->S10 == 1 ? 'S10' : null;
        $subjects[] = $this->S11 == 1 ? 'S11' : null;
        $subjects[] = $this->S12 == 1 ? 'S12' : null;
        $subjects[] = $this->S13 == 1 ? 'S13' : null;
        $subjects[] = $this->S14 == 1 ? 'S14' : null;
        $subjects[] = $this->S15 == 1 ? 'S15' : null;
        $subjects[] = $this->S16 == 1 ? 'S16' : null;
        $subjects[] = $this->S17 == 1 ? 'S17' : null;
        $subjects[] = $this->S18 == 1 ? 'S18' : null;
        $subjects[] = $this->S19 == 1 ? 'S19' : null;
        $subjects[] = $this->S20 == 1 ? 'S20' : null;
        $subjects[] = $this->S21 == 1 ? 'S21' : null;
        $subjects[] = $this->S22_E1 == 1 ? 'S22_E1' : null;
        $subjects[] = $this->S23_E1 == 1 ? 'S23_E1' : null;
        $subjects[] = $this->S24_E1 == 1 ? 'S24_E1' : null;
        $subjects[] = $this->S25_E2 == 1 ? 'S25_E2' : null;
        $subjects[] = $this->S26_E2 == 1 ? 'S26_E2' : null;
        $subjects[] = $this->S27_E2 == 1 ? 'S27_E2' : null;
        $subjects[] = $this->S28_E2 == 1 ? 'S28_E2' : null;
        $subjects[] = $this->S29_E2 == 1 ? 'S29_E2' : null;
        $subjects[] = $this->S30_E3 == 1 ? 'S30_E3' : null;
        $subjects[] = $this->S31_E3 == 1 ? 'S31_E3' : null;
        $subjects[] = $this->S32_E3 == 1 ? 'S32_E3' : null;
        $subjects[] = $this->S33_E3 == 1 ? 'S33_E3' : null;
        $subjects[] = $this->S34_E4 == 1 ? 'S34_E4' : null;
        $subjects[] = $this->S35_E4 == 1 ? 'S35_E4' : null;
        $subjects[] = $this->S36_E4 == 1 ? 'S36_E4' : null;
        $subjects[] = $this->S37_E4 == 1 ? 'S37_E4' : null;

        $subjects = array_filter($subjects);

        return implode(',', $subjects);
    }
}
