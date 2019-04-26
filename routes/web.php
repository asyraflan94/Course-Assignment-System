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

    //AdminController
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::get('/admin/setting', 'AdminController@setting');
    Route::get('/admin/check-pswd','AdminController@checkPassword');
    Route::match(['get','post'],'/admin/update-pswd','AdminController@updatePassword');

    //excel
    Route::post('import', 'ExcelController@import')->name('import');

    //ScsjController
    Route::get('/admin/scsj','ScsjController@showStudent');

    //SubjectController
    Route::get('/test', 'TemporaryController@generateSubject');
    Route::get('/admin/list-of-subject','SubjectController@showSubjectList');
    Route::get('/admin/show-matrix','SubjectController@showMatrix');
    Route::get('/admin/final-year-list','SubjectController@showFinalYear');
    Route::get('/admin/generated-subject','SubjectController@generatedSubject');

    //TemporaryController
    Route::get('/admin/generate-subject','TemporaryController@generateSubject');

    //StudentController
    //route for each student detail
    Route::get('/admin/student/{id}','StudentController@showStudent');

    //route for each subject
    Route::get('/admin/system-analysis-and-design','SubjectController@AnalisadanRekabentukSistem');
    Route::get('/admin/human-computer-interaction','SubjectController@InteraksiKomputerManusia');
    Route::get('/admin/software-quality-assurance','SubjectController@JaminanKualitiPerisian');
    Route::get('/admin/probability-and-statistical-data-analysis','SubjectController@KebarangkaliandanAnalisaDataStatistik');
    Route::get('/admin/requirement-engineering-and-software-modeling','SubjectController@KejuruteraanKeperluandanPermodelanPerisian');
    Route::get('/admin/agent-oriented-software-engineering','SubjectController@KejuruteraanPerisianBerorentasikanEjen');
    Route::get('/admin/real-time-software-engineering','SubjectController@KejuruteraanPerisianMasaNyata');
    Route::get('/admin/computational-intelligence','SubjectController@KepintaranKomputer');
    Route::get('/admin/technopreneurship-and-seminar','SubjectController@KeushawananTeknologiMaklumatdanSeminar');
    Route::get('/admin/software-engineering','SubjectController@KejuruteraanPerisian');
    Route::get('/admin/artificial-intelligent','SubjectController@KepintaranBuatan');
    Route::get('/admin/network-communication','SubjectController@KomunikasiRangkaian');
    Route::get('/admin/digital-logic','SubjectController@LogikDigital');
    Route::get('/admin/computational-mathematic','SubjectController@MatematikPengkomputeran');
    Route::get('/admin/computer-organisation-and-architecture','SubjectController@OrganisasiSenibinaKomputer');
    Route::get('/admin/database','SubjectController@PangkalanData');
    Route::get('/admin/application-development','SubjectController@PembangunanAplikasi');
    Route::get('/admin/software-construction','SubjectController@PembinaanPerisian');
    Route::get('/admin/object-oriented-programming','SubjectController@PengaturcaraanBerorentasikanObjek');
    Route::get('/admin/internet-programming','SubjectController@PengaturcaraanInternet');
    Route::get('/admin/pengaturcaraan-pangkalan-data','SubjectController@PengaturcaraanPangkalanData');
    Route::get('/admin/web-programming','SubjectController@PengaturcaraanWeb');
    Route::get('/admin/software-project-management','SubjectController@PengurusanProjekPerisian');
    Route::get('/admin/software-engineering-project-1','SubjectController@Projek1');
    Route::get('/admin/software-engineering-project-2','SubjectController@Projek2');
    Route::get('/admin/software-design-and-architecture','SubjectController@RekabentukdanSenibinaPerisian');
    Route::get('/admin/knowledge-based-and-expert-system','SubjectController@SistemPakarBerasaskanPengetahuan');
    Route::get('/admin/operating-system','SubjectController@SistemPengoperasian');
    Route::get('/admin/data-structures-and-algorithm','SubjectController@StrukturDatadanAlgoritma');
    Route::get('/admin/discrete-structure','SubjectController@StrukturDiskrit');
    Route::get('/admin/programming-technique-1','SubjectController@TeknikPengaturcaraan1');
    Route::get('/admin/programming-technique-2','SubjectController@TeknikPengaturcaraan2');
    Route::get('/admin/programming-technique-3','SubjectController@TeknikPengaturcaraan3');
    Route::get('/admin/technology-and-information-system','SubjectController@TeknologidanSistemMaklumat');
    Route::get('/admin/web-technology','SubjectController@TeknologiWeb');
    Route::get('/admin/theory-of-computer-science','SubjectController@TeoriSainsKomputer');
    Route::get('/admin/special-topic-in-software-engineering','SubjectController@TopikKhasdalamKejuruteraanPerisian');


});

Route::get('/logout', 'AdminController@logout');

Route::get('/home', 'HomeController@index');

