@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="">Courses</a><a href="" class="current">Software Engineering</a> </div>
            <h1>Software Engineering (SCSJ)</h1>
        </div>
        <div class="container-fluid"><hr>
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>Data table</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>MATRIX NO.</th>
                                <th>NAME</th>
                                <th>TEKNOLOGI DAN SISTEM MAKLUMAT</th>
                                <th>STRUKTUR DISKRIT</th>
                                <th>TEKNIK PENGATURCARAAN 1</th>
                                <th>LOGIK DIGITAL</th>
                                <th>MATEMATIK PENGKOMPUTERAN</th>
                                <th>TEKNIK PENGATURCARAAN II</th>
                                <th>KOMUNIKASI RANGKAIAN</th>
                                <th>PENGATURCARAAN WEB</th>
                                <th>PANGKALAN DATA</th>
                                <th>STRUKTUR DATA DAN ALGORITMA</th>
                                <th>ANALISA DAN REKABENTUK SISTEM</th>
                                <th>ORGANISASI DAN SENIBINA KOMPUTER</th>
                                <th>INTERAKSI KOMPUTER MANUSIA</th>
                                <th>KEBARANGKALIAN DAN ANALISA DATA STATISTIK</th>
                                <th>PENGATURCARAAN BERORENTASIKAN OBJEK</th>
                                <th>KEJURUTERAAN PERISIAN</th>
                                <th>SISTEM PENGOPERASIAN</th>
                                <th>TEORI SAINS KOMPUTER</th>
                                <th>KEUSAHAWANAN TEKNOLOGI MAKLUMAT & SEMINAR</th>
                                <th>PROJEK 1</th>
                                <th>PROJEK 2</th>
                                <th>PENGATURCARAAN PANGKALAN DATA</th>
                                <th>KEJURUTERAAN KEPERLUAN DAN PERMODELAN PERISIAN</th>
                                <th>PENGURUSAN PROJEK PERISIAN</th>
                                <th>KEPINTARAN BUATAN</th>
                                <th>PEMBANGUNAN APLIKASI</th>
                                <th>PENGATURCARAAN INTERNET</th>
                                <th>JAMINAN KUALITI PERISIAN</th>
                                <th>SISTEM PAKAR BERASASKAN PENGETAHUAN</th>
                                <th>REKABENTUK DAN SENIBINA PERISIAN</th>
                                <th>KEPINTARAN KOMPUTER</th>
                                <th>TEKNIK PENGATURCARAAN 3</th>
                                <th>TOPIK KHAS DALAM KEJURUTERAAN PERISIAN</th>
                                <th>PEMBINAAN PERISIAN</th>
                                <th>KEJURUTERAAN PERISIAN MASA NYATA</th>
                                <th>TEKNOLOGI WEB</th>
                                <th>KEJURUTERAAN PERISIAN BERORENTASIKAN EJEN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($scsj as $student)
                            <tr class="gradeX">
                                <td>{{$student->matrix_no}}</td>
                                <td>{{$student->student_name}}</td>
                                <td>{{$student->teknologi_dan_sistem_maklumat}}</td>
                                <td>{{$student->struktur_diskrit}}</td>
                                <td>{{$student->teknik_pengaturcaraan_1}}</td>
                                <td>{{$student->logik_digital}}</td>
                                <td>{{$student->matematik_pengkomputeran}}</td>
                                <td>{{$student->teknik_pengaturcaraan_2}}</td>
                                <td>{{$student->komunikasi_rangkaian}}</td>
                                <td>{{$student->pengaturcaraan_web}}</td>
                                <td>{{$student->pangkalan_data}}</td>
                                <td>{{$student->struktur_data_dan_algoritma}}</td>
                                <td>{{$student->analisa_dan_rekabentuk_sistem}}</td>
                                <td>{{$student->organisasi_dan_senibina_komputer}}</td>
                                <td>{{$student->interaksi_komputer_manusia}}</td>
                                <td>{{$student->kebarangkalian_dan_analisa_data_statistik}}</td>
                                <td>{{$student->pengaturcaraan_berorentasikan_objek}}</td>
                                <td>{{$student->kejuruteraan_perisian}}</td>
                                <td>{{$student->sistem_pengoperasian}}</td>
                                <td>{{$student->teori_sains_komputer}}</td>
                                <td>{{$student->keushawanan_teknologi_maklumat_dan_seminar}}</td>
                                <td>{{$student->projek_1}}</td>
                                <td>{{$student->projek_2}}</td>
                                <td>{{$student->pengaturcaraan_pangkalan_data}}</td>
                                <td>{{$student->kejuruteraan_keperluan_dan_permodelan_perisian}}</td>
                                <td>{{$student->pengurusan_projek_perisian}}</td>
                                <td>{{$student->kepintaran_buatan}}</td>
                                <td>{{$student->pembangunan_aplikasi}}</td>
                                <td>{{$student->pengaturcaraan_internet}}</td>
                                <td>{{$student->jaminan_kualiti_perisian}}</td>
                                <td>{{$student->sistem_pakar_berasaskan_pengetahuan}}</td>
                                <td>{{$student->rekabentuk_dan_senibina_perisian}}</td>
                                <td>{{$student->kepintaran_komputer}}</td>
                                <td>{{$student->teknik_pengaturcaraan_3}}</td>
                                <td>{{$student->topik_khas_dalam_kejuruteraan_perisian}}</td>
                                <td>{{$student->pembinaan_perisian}}</td>
                                <td>{{$student->kejuruteraan_perisian_masa_nyata}}</td>
                                <td>{{$student->teknologi_web}}</td>
                                <td>{{$student->kejuruteraan_perisian_berorentasikan_ejen}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
