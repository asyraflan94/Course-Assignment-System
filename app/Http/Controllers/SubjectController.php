<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matrix;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function showSubjectList(){
        
        $t1 = DB::table('matrices')->sum('teknologi_dan_sistem_maklumat');
        $t2  = DB::table('matrices')->sum('struktur_diskrit');
        $t3  = DB::table('matrices')->sum('teknik_pengaturcaraan_1');
        $t4  = DB::table('matrices')->sum('logik_digital');
        $t5  = DB::table('matrices')->sum('matematik_pengkomputeran');
        $t6  = DB::table('matrices')->sum('teknik_pengaturcaraan_2');
        $t7  = DB::table('matrices')->sum('komunikasi_rangkaian');
        $t8  = DB::table('matrices')->sum('pengaturcaraan_web');
        $t9  = DB::table('matrices')->sum('pangkalan_data');
        $t10  = DB::table('matrices')->sum('struktur_data_dan_algoritma');
        $t11  = DB::table('matrices')->sum('analisa_dan_rekabentuk_sistem');
        $t12  = DB::table('matrices')->sum('organisasi_dan_senibina_komputer');
        $t13  = DB::table('matrices')->sum('interaksi_komputer_manusia');
        $t14  = DB::table('matrices')->sum('kebarangkalian_dan_analisa_data_statistik');
        $t15  = DB::table('matrices')->sum('pengaturcaraan_berorentasikan_objek');
        $t16  = DB::table('matrices')->sum('kejuruteraan_perisian');
        $t17  = DB::table('matrices')->sum('sistem_pengoperasian');
        $t18  = DB::table('matrices')->sum('teori_sains_komputer');
        $t19  = DB::table('matrices')->sum('keushawanan_teknologi_maklumat_dan_seminar');
        $t20  = DB::table('matrices')->sum('projek_1');
        $t21  = DB::table('matrices')->sum('projek_2');
        $t22  = DB::table('matrices')->sum('kejuruteraan_keperluan_dan_permodelan_perisian');
        $t23  = DB::table('matrices')->sum('pengurusan_projek_perisian');
        $t24  = DB::table('matrices')->sum('kepintaran_buatan');
        $t25  = DB::table('matrices')->sum('pembangunan_aplikasi');
        $t26  = DB::table('matrices')->sum('pengaturcaraan_internet');
        $t27  = DB::table('matrices')->sum('jaminan_kualiti_perisian');
        $t28  = DB::table('matrices')->sum('sistem_pakar_berasaskan_pengetahuan');
        $t29  = DB::table('matrices')->sum('rekabentuk_dan_senibina_perisian');
        $t30  = DB::table('matrices')->sum('kepintaran_komputer');
        $t31  = DB::table('matrices')->sum('teknik_pengaturcaraan_3');
        $t32  = DB::table('matrices')->sum('topik_khas_dalam_kejuruteraan_perisian');
        $t33  = DB::table('matrices')->sum('pembinaan_perisian');
        $t34  = DB::table('matrices')->sum('kejuruteraan_perisian_masa_nyata');
        $t35  = DB::table('matrices')->sum('teknologi_web');
        $t36  = DB::table('matrices')->sum('kejuruteraan_perisian_berorentasikan_ejen');
        $t37  = DB::table('matrices')->sum('pengaturcaraan_pangkalan_data');

        return view ('admin.subject_list')->with(compact('t1','t2','t3','t4','t5','t6','t7','t8','t9','t10','t11','t12','t13','t14','t15','t16','t17','t18','t19','t20','t21',
                                                        't22','t23','t24','t25','t26','t27','t28','t29','t30','t31','t32','t33','t34','t35','t36','t37'));
    
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
            if($row->pengaturcaraan_pangkalan_data == 'TC' || $row->pengaturcaraan_pangkalan_data == 'Y' || $row->pengaturcaraan_pangkalan_data == '0'){
                $save = Matrix::find($row->id);
                $save->pengaturcaraan_pangkalan_data='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->pengaturcaraan_pangkalan_data = '1';
            }
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
            if($row->kejuruteraan_keperluan == 'TC' || $row->kejuruteraan_keperluan == 'Y' || $row->kejuruteraan_keperluan == '0'){
                $save = Matrix::find($row->id);
                $save->kejuruteraan_keperluan='0';
                $save->save();
            } else{
                $save = Matrix::find($row->id);
                $save->kepintaran_buatan = '1';
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

        // $vars = Matrix::select(
        //     'student_name',
        //     'teknologi_dan_sistem_maklumat',
        //     'struktur_diskrit',
        //     'teknik_pengaturcaraan_1',
        //     'logik_digital',
        //     'matematik_pengkomputeran',
        //     'teknik_pengaturcaraan_2',
        //     'komunikasi_rangkaian',
        //     'pengaturcaraan_web',
        //     'pangkalan_data',
        //     'struktur_data_dan_algoritma',
        //     'analisa_dan_rekabentuk_sistem',
        //     'organisasi_dan_senibina_komputer',
        //     'interaksi_komputer_manusia',
        //     'kebarangkalian_dan_analisa_data_statistik',
        //     'pengaturcaraan_berorentasikan_objek',
        //     'kejuruteraan_perisian',
        //     'sistem_pengoperasian',
        //     'teori_sains_komputer',
        //     'keushawanan_teknologi_maklumat_dan_seminar',
        //     'projek_1',
        //     'projek_2',
        //     'pengaturcaraan_pangkalan_data',
        //     'kejuruteraan_keperluan_dan_permodelan_perisian',
        //     'pengurusan_projek_perisian',
        //     'kepintaran_buatan',
        //     'pembangunan_aplikasi',
        //     'pengaturcaraan_internet',
        //     'jaminan_kualiti_perisian',
        //     'sistem_pakar_berasaskan_pengetahuan',
        //     'rekabentuk_dan_senibina_perisian',
        //     'kepintaran_komputer',
        //     'teknik_pengaturcaraan_3',
        //     'topik_khas_dalam_kejuruteraan_perisian',
        //     'pembinaan_perisian',
        //     'kejuruteraan_perisian_masa_nyata',
        //     'teknologi_web',
        //     'kejuruteraan_perisian_berorentasikan_ejen',
            // \DB::raw('teknologi_dan_sistem_maklumat+struktur_diskrit+teknik_pengaturcaraan_1+logik_digital+matematik_pengkomputeran+teknik_pengaturcaraan_2+ komunikasi_rangkaian+pengaturcaraan_web+pangkalan_data+struktur_data_dan_algoritma
            // +analisa_dan_rekabentuk_sistem+organisasi_dan_senibina_komputer+interaksi_komputer_manusia+ kebarangkalian_dan_analisa_data_statistik+pengaturcaraan_berorentasikan_objek
            // +kejuruteraan_perisian+sistem_pengoperasian+teori_sains_komputer+ keushawanan_teknologi_maklumat_dan_seminar+projek_1+projek_2+pengaturcaraan_pangkalan_data+kejuruteraan_keperluan_dan_permodelan_perisian+pengurusan_projek_perisian
            // +kepintaran_buatan+pembangunan_aplikasi+pengaturcaraan_internet+jaminan_kualiti_perisian+sistem_pakar_berasaskan_pengetahuan+rekabentuk_dan_senibina_perisian
            // +kepintaran_komputer+teknik_pengaturcaraan_3+ topik_khas_dalam_kejuruteraan_perisian+ pembinaan_perisian+ kejuruteraan_perisian_masa_nyata+teknologi_web+ kejuruteraan_perisian_berorentasikan_ejen as total_subject_left'))->get();
        //     // code to save the total subject left inside the database 
            \DB::table('matrices')->update([
            'total_subject_left' => \DB::raw('teknologi_dan_sistem_maklumat+struktur_diskrit+teknik_pengaturcaraan_1+logik_digital+matematik_pengkomputeran+teknik_pengaturcaraan_2+ komunikasi_rangkaian+pengaturcaraan_web+pangkalan_data+struktur_data_dan_algoritma
            +analisa_dan_rekabentuk_sistem+organisasi_dan_senibina_komputer+interaksi_komputer_manusia+ kebarangkalian_dan_analisa_data_statistik+pengaturcaraan_berorentasikan_objek
            +kejuruteraan_perisian+sistem_pengoperasian+teori_sains_komputer+ keushawanan_teknologi_maklumat_dan_seminar+projek_1+projek_2+pengaturcaraan_pangkalan_data+kejuruteraan_keperluan_dan_permodelan_perisian+pengurusan_projek_perisian
            +kepintaran_buatan+pembangunan_aplikasi+pengaturcaraan_internet+jaminan_kualiti_perisian+sistem_pakar_berasaskan_pengetahuan+rekabentuk_dan_senibina_perisian
            +kepintaran_komputer+teknik_pengaturcaraan_3+ topik_khas_dalam_kejuruteraan_perisian+ pembinaan_perisian+ kejuruteraan_perisian_masa_nyata+teknologi_web+ kejuruteraan_perisian_berorentasikan_ejen')
        ]);

        return view('admin.subject_matrix')->with(compact('vars'));
    }

    public function showFinalYear(){

        $finalyear_students = Matrix::get()->where('total_subject_left','<',10);
        return view('admin.final_year_list')->with(compact('finalyear_students'));
    }

    public function showSubjectListFinalYear(){

        $t1  = DB::table('matrices')->where('total_subject_left','<',10)->sum('teknologi_dan_sistem_maklumat');
        $t2  = DB::table('matrices')->where('total_subject_left','<',10)->sum('struktur_diskrit');
        $t3  = DB::table('matrices')->where('total_subject_left','<',10)->sum('teknik_pengaturcaraan_1');
        $t4  = DB::table('matrices')->where('total_subject_left','<',10)->sum('logik_digital');
        $t5  = DB::table('matrices')->where('total_subject_left','<',10)->sum('matematik_pengkomputeran');
        $t6  = DB::table('matrices')->where('total_subject_left','<',10)->sum('teknik_pengaturcaraan_2');
        $t7  = DB::table('matrices')->where('total_subject_left','<',10)->sum('komunikasi_rangkaian');
        $t8  = DB::table('matrices')->where('total_subject_left','<',10)->sum('pengaturcaraan_web');
        $t9  = DB::table('matrices')->where('total_subject_left','<',10)->sum('pangkalan_data');
        $t10  = DB::table('matrices')->where('total_subject_left','<',10)->sum('struktur_data_dan_algoritma');
        $t11  = DB::table('matrices')->where('total_subject_left','<',10)->sum('analisa_dan_rekabentuk_sistem');
        $t12  = DB::table('matrices')->where('total_subject_left','<',10)->sum('organisasi_dan_senibina_komputer');
        $t13  = DB::table('matrices')->where('total_subject_left','<',10)->sum('interaksi_komputer_manusia');
        $t14  = DB::table('matrices')->where('total_subject_left','<',10)->sum('kebarangkalian_dan_analisa_data_statistik');
        $t15  = DB::table('matrices')->where('total_subject_left','<',10)->sum('pengaturcaraan_berorentasikan_objek');
        $t16  = DB::table('matrices')->where('total_subject_left','<',10)->sum('kejuruteraan_perisian');
        $t17  = DB::table('matrices')->where('total_subject_left','<',10)->sum('sistem_pengoperasian');
        $t18  = DB::table('matrices')->where('total_subject_left','<',10)->sum('teori_sains_komputer');
        $t19  = DB::table('matrices')->where('total_subject_left','<',10)->sum('keushawanan_teknologi_maklumat_dan_seminar');
        $t20  = DB::table('matrices')->where('total_subject_left','<',10)->sum('projek_1');
        $t21  = DB::table('matrices')->where('total_subject_left','<',10)->sum('projek_2');
        $t22  = DB::table('matrices')->where('total_subject_left','<',10)->sum('kejuruteraan_keperluan_dan_permodelan_perisian');
        $t23  = DB::table('matrices')->where('total_subject_left','<',10)->sum('pengurusan_projek_perisian');
        $t24  = DB::table('matrices')->where('total_subject_left','<',10)->sum('kepintaran_buatan');
        $t25  = DB::table('matrices')->where('total_subject_left','<',10)->sum('pembangunan_aplikasi');
        $t26  = DB::table('matrices')->where('total_subject_left','<',10)->sum('pengaturcaraan_internet');
        $t27  = DB::table('matrices')->where('total_subject_left','<',10)->sum('jaminan_kualiti_perisian');
        $t28  = DB::table('matrices')->where('total_subject_left','<',10)->sum('sistem_pakar_berasaskan_pengetahuan');
        $t29  = DB::table('matrices')->where('total_subject_left','<',10)->sum('rekabentuk_dan_senibina_perisian');
        $t30  = DB::table('matrices')->where('total_subject_left','<',10)->sum('kepintaran_komputer');
        $t31  = DB::table('matrices')->where('total_subject_left','<',10)->sum('teknik_pengaturcaraan_3');
        $t32  = DB::table('matrices')->where('total_subject_left','<',10)->sum('topik_khas_dalam_kejuruteraan_perisian');
        $t33  = DB::table('matrices')->where('total_subject_left','<',10)->sum('pembinaan_perisian');
        $t34  = DB::table('matrices')->where('total_subject_left','<',10)->sum('kejuruteraan_perisian_masa_nyata');
        $t35  = DB::table('matrices')->where('total_subject_left','<',10)->sum('teknologi_web');
        $t36  = DB::table('matrices')->where('total_subject_left','<',10)->sum('kejuruteraan_perisian_berorentasikan_ejen');
        $t37  = DB::table('matrices')->where('total_subject_left','<',10)->sum('pengaturcaraan_pangkalan_data');

        return view ('admin.final_year_subject_list')->with(compact('t1','t2','t3','t4','t5','t6','t7','t8','t9','t10','t11','t12','t13','t14','t15','t16','t17','t18','t19','t20','t21',
                                                        't22','t23','t24','t25','t26','t27','t28','t29','t30','t31','t32','t33','t34','t35','t36','t37'));
    }
}
