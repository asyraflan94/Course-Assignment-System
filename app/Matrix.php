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
        $subjects[] = $this->teknologi_dan_sistem_maklumat == 1 ? 'Teknologi dan Sistem Maklumat' : null;
        $subjects[] = $this->struktur_diskrit == 1 ? 'Struktur Diskrit' : null;
        $subjects[] = $this->teknik_pengaturcaraan_1 == 1 ? 'Teknik Pengaturcaraan 1' : null;
        $subjects[] = $this->logik_digital == 1 ? 'Logik Digital' : null;
        $subjects[] = $this->matematik_pengkomputeran == 1 ? 'Matematik Pengkomputeran' : null;
        $subjects[] = $this->teknik_pengaturcaraan_2 == 1 ? 'Teknik Pengaturcaraan 2' : null;
        $subjects[] = $this->komunikasi_rangkaian == 1 ? 'Komunikasi Rangkaian' : null;
        $subjects[] = $this->pengaturcaraan_web == 1 ? 'Pengaturcaraan Web' : null;
        $subjects[] = $this->pangkalan_data == 1 ? 'Pangkalan Data' : null;
        $subjects[] = $this->struktur_data_dan_algoritma == 1 ? 'Struktur Data dan Algoritma' : null;
        $subjects[] = $this->analisa_dan_rekabentuk_sistem == 1 ? 'Analisa dan Rekabentuk Sistem' : null;
        $subjects[] = $this->organisasi_dan_senibina_komputer == 1 ? 'Organisasi dan Senibina Komputer' : null;
        $subjects[] = $this->interaksi_komputer_manusia == 1 ? 'Interaksi Komputer Manusia' : null;
        $subjects[] = $this->kebarangkalian_dan_analisa_data_statistik == 1 ? 'Kebarangkalian dan Analisa Data Statistik' : null;
        $subjects[] = $this->pengaturcaraan_berorentasikan_objek == 1 ? 'Pengaturcaraan Berorientasikan Objek' : null;
        $subjects[] = $this->kejuruteraan_perisian == 1 ? 'Kejuruteraan Perisian' : null;
        $subjects[] = $this->sistem_pengoperasian == 1 ? 'Sistem Pengoperasian' : null;
        $subjects[] = $this->teori_sains_komputer == 1 ? 'Teori Sains Komputer' : null;
        $subjects[] = $this->keushawanan_teknologi_maklumat_dan_seminar == 1 ? 'Keushawanan dan Seminar Teknologi Maklumat' : null;
        $subjects[] = $this->projek_1 == 1 ? 'Projek 1' : null;
        $subjects[] = $this->projek_2 == 1 ? 'Projek 2' : null;
        $subjects[] = $this->pengaturcaraan_pangkalan_data == 1 ? 'Pengaturcaraan Pangkalan Data' : null;
        $subjects[] = $this->kejuruteraan_keperluan_dan_permodelan_perisian == 1 ? 'Kejuruteraan keperluan dan Permodelan perisian' : null;
        $subjects[] = $this->pengurusan_projek_perisian == 1 ? 'Pengurusan Projek Perisian' : null;
        $subjects[] = $this->kepintaran_buatan == 1 ? 'Kepintaran Buatan' : null;
        $subjects[] = $this->pembangunan_aplikasi == 1 ? 'Pembangunan Aplikasi' : null;
        $subjects[] = $this->pengaturcaraan_internet == 1 ? 'Pengaturcaraan Internet' : null;
        $subjects[] = $this->jaminan_kualiti_perisian == 1 ? 'Jaminan Kualiti Perisian' : null;
        $subjects[] = $this->sistem_pakar_berasaskan_pengetahuan == 1 ? 'Sistem Pakar Berasaskan Pengetahuan' : null;
        $subjects[] = $this->rekabentuk_dan_senibina_perisian == 1 ? 'Rekabentuk dan Senibina Perisian' : null;
        $subjects[] = $this->kepintaran_komputer == 1 ? 'Kepintaran Komputer' : null;
        $subjects[] = $this->teknik_pengaturcaraan_3 == 1 ? 'Teknik Pengaturcaraan 3' : null;
        $subjects[] = $this->topik_khas_dalam_kejuruteraan_perisian == 1 ? 'Topik Khas dalam Kejuruteraan Perisian' : null;
        $subjects[] = $this->pembinaan_perisian == 1 ? 'Pembinaan Perisian' : null;
        $subjects[] = $this->kejuruteraan_perisian_masa_nyata == 1 ? 'Kejuruteraan Perisian Masa Nyata' : null;
        $subjects[] = $this->teknologi_web == 1 ? 'Teknologi Web' : null;
        $subjects[] = $this->kejuruteraan_perisian_berorentasikan_ejen == 1 ? 'Kejuruteraan Perisian Berorientasikan Agen' : null;

        $subjects = array_filter($subjects);

        return implode(',', $subjects);
    }


}
