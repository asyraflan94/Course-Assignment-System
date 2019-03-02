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
                                <td style="text-align:center">{{$student->S1}}</td>
                                <td style="text-align:center">{{$student->S2}}</td>
                                <td style="text-align:center">{{$student->S3}}</td>
                                <td style="text-align:center">{{$student->S4}}</td>
                                <td style="text-align:center">{{$student->S6}}</td>
                                <td style="text-align:center">{{$student->S7}}</td>
                                <td style="text-align:center">{{$student->S7}}</td>
                                <td style="text-align:center">{{$student->S8}}</td>
                                <td style="text-align:center">{{$student->S9}}</td>
                                <td style="text-align:center">{{$student->S10}}</td>
                                <td style="text-align:center">{{$student->S11}}</td>
                                <td style="text-align:center">{{$student->S12}}</td>
                                <td style="text-align:center">{{$student->S13}}</td>
                                <td style="text-align:center">{{$student->S14}}</td>
                                <td style="text-align:center">{{$student->S15}}</td>
                                <td style="text-align:center">{{$student->S16}}</td>
                                <td style="text-align:center">{{$student->S17}}</td>
                                <td style="text-align:center">{{$student->S18}}</td>
                                <td style="text-align:center">{{$student->S19}}</td>
                                <td style="text-align:center">{{$student->S20}}</td>
                                <td style="text-align:center">{{$student->S21}}</td>
                                <td style="text-align:center">{{$student->S22_E1}}</td>
                                <td style="text-align:center">{{$student->S23_E1}}</td>
                                <td style="text-align:center">{{$student->S24_E1}}</td>
                                <td style="text-align:center">{{$student->S25_E2}}</td>
                                <td style="text-align:center">{{$student->S26_E2}}</td>
                                <td style="text-align:center">{{$student->S27_E2}}</td>
                                <td style="text-align:center">{{$student->S28_E2}}</td>
                                <td style="text-align:center">{{$student->S29_E2}}</td>
                                <td style="text-align:center">{{$student->S30_E3}}</td>
                                <td style="text-align:center">{{$student->S31_E3}}</td>
                                <td style="text-align:center">{{$student->S32_E3}}</td>
                                <td style="text-align:center">{{$student->S33_E3}}</td>
                                <td style="text-align:center">{{$student->S34_E4}}</td>
                                <td style="text-align:center">{{$student->S35_E4}}</td>
                                <td style="text-align:center">{{$student->S36_E4}}</td>
                                <td style="text-align:center">{{$student->S37_E4}}</td>
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
