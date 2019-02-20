<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matrix;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function showSubjectList(){
        

     
    }

    public function showMatrix(){
        
        $vars = Matrix::get();
        foreach($vars as $row){
            //s1
            if($row->teknologi_dan_sistem_maklumat == 'TC' || $row->teknologi_dan_sistem_maklumat == 'Y' || $row->teknologi_dan_sistem_maklumat == '0'){
                $save = Matrix::find($row->id);
                $save->teknologi_dan_sistem_maklumat='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->teknologi_dan_sistem_maklumat = '1';
              
            }
            //s2
            if($row->struktur_diskrit == 'TC' || $row->struktur_diskrit == 'Y' || $row->struktur_diskrit == '0'){
                $save = Matrix::find($row->id);
                $save->struktur_diskrit='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->struktur_diskrit = '1';
                
            }
            //s3
            if($row->teknik_pengaturcaraan_1 == 'TC' || $row->teknik_pengaturcaraan_1 == 'Y' || $row->teknik_pengaturcaraan_1 == '0'){
                $save = Matrix::find($row->id);
                $save->teknik_pengaturcaraan_1='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->teknik_pengaturcaraan_1 = '1';
               
            }
            //s4
            if($row->logik_digital == 'TC' || $row->logik_digital == 'Y' || $row->logik_digital == '0'){
                $save = Matrix::find($row->id);
                $save->logik_digital='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->logik_digital = '1';
               
            }
            //s5
            if($row->matematik_pengkomputeran == 'TC' || $row->matematik_pengkomputeran == 'Y' || $row->matematik_pengkomputeran == '0'){
                $save = Matrix::find($row->id);
                $save->matematik_pengkomputeran='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->matematik_pengkomputeran = '1';
                
            }
            //s6
            if($row->teknik_pengaturcaraan_2 == 'TC' || $row->teknik_pengaturcaraan_2 == 'Y' || $row->teknik_pengaturcaraan_2 == '0'){
                $save = Matrix::find($row->id);
                $save->teknik_pengaturcaraan_2='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->teknik_pengaturcaraan_2 = '1';
            }
            //s7
            if($row->komunikasi_rangkaian == 'TC' || $row->komunikasi_rangkaian == 'Y' || $row->komunikasi_rangkaian == '0'){
                $save = Matrix::find($row->id);
                $save->komunikasi_rangkaian='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->komunikasi_rangkaian = '1';
            }
            //s7
            if($row->pengaturcaraan_web == 'TC' || $row->pengaturcaraan_web == 'Y' || $row->pengaturcaraan_web == '0'){
                $save = Matrix::find($row->id);
                $save->pengaturcaraan_web='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->pengaturcaraan_web = '1';
            }
            //s8
            if($row->pangkalan_data == 'TC' || $row->pangkalan_data == 'Y' || $row->pangkalan_data == '0'){
                $save = Matrix::find($row->id);
                $save->pangkalan_data='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->pangkalan_data = '1';
            }
            //s9
            if($row->struktur_data_dan_algoritma == 'TC' || $row->struktur_data_dan_algoritma == 'Y' || $row->struktur_data_dan_algoritma == '0'){
                $save = Matrix::find($row->id);
                $save->struktur_data_dan_algoritma='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->struktur_data_dan_algoritma = '1';
            }
            //s10
            if($row->analisa_dan_rekabentuk_sistem == 'TC' || $row->analisa_dan_rekabentuk_sistem == 'Y' || $row->analisa_dan_rekabentuk_sistem == '0'){
                $save = Matrix::find($row->id);
                $save->analisa_dan_rekabentuk_sistem='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->analisa_dan_rekabentuk_sistem = '1';
            }
            //s11           
            if($row->organisasi_dan_senibina_komputer == 'TC' || $row->organisasi_dan_senibina_komputer == 'Y' || $row->organisasi_dan_senibina_komputer == '0'){
                $save = Matrix::find($row->id);
                $save->organisasi_dan_senibina_komputer='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->organisasi_dan_senibina_komputer = '1';
            }
            //s12
            if($row->interaksi_komputer_manusia == 'TC' || $row->interaksi_komputer_manusia == 'Y' || $row->interaksi_komputer_manusia == '0'){
                $save = Matrix::find($row->id);
                $save->interaksi_komputer_manusia='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->interaksi_komputer_manusia = '1';
            }
            //s13
            if($row->kebarangkalian_dan_analisa_data_statistik == 'TC' || $row->kebarangkalian_dan_analisa_data_statistik == 'Y' || $row->kebarangkalian_dan_analisa_data_statistik == '0'){
                $save = Matrix::find($row->id);
                $save->kebarangkalian_dan_analisa_data_statistik='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->kebarangkalian_dan_analisa_data_statistik = '1';
            }
            //s14
            if($row->pengaturcaraan_berorentasikan_objek == 'TC' || $row->pengaturcaraan_berorentasikan_objek == 'Y' || $row->pengaturcaraan_berorentasikan_objek == '0'){
                $save = Matrix::find($row->id);
                $save->pengaturcaraan_berorentasikan_objek='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->pengaturcaraan_berorentasikan_objek = '1';
            }
            //s15
            if($row->kejuruteraan_perisian == 'TC' || $row->kejuruteraan_perisian == 'Y' || $row->kejuruteraan_perisian == '0'){
                $save = Matrix::find($row->id);
                $save->kejuruteraan_perisian='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->kejuruteraan_perisian = '1';
            }
            //s16
            if($row->sistem_pengoperasian == 'TC' || $row->sistem_pengoperasian == 'Y' || $row->sistem_pengoperasian == '0'){
                $save = Matrix::find($row->id);
                $save->sistem_pengoperasian='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->sistem_pengoperasian = '1';
            }
            //s17
            if($row->teori_sains_komputer == 'TC' || $row->teori_sains_komputer == 'Y' || $row->teori_sains_komputer == '0'){
                $save = Matrix::find($row->id);
                $save->teori_sains_komputer='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->teori_sains_komputer = '1';
            }
            //s18
            if($row->keushawanan_teknologi_maklumat_dan_seminar == 'TC' || $row->keushawanan_teknologi_maklumat_dan_seminar == 'Y' || $row->keushawanan_teknologi_maklumat_dan_seminar == '0'){
                $save = Matrix::find($row->id);
                $save->keushawanan_teknologi_maklumat_dan_seminar='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->keushawanan_teknologi_maklumat_dan_seminar = '1';
            }
            //s19
            if($row->projek_1 == 'TC' || $row->projek_1 == 'Y' || $row->projek_1 == '0'){
                $save = Matrix::find($row->id);
                $save->projek_1='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->projek_1 = '1';
            }
            //s20
            if($row->projek_2 == 'TC' || $row->projek_2 == 'Y' || $row->projek_2 == '0'){
                $save = Matrix::find($row->id);
                $save->projek_2='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->projek_2 = '1';
            }
            //s21
            if($row->kejuruteraan_keperluan_dan_permodelan_perisian == 'TC' || $row->kejuruteraan_keperluan_dan_permodelan_perisian == 'Y' || $row->kejuruteraan_keperluan_dan_permodelan_perisian == '0'){
                $save = Matrix::find($row->id);
                $save->kejuruteraan_keperluan_dan_permodelan_perisian='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->kejuruteraan_keperluan_dan_permodelan_perisian = '1';
            }
            //s22
            if($row->pengurusan_projek_perisian == 'TC' || $row->pengurusan_projek_perisian == 'Y' || $row->pengurusan_projek_perisian == '0'){
                $save = Matrix::find($row->id);
                $save->pengurusan_projek_perisian='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->pengurusan_projek_perisian = '1';
            }
            //s23
            if($row->kepintaran_buatan == 'TC' || $row->kepintaran_buatan == 'Y' || $row->kepintaran_buatan == '0'){
                $save = Matrix::find($row->id);
                $save->kepintaran_buatan='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->kepintaran_buatan = '1';
            }
            //s24
            if($row->pembangunan_aplikasi == 'TC' || $row->pembangunan_aplikasi == 'Y' || $row->pembangunan_aplikasi == '0'){
                $save = Matrix::find($row->id);
                $save->pembangunan_aplikasi='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->pembangunan_aplikasi = '1';
            }
            //s25
            if($row->pengaturcaraan_internet == 'TC' || $row->pengaturcaraan_internet == 'Y' || $row->pengaturcaraan_internet == '0'){
                $save = Matrix::find($row->id);
                $save->pengaturcaraan_internet='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->pengaturcaraan_internet = '1';
            }
            //s26
            if($row->jaminan_kualiti_perisian == 'TC' || $row->jaminan_kualiti_perisian == 'Y' || $row->jaminan_kualiti_perisian == '0'){
                $save = Matrix::find($row->id);
                $save->jaminan_kualiti_perisian='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->jaminan_kualiti_perisian = '1';
            }
            //s27
            if($row->sistem_pakar_berasaskan_pengetahuan == 'TC' || $row->sistem_pakar_berasaskan_pengetahuan == 'Y' || $row->sistem_pakar_berasaskan_pengetahuan == '0'){
                $save = Matrix::find($row->id);
                $save->sistem_pakar_berasaskan_pengetahuan='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->sistem_pakar_berasaskan_pengetahuan = '1';
            }
            //s28
            if($row->rekabentuk_dan_senibina_perisian == 'TC' || $row->rekabentuk_dan_senibina_perisian == 'Y' || $row->rekabentuk_dan_senibina_perisian == '0'){
                $save = Matrix::find($row->id);
                $save->rekabentuk_dan_senibina_perisian='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->rekabentuk_dan_senibina_perisian = '1';
            }
            
            if($row->kepintaran_komputer == 'TC' || $row->kepintaran_komputer == 'Y' || $row->kepintaran_komputer == '0'){
                $save = Matrix::find($row->id);
                $save->kepintaran_komputer='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->kepintaran_komputer = '1';
            }
            
            if($row->teknik_pengaturcaraan_3 == 'TC' || $row->teknik_pengaturcaraan_3 == 'Y' || $row->teknik_pengaturcaraan_3 == '0'){
                $save = Matrix::find($row->id);
                $save->teknik_pengaturcaraan_3='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->teknik_pengaturcaraan_3 = '1';
            }
            
            if($row->topik_khas_dalam_kejuruteraan_perisian == 'TC' || $row->topik_khas_dalam_kejuruteraan_perisian == 'Y' || $row->topik_khas_dalam_kejuruteraan_perisian == '0'){
                $save = Matrix::find($row->id);
                $save->topik_khas_dalam_kejuruteraan_perisian='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->topik_khas_dalam_kejuruteraan_perisian = '1';
            }
            
            if($row->pembinaan_perisian == 'TC' || $row->pembinaan_perisian == 'Y' || $row->pembinaan_perisian == '0'){
                $save = Matrix::find($row->id);
                $save->pembinaan_perisian='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->pembinaan_perisian = '1';
            }
            
            if($row->kejuruteraan_perisian_masa_nyata == 'TC' || $row->kejuruteraan_perisian_masa_nyata == 'Y' || $row->kejuruteraan_perisian_masa_nyata == '0'){
                $save = Matrix::find($row->id);
                $save->kejuruteraan_perisian_masa_nyata='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->kejuruteraan_perisian_masa_nyata = '1';
            }
            
            if($row->teknologi_web == 'TC' || $row->teknologi_web == 'Y' || $row->teknologi_web == '0'){
                $save = Matrix::find($row->id);
                $save->teknologi_web='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->teknologi_web = '1';
            }
            
            if($row->kejuruteraan_perisian_berorentasikan_ejen == 'TC' || $row->kejuruteraan_perisian_berorentasikan_ejen == 'Y' || $row->kejuruteraan_perisian_berorentasikan_ejen == '0'){
                $save = Matrix::find($row->id);
                $save->kejuruteraan_perisian_berorentasikan_ejen='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->kejuruteraan_perisian_berorentasikan_ejen = '1';
            }

        }

        $vars = Matrix::select(
            'student_name',
            'teknologi_dan_sistem_maklumat',
            'struktur_diskrit',
            'teknik_pengaturcaraan_1',
            'logik_digital',
            'matematik_pengkomputeran',
            'teknik_pengaturcaraan_2',
            'komunikasi_rangkaian',
            'pengaturcaraan_web',
            'pangkalan_data',
            'struktur_data_dan_algoritma',
            'analisa_dan_rekabentuk_sistem',
            'organisasi_dan_senibina_komputer',
            'interaksi_komputer_manusia',
            'kebarangkalian_dan_analisa_data_statistik',
            'pengaturcaraan_berorentasikan_objek',
            'kejuruteraan_perisian',
            'sistem_pengoperasian',
            'teori_sains_komputer',
            'keushawanan_teknologi_maklumat_dan_seminar',
            'projek_1',
            'projek_2',
            'kejuruteraan_keperluan_dan_permodelan_perisian',
            'pengurusan_projek_perisian',
            'kepintaran_buatan',
            'pembangunan_aplikasi',
            'pengaturcaraan_internet',
            'jaminan_kualiti_perisian',
            'sistem_pakar_berasaskan_pengetahuan',
            'rekabentuk_dan_senibina_perisian',
            'kepintaran_komputer',
            'teknik_pengaturcaraan_3',
            'topik_khas_dalam_kejuruteraan_perisian',
            'pembinaan_perisian',
            'kejuruteraan_perisian_masa_nyata',
            'teknologi_web',
            'kejuruteraan_perisian_berorentasikan_ejen',
                \DB::raw('teknologi_dan_sistem_maklumat+struktur_diskrit+teknik_pengaturcaraan_1+logik_digital+matematik_pengkomputeran+teknik_pengaturcaraan_2+ komunikasi_rangkaian+pengaturcaraan_web+pangkalan_data+struktur_data_dan_algoritma
                +analisa_dan_rekabentuk_sistem+organisasi_dan_senibina_komputer+interaksi_komputer_manusia+ kebarangkalian_dan_analisa_data_statistik+pengaturcaraan_berorentasikan_objek
                +kejuruteraan_perisian+sistem_pengoperasian+teori_sains_komputer+ keushawanan_teknologi_maklumat_dan_seminar+projek_1+projek_2+kejuruteraan_keperluan_dan_permodelan_perisian+pengurusan_projek_perisian
                +kepintaran_buatan+pembangunan_aplikasi+pengaturcaraan_internet+jaminan_kualiti_perisian+sistem_pakar_berasaskan_pengetahuan+rekabentuk_dan_senibina_perisian
                +kepintaran_komputer+teknik_pengaturcaraan_3+ topik_khas_dalam_kejuruteraan_perisian+ pembinaan_perisian+ kejuruteraan_perisian_masa_nyata+teknologi_web+ kejuruteraan_perisian_berorentasikan_ejen as total_subject_left'))->get();

        return view('admin.subject_matrix')->with(compact('vars'));
    }
}
