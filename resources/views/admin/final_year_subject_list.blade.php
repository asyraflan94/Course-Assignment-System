@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="" class="current">Final Year Subject List</a> </div>
            <h1>Subjects List</h1>
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
                                <th>Subject name</th>
                                <th>No. of students</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                                <td>Teknologi dan Sistem Maklumat</td>
                                <td style="text-align:center">{{ $t1 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Struktur diskrit</td>
                                <td style="text-align:center">{{ $t2 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Teknik Pengaturcaraan 1</td>
                                <td style="text-align:center">{{ $t3 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Logik Digital</td>
                                <td style="text-align:center">{{ $t4 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Matematik Pengkomputeran</td>
                                <td style="text-align:center">{{ $t5 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Teknik Pengaturcaraan 2</td>
                                <td style="text-align:center">{{ $t6 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Komunikasi Rangkaian</td>
                                <td style="text-align:center"d>{{ $t7 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pengaturcaraan Web</td>
                                <td style="text-align:center">{{ $t8 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pangkalan Data</td>
                                <td style="text-align:center">{{ $t9 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Struktur Data dan Algoritma</td>
                                <td style="text-align:center">{{ $t10 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Analisa dan Rekabentuk Sistem</td>
                                <td style="text-align:center">{{ $t11 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Organisasi Senibina Komputer</td>
                                <td style="text-align:center">{{ $t12 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Interaksi Komputer Manusia</td>
                                <td style="text-align:center">{{ $t13 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kebarangkalian dan Analisa Data Statistik</td>
                                <td style="text-align:center">{{ $t14 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pengaturcaraan Berorentasikan Objek</td>
                                <td style="text-align:center">{{ $t15 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kejuruteraan Perisian</td>
                                <td style="text-align:center">{{ $t16 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Sistem Pengoperasian</td>
                                <td style="text-align:center">{{ $t17 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Teori Sains Komputer</td>
                                <td style="text-align:center">{{ $t18 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Keushawanan Teknologi Maklumat dan Seminar</td>
                                <td style="text-align:center">{{ $t19 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Projek 1</td>
                                <td style="text-align:center">{{ $t20 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Projek 2</td>
                                <td style="text-align:center">{{ $t21 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pengaturcaraan Pangkalan Data</td>
                                <td style="text-align:center">{{ $t37 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kejuruteraan Keperluan dan Permodelan Perisian</td>
                                <td style="text-align:center">{{ $t22 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pengurusan Projek Perisian</td>
                                <td style="text-align:center">{{ $t23 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kepintaran Buatan</td>
                                <td style="text-align:center">{{ $t24 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pembangunan Aplikasi</td>
                                <td style="text-align:center">{{ $t25 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pengaturcaraan Internet</td>
                                <td style="text-align:center">{{ $t26 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Jaminan Kualiti Perisian</td>
                                <td style="text-align:center">{{ $t27 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Sistem Pakar Berasaskan Pengetahuan</td>
                                <td style="text-align:center">{{ $t28 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Rekabentuk dan Senibina Perisian</td>
                                <td style="text-align:center">{{ $t29 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kepintaran Komputer</td>
                                <td style="text-align:center">{{ $t30 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Teknik Pengaturcaraan 3</td>
                                <td style="text-align:center">{{ $t31 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Topik Khas dalam Kejuruteraan Perisian</td>
                                <td style="text-align:center">{{ $t32 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pembinaan Perisian</td>
                                <td style="text-align:center">{{ $t33 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kejuruteraan Perisian Masa Nyata</td>
                                <td style="text-align:center">{{ $t34 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Teknologi Web</td>
                                <td style="text-align:center">{{ $t35 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kejuruteraan Perisian Berorentasikan Ejen</td>
                                <td style="text-align:center">{{ $t36 }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
