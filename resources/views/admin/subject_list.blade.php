@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="" class="current">List of subjects</a> </div>
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
                                <td>{{ $t1 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Struktur diskrit</td>
                                <td>{{ $t2 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Teknik Pengaturcaraan 1</td>
                                <td>{{ $t3 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Logik Digital</td>
                                <td>{{ $t4 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Matematik Pengkomputeran</td>
                                <td>{{ $t5 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Teknik Pengaturcaraan 2</td>
                                <td>{{ $t6 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Komunikasi Rangkaian</td>
                                <td>{{ $t7 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pengaturcaraan Web</td>
                                <td>{{ $t8 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pangkalan Data</td>
                                <td>{{ $t9 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Struktur Data dan Algoritma</td>
                                <td>{{ $t10 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Analisa dan Rekabentuk Sistem</td>
                                <td>{{ $t11 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Organisasi Senibina Komputer</td>
                                <td>{{ $t12 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Interaksi Komputer Manusia</td>
                                <td>{{ $t13 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kebarangkalian dan Analisa Data Statistik</td>
                                <td>{{ $t14 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pengaturcaraan Berorentasikan Objek</td>
                                <td>{{ $t15 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kejuruteraan Perisian</td>
                                <td>{{ $t16 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Sistem Pengoperasian</td>
                                <td>{{ $t17 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Teori Sains Komputer</td>
                                <td>{{ $t18 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Keushawanan Teknologi Maklumat dan Seminar</td>
                                <td>{{ $t19 }}</td>
                            </tr>
                            <!-- <tr class="gradeX">
                                <td>Projek 1</td>
                                <td>{{ $t20 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Projek 2</td>
                                <td>{{ $t21 }}</td>
                            </tr> -->
                            <tr class="gradeX">
                                <td>Pengaturcaraan Pangkalan Data</td>
                                <td>{{ $t37 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kejuruteraan Keperluan dan Permodelan Perisian</td>
                                <td>{{ $t22 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pengurusan Projek Perisian</td>
                                <td>{{ $t23 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kepintaran Buatan</td>
                                <td>{{ $t24 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pembangunan Aplikasi</td>
                                <td>{{ $t25 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pengaturcaraan Internet</td>
                                <td>{{ $t26 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Jaminan Kualiti Perisian</td>
                                <td>{{ $t27 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Sistem Pakar Berasaskan Pengetahuan</td>
                                <td>{{ $t28 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Rekabentuk dan Senibina Perisian</td>
                                <td>{{ $t29 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kepintaran Komputer</td>
                                <td>{{ $t30 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Teknik Pengaturcaraan 3</td>
                                <td>{{ $t31 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Topik Khas dalam Kejuruteraan Perisian</td>
                                <td>{{ $t32 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Pembinaan Perisian</td>
                                <td>{{ $t33 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kejuruteraan Perisian Masa Nyata</td>
                                <td>{{ $t34 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Teknologi Web</td>
                                <td>{{ $t35 }}</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Kejuruteraan Perisian Berorentasikan Ejen</td>
                                <td>{{ $t36 }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
