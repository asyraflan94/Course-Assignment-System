<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matrix extends Model
{
    protected $table = 'matrices';
    public $timestamps = false;

    public function getSubjects()
    {
        $subjects = [];
        $subjects[] = $this->S1 == 1 ? 'Teknologi dan Sistem Maklumat' : null;
        $subjects[] = $this->S2 == 1 ? 'Struktur Diskrit' : null;
        $subjects[] = $this->S3 == 1 ? 'Teknik Pengaturcaraan 1' : null;
        $subjects[] = $this->S4 == 1 ? 'Logik Digital' : null;
        $subjects[] = $this->S5 == 1 ? 'Matematik Pengkomputeran' : null;
        $subjects[] = $this->S6 == 1 ? 'Teknik Pengaturcaraan 2' : null;
        $subjects[] = $this->S7 == 1 ? 'Komunikasi Rangkaian' : null;
        $subjects[] = $this->S8 == 1 ? 'Pengaturcaraan Web' : null;
        $subjects[] = $this->S9 == 1 ? 'Pangkalan Data' : null;
        $subjects[] = $this->S10 == 1 ? 'Struktur Data dan Algoritma' : null;
        $subjects[] = $this->S11 == 1 ? 'Analisa dan Rekabentuk Sistem' : null;
        $subjects[] = $this->S12 == 1 ? 'Organisasi dan Senibina Komputer' : null;
        $subjects[] = $this->S13 == 1 ? 'Interaksi Komputer Manusia' : null;
        $subjects[] = $this->S14 == 1 ? 'Kebarangkalian dan Analisa Data Statistik' : null;
        $subjects[] = $this->S15 == 1 ? 'Pengaturcaraan Berorientasikan Objek' : null;
        $subjects[] = $this->S16 == 1 ? 'Kejuruteraan Perisian' : null;
        $subjects[] = $this->S17 == 1 ? 'Sistem Pengoperasian' : null;
        $subjects[] = $this->S18 == 1 ? 'Teori Sains Komputer' : null;
        $subjects[] = $this->S19 == 1 ? 'Keushawanan dan Seminar Teknologi Maklumat' : null;
        $subjects[] = $this->S20 == 1 ? 'Projek 1' : null;
        $subjects[] = $this->S21 == 1 ? 'Projek 2' : null;
        $subjects[] = $this->S22_E1 == 1 ? 'Pengaturcaraan Pangkalan Data' : null;
        $subjects[] = $this->S23_E1 == 1 ? 'Kejuruteraan keperluan dan Permodelan perisian' : null;
        $subjects[] = $this->S24_E1 == 1 ? 'Pengurusan Projek Perisian' : null;
        $subjects[] = $this->S25_E2 == 1 ? 'Kepintaran Buatan' : null;
        $subjects[] = $this->S26_E2 == 1 ? 'Pembangunan Aplikasi' : null;
        $subjects[] = $this->S27_E2 == 1 ? 'Pengaturcaraan Internet' : null;
        $subjects[] = $this->S28_E2 == 1 ? 'Jaminan Kualiti Perisian' : null;
        $subjects[] = $this->S29_E2 == 1 ? 'Sistem Pakar Berasaskan Pengetahuan' : null;
        $subjects[] = $this->S30_E3 == 1 ? 'Rekabentuk dan Senibina Perisian' : null;
        $subjects[] = $this->S31_E3 == 1 ? 'Kepintaran Komputer' : null;
        $subjects[] = $this->S32_E3 == 1 ? 'Teknik Pengaturcaraan 3' : null;
        $subjects[] = $this->S33_E3 == 1 ? 'Topik Khas dalam Kejuruteraan Perisian' : null;
        $subjects[] = $this->S34_E4 == 1 ? 'Pembinaan Perisian' : null;
        $subjects[] = $this->S35_E4 == 1 ? 'Kejuruteraan Perisian Masa Nyata' : null;
        $subjects[] = $this->S36_E4 == 1 ? 'Teknologi Web' : null;
        $subjects[] = $this->S37_E4 == 1 ? 'Kejuruteraan Perisian Berorientasikan Agen' : null;

        $subjects = array_filter($subjects);

        return implode(',', $subjects);
    }


}
