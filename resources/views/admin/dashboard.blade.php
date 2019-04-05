@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
      <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a></div>
      </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
      <div class="container-fluid">
        <div class="quick-actions_homepage">
          <ul class="quick-actions">
            <li class="bg_lg span3"> <a href="{{url('/admin/scsj')}}"> <i class="icon-group"></i>Software Engineering</a></li>
            <li class="bg_ly span3"> <a href="{{url('/admin/scsr')}}"> <i class="icon-group"></i>Computer Network</a></li>
            <li class="bg_lo span3"> <a href="{{url('/admin/scsv')}}"> <i class="icon-group"></i>Computer Graphic</a></li>
          </ul>
        </div>
    <!--End-Action boxes-->

    <div class="row-fluid">
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>Final Year Subject List</h5>
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
                            @if($t1>0)
                            <tr class="gradeX">
                                <td><a href="{{url('/admin/teknologi-dan-sistem-maklumat')}}" target="_blank">Teknologi dan Sistem Maklumat</td>
                                <td style="text-align:center">{{ $t1 }}</td>
                            </tr>
                            @endif
                            @if($t2>0)
                            <tr class="gradeX">
                                <td><a href="{{url('/admin/struktur-diskrit')}}" target="_blank">Struktur diskrit</td>
                                <td style="text-align:center">{{ $t2 }}</td>
                            </tr>
                            @endif
                            @if($t3>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/teknik-pengaturcaraan-1')}}" target="_blank">Teknik Pengaturcaraan 1</td>
                                <td style="text-align:center">{{ $t3 }}</td>
                            </tr>
                            @endif
                            @if($t4>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/logik-digital')}}" target="_blank">Logik Digital</td>
                                <td style="text-align:center">{{ $t4 }}</td>
                            </tr>
                            @endif
                            @if($t5>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/matematik-pengkomputeran')}}" target="_blank">Matematik Pengkomputeran</td>
                                <td style="text-align:center">{{ $t5 }}</td>
                            </tr>
                            @endif
                            @if($t6>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/teknik-pengaturcaraan-2')}}" target="_blank">Teknik Pengaturcaraan 2</td>
                                <td style="text-align:center">{{ $t6 }}</td>
                            </tr>
                            @endif
                            @if($t7>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/komunikasi-rangkaian')}}" target="_blank">Komunikasi Rangkaian</td>
                                <td style="text-align:center"d>{{ $t7 }}</td>
                            </tr>
                            @endif
                            @if($t8>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/pengaturcaraan-web')}}" target="_blank">Pengaturcaraan Web</td>
                                <td style="text-align:center">{{ $t8 }}</td>
                            </tr>
                            @endif
                            @if($t9>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/pangkalan-data')}}" target="_blank">Pangkalan Data</td>
                                <td style="text-align:center">{{ $t9 }}</td>
                            </tr>
                            @endif
                            @if($t10>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/struktur-data-dan-algoritma')}}" target="_blank">Struktur Data dan Algoritma</td>
                                <td style="text-align:center">{{ $t10 }}</td>
                            </tr>
                            @endif
                            @if($t11>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/analisa-dan-rekabentuk-sistem')}}" target="_blank">Analisa dan Rekabentuk Sistem</td>
                                <td style="text-align:center">{{ $t11 }}</td>
                            </tr>
                            @endif
                            @if($t12>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/organisasi-senibina-komputer')}}" target="_blank">Organisasi Senibina Komputer</td>
                                <td style="text-align:center">{{ $t12 }}</td>
                            </tr>
                            @endif
                            @if($t13>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/interaksi-komputer-manusia')}}" target="_blank">Interaksi Komputer Manusia</td>
                                <td style="text-align:center">{{ $t13 }}</td>
                            </tr>
                            @endif
                            @if($t14>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/kebarangkalian-dan-analisa-data-statistik')}}" target="_blank">Kebarangkalian dan Analisa Data Statistik</td>
                                <td style="text-align:center">{{ $t14 }}</td>
                            </tr>
                            @endif
                            @if($t15>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/pengaturcaraan-berorientasikan-objek')}}" target="_blank">Pengaturcaraan Berorentasikan Objek</td>
                                <td style="text-align:center">{{ $t15 }}</td>
                            </tr>
                            @endif
                            @if($t16>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/kejuruteraan-perisian')}}" target="_blank">Kejuruteraan Perisian</td>
                                <td style="text-align:center">{{ $t16 }}</td>
                            </tr>
                            @endif
                            @if($t17>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/sistem-pengoperasian')}}" target="_blank">Sistem Pengoperasian</td>
                                <td style="text-align:center">{{ $t17 }}</td>
                            </tr>
                            @endif
                            @if($t18>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/teori-sains-komputer')}}" target="_blank">Teori Sains Komputer</td>
                                <td style="text-align:center">{{ $t18 }}</td>
                            </tr>
                            @endif
                            @if($t19>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/keushawanan-teknologi-maklumat-dan-seminar')}}" target="_blank">Keushawanan Teknologi Maklumat dan Seminar</td>
                                <td style="text-align:center">{{ $t19 }}</td>
                            </tr>
                            @endif
                            @if($t20>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/projek-1')}}" target="_blank">Projek 1</td>
                                <td style="text-align:center">{{ $t20 }}</td>
                            </tr>
                            @endif
                            @if($t21>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/projek-2')}}" target="_blank">Projek 2</td>
                                <td style="text-align:center">{{ $t21 }}</td>
                            </tr>
                            @endif
                            @if($t37>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/pengaturcaraan-pangkalan-data')}}" target="_blank">Pengaturcaraan Pangkalan Data</td>
                                <td style="text-align:center">{{ $t37 }}</td>
                            </tr>
                            @endif
                            @if($t22>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/kejuruteraan-keperluan-dan-permodelan-perisian')}}" target="_blank">Kejuruteraan Keperluan dan Permodelan Perisian</td>
                                <td style="text-align:center">{{ $t22 }}</td>
                            </tr>
                            @endif
                            @if($t23>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/pengurusan-projek-perisian')}}" target="_blank">Pengurusan Projek Perisian</td>
                                <td style="text-align:center">{{ $t23 }}</td>
                            </tr>
                            @endif
                            @if($t24>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/kepintaran-buatan')}}" target="_blank">Kepintaran Buatan</td>
                                <td style="text-align:center">{{ $t24 }}</td>
                            </tr>
                            @endif
                            @if($t25>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/pembangunan-aplikasi')}}" target="_blank">Pembangunan Aplikasi</td>
                                <td style="text-align:center">{{ $t25 }}</td>
                            </tr>
                            @endif
                            @if($t26>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/pengaturcaraan-internet')}}" target="_blank">Pengaturcaraan Internet</td>
                                <td style="text-align:center">{{ $t26 }}</td>
                            </tr>
                            @endif
                            @if($t27>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/jaminan-kualiti-perisian')}}" target="_blank">Jaminan Kualiti Perisian</td>
                                <td style="text-align:center">{{ $t27 }}</td>
                            </tr>
                            @endif
                            @if($t28>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/sistem-pakar-berasaskan-pengetahuan')}}" target="_blank">Sistem Pakar Berasaskan Pengetahuan</td>
                                <td style="text-align:center">{{ $t28 }}</td>
                            </tr>
                            @endif
                            @if($t29>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/rekabentuk-dan-senibina-perisian')}}" target="_blank">Rekabentuk dan Senibina Perisian</td>
                                <td style="text-align:center">{{ $t29 }}</td>
                            </tr>
                            @endif
                            @if($t30>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/kepintaran-komputer')}}" target="_blank">Kepintaran Komputer</td>
                                <td style="text-align:center">{{ $t30 }}</td>
                            </tr>
                            @endif
                            @if($t31>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/teknik-pengaturcaraan-3')}}" target="_blank">Teknik Pengaturcaraan 3</td>
                                <td style="text-align:center">{{ $t31 }}</td>
                            </tr>
                            @endif
                            @if($t32>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/topik-khas-dalam-kejuruteraan-perisian')}}" target="_blank">Topik Khas dalam Kejuruteraan Perisian</td>
                                <td style="text-align:center">{{ $t32 }}</td>
                            </tr>
                            @endif
                            @if($t33>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/pembinaan-perisian')}}" target="_blank">Pembinaan Perisian</td>
                                <td style="text-align:center">{{ $t33 }}</td>
                            </tr>
                            @endif
                            @if($t34>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/kejuruteraan-perisian-masa-nyata')}}" target="_blank">Kejuruteraan Perisian Masa Nyata</td>
                                <td style="text-align:center">{{ $t34 }}</td>
                            </tr>
                            @endif
                            @if($t35>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/teknologi-web')}}" target="_blank">Teknologi Web</td>
                                <td style="text-align:center">{{ $t35 }}</td>
                            </tr>
                            @endif
                            @if($t36>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/kejuruteraan-perisian-berorientasikan-ejen')}}" target="_blank">Kejuruteraan Perisian Berorentasikan Ejen</td>
                                <td style="text-align:center">{{ $t36 }}</td>
                            </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--end-main-container-part-->

@endsection
