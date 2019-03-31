<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.admin_login');
});

Route::match(['get','post'],'/admin','AdminController@login');

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::get('/admin/setting', 'AdminController@setting');
    Route::get('/admin/check-pswd','AdminController@checkPassword');
    Route::match(['get','post'],'/admin/update-pswd','AdminController@updatePassword');
    Route::get('/admin/scsj','ScsjController@showStudent');
    Route::get('/admin/list-of-subject','SubjectController@showSubjectList');
    Route::get('/admin/show-matrix','SubjectController@showMatrix');
    Route::get('/admin/final-year-list','SubjectController@showFinalYear');
    Route::get('/admin/final-year-subject-list','SubjectController@showSubjectListFinalYear');
    Route::get('/admin/elective-course','SubjectController@electiveGroup');


    //route for each subject
    Route::get('/admin/analisa-dan-rekabentuk-sistem','SubjectController@AnalisadanRekabentukSistem');
    Route::get('/admin/interaksi-komputer-manusia','SubjectController@InteraksiKomputerManusia');
    Route::get('/admin/jaminan-kualiti-perisian','SubjectController@JaminanKualitiPerisian');
    Route::get('/admin/kebarangkalian-dan-analisa-data-statistik','SubjectController@KebarangkaliandanAnalisaDataStatistik');
    Route::get('/admin/kejuruteraan-keperluan-dan-permodelan-perisian','SubjectController@KejuruteraanKeperluandanPermodelanPerisian');
    Route::get('/admin/kejuruteraan-perisian-berorientasikan-ejen','SubjectController@KejuruteraanPerisianBerorentasikanEjen');
    Route::get('/admin/kejuruteraan-perisian-masa-nyata','SubjectController@KejuruteraanPerisianMasaNyata');
    Route::get('/admin/kepintaran-komputer','SubjectController@KepintaranKomputer');
    Route::get('/admin/keushawanan-teknologi-maklumat-dan-seminar','SubjectController@KeushawananTeknologiMaklumatdanSeminar');
    Route::get('/admin/kejuruteraan-perisian','SubjectController@KejuruteraanPerisian');
    Route::get('/admin/kepintaran-buatan','SubjectController@KepintaranBuatan');
    Route::get('/admin/komunikasi-rangkaian','SubjectController@KomunikasiRangkaian');
    Route::get('/admin/logik-digital','SubjectController@LogikDigital');
    Route::get('/admin/matematik-pengkomputeran','SubjectController@MatematikPengkomputeran');
    Route::get('/admin/organisasi-senibina-komputer','SubjectController@OrganisasiSenibinaKomputer');
    Route::get('/admin/pangkalan-data','SubjectController@PangkalanData');
    Route::get('/admin/pembangunan-aplikasi','SubjectController@PembangunanAplikasi');
    Route::get('/admin/pembinaan-perisian','SubjectController@PembinaanPerisian');
    Route::get('/admin/pengaturcaraan-berorientasikan-objek','SubjectController@PengaturcaraanBerorentasikanObjek');
    Route::get('/admin/pengaturcaraan-internet','SubjectController@PengaturcaraanInternet');
    Route::get('/admin/pengaturcaraan-pangkalan-data','SubjectController@PengaturcaraanPangkalanData');
    Route::get('/admin/pengaturcaraan-web','SubjectController@PengaturcaraanWeb');
    Route::get('/admin/pengurusan-projek-perisian','SubjectController@PengurusanProjekPerisian');
    Route::get('/admin/projek-1','SubjectController@Projek1');
    Route::get('/admin/projek-2','SubjectController@Projek2');
    Route::get('/admin/rekabentuk-dan-senibina-perisian','SubjectController@RekabentukdanSenibinaPerisian');
    Route::get('/admin/sistem-pakar-berasaskan-pengetahuan','SubjectController@SistemPakarBerasaskanPengetahuan');
    Route::get('/admin/sistem-pengoperasian','SubjectController@SistemPengoperasian');
    Route::get('/admin/struktur-data-dan-algoritma','SubjectController@StrukturDatadanAlgoritma');
    Route::get('/admin/struktur-diskrit','SubjectController@StrukturDiskrit');
    Route::get('/admin/teknik-pengaturcaraan-1','SubjectController@TeknikPengaturcaraan1');
    Route::get('/admin/teknik-pengaturcaraan-2','SubjectController@TeknikPengaturcaraan2');
    Route::get('/admin/teknik-pengaturcaraan-3','SubjectController@TeknikPengaturcaraan3');
    Route::get('/admin/teknologi-dan-sistem-maklumat','SubjectController@TeknologidanSistemMaklumat');
    Route::get('/admin/teknologi-web','SubjectController@TeknologiWeb');
    Route::get('/admin/teori-sains-komputer','SubjectController@TeoriSainsKomputer');
    Route::get('/admin/topik-khas-dalam-kejuruteraan-perisian','SubjectController@TopikKhasdalamKejuruteraanPerisian');


});

Route::get('/logout', 'AdminController@logout');

Route::get('/home', 'HomeController@index');

