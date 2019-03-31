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
                                <th></th>
                                <th>Subject name</th>
                                <th>No. of students</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($t1>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/teknologi-dan-sistem-maklumat')}}">Teknologi dan Sistem Maklumat</td>
                                <td style="text-align:center">{{ $t1 }}</td>
                            </tr>
                            @endif
                            @if($t2>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/struktur-diskrit')}}">Struktur diskrit</td>
                                <td style="text-align:center">{{ $t2 }}</td>
                            </tr>
                            @endif
                            @if($t3>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/teknik-pengaturcaraan-1')}}">Teknik Pengaturcaraan 1</td>
                                <td style="text-align:center">{{ $t3 }}</td>
                            </tr>
                            @endif
                            @if($t4>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/logik-digital')}}">Logik Digital</td>
                                <td style="text-align:center">{{ $t4 }}</td>
                            </tr>
                            @endif
                            @if($t5>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/matematik-pengkomputeran')}}">Matematik Pengkomputeran</td>
                                <td style="text-align:center">{{ $t5 }}</td>
                            </tr>
                            @endif
                            @if($t6>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/teknik-pengaturcaraan-2')}}">Teknik Pengaturcaraan 2</td>
                                <td style="text-align:center">{{ $t6 }}</td>
                            </tr>
                            @endif
                            @if($t7>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/komunikasi-rangkaian')}}">Komunikasi Rangkaian</td>
                                <td style="text-align:center"d>{{ $t7 }}</td>
                            </tr>
                            @endif
                            @if($t8>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/pengaturcaraan-web')}}">Pengaturcaraan Web</td>
                                <td style="text-align:center">{{ $t8 }}</td>
                            </tr>
                            @endif
                            @if($t9>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/pangkalan-data')}}">Pangkalan Data</td>
                                <td style="text-align:center">{{ $t9 }}</td>
                            </tr>
                            @endif
                            @if($t10>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/struktur-data-dan-algoritma')}}">Struktur Data dan Algoritma</td>
                                <td style="text-align:center">{{ $t10 }}</td>
                            </tr>
                            @endif
                            @if($t11>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/analisa-dan-rekabentuk-sistem')}}" target="_blank">Analisa dan Rekabentuk Sistem</td>
                                <td style="text-align:center">{{ $t11 }}</td>
                            </tr>
                            @endif
                            @if($t12>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td>a href="{{url('/admin/organisasi-senibina-komputer')}}">Organisasi Senibina Komputer</td>
                                <td style="text-align:center">{{ $t12 }}</td>
                            </tr>
                            @endif
                            @if($t13>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/interaksi-komputer-manusia')}}">Interaksi Komputer Manusia</td>
                                <td style="text-align:center">{{ $t13 }}</td>
                            </tr>
                            @endif
                            @if($t14>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/kebarangkalian-dan-analisa-data-statistik')}}">Kebarangkalian dan Analisa Data Statistik</td>
                                <td style="text-align:center">{{ $t14 }}</td>
                            </tr>
                            @endif
                            @if($t15>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/pengaturcaraan-berorientasikan-objek')}}">Pengaturcaraan Berorentasikan Objek</td>
                                <td style="text-align:center">{{ $t15 }}</td>
                            </tr>
                            @endif
                            @if($t16>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/kejuruteraan-perisian')}}">Kejuruteraan Perisian</td>
                                <td style="text-align:center">{{ $t16 }}</td>
                            </tr>
                            @endif
                            @if($t17>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/sistem-pengoperasian')}}">Sistem Pengoperasian</td>
                                <td style="text-align:center">{{ $t17 }}</td>
                            </tr>
                            @endif
                            @if($t18>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/teori-sains-komputer')}}">Teori Sains Komputer</td>
                                <td style="text-align:center">{{ $t18 }}</td>
                            </tr>
                            @endif
                            @if($t19>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/keushawanan-teknologi-maklumat-dan-seminar')}}">Keushawanan Teknologi Maklumat dan Seminar</td>
                                <td style="text-align:center">{{ $t19 }}</td>
                            </tr>
                            @endif
                            @if($t20>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/projek-1')}}">Projek 1</td>
                                <td style="text-align:center">{{ $t20 }}</td>
                            </tr>
                            @endif
                            @if($t21>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/projek-2')}}">Projek 2</td>
                                <td style="text-align:center">{{ $t21 }}</td>
                            </tr>
                            @endif
                            @if($t37>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/pengaturcaraan-pangkalan-data')}}">Pengaturcaraan Pangkalan Data</td>
                                <td style="text-align:center">{{ $t37 }}</td>
                            </tr>
                            @endif
                            @if($t22>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/kejuruteraan-keperluan-dan-permodelan-perisian')}}">Kejuruteraan Keperluan dan Permodelan Perisian</td>
                                <td style="text-align:center">{{ $t22 }}</td>
                            </tr>
                            @endif
                            @if($t23>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/pengurusan-projek-perisian')}}">Pengurusan Projek Perisian</td>
                                <td style="text-align:center">{{ $t23 }}</td>
                            </tr>
                            @endif
                            @if($t24>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/kepintaran-buatan')}}">Kepintaran Buatan</td>
                                <td style="text-align:center">{{ $t24 }}</td>
                            </tr>
                            @endif
                            @if($t25>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/pembangunan-aplikasi')}}">Pembangunan Aplikasi</td>
                                <td style="text-align:center">{{ $t25 }}</td>
                            </tr>
                            @endif
                            @if($t26>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/pengaturcaraan-internet')}}">Pengaturcaraan Internet</td>
                                <td style="text-align:center">{{ $t26 }}</td>
                            </tr>
                            @endif
                            @if($t27>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/jaminan-kualiti-perisian')}}">Jaminan Kualiti Perisian</td>
                                <td style="text-align:center">{{ $t27 }}</td>
                            </tr>
                            @endif
                            @if($t28>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/sistem-pakar-berasaskan-pengetahuan')}}">Sistem Pakar Berasaskan Pengetahuan</td>
                                <td style="text-align:center">{{ $t28 }}</td>
                            </tr>
                            @endif
                            @if($t29>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/rekabentuk-dan-senibina-perisian')}}">Rekabentuk dan Senibina Perisian</td>
                                <td style="text-align:center">{{ $t29 }}</td>
                            </tr>
                            @endif
                            @if($t30>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/kepintaran-komputer')}}">Kepintaran Komputer</td>
                                <td style="text-align:center">{{ $t30 }}</td>
                            </tr>
                            @endif
                            @if($t31>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/teknik-pengaturcaraan-3')}}">Teknik Pengaturcaraan 3</td>
                                <td style="text-align:center">{{ $t31 }}</td>
                            </tr>
                            @endif
                            @if($t32>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/topik-khas-dalam-kejuruteraan-perisian')}}">Topik Khas dalam Kejuruteraan Perisian</td>
                                <td style="text-align:center">{{ $t32 }}</td>
                            </tr>
                            @endif
                            @if($t33>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/pembinaan-perisian')}}">Pembinaan Perisian</td>
                                <td style="text-align:center">{{ $t33 }}</td>
                            </tr>
                            @endif
                            @if($t34>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/kejuruteraan-perisian-masa-nyata')}}">Kejuruteraan Perisian Masa Nyata</td>
                                <td style="text-align:center">{{ $t34 }}</td>
                            </tr>
                            @endif
                            @if($t35>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/teknologi-web')}}">Teknologi Web</td>
                                <td style="text-align:center">{{ $t35 }}</td>
                            </tr>
                            @endif
                            @if($t36>0)
                            <tr class="gradeX">
                                <td><input type="checkbox" name="radios" /></td>
                                <td><a href="{{url('/admin/kejuruteraan-perisian-berorientasikan-ejen')}}">Kejuruteraan Perisian Berorentasikan Ejen</td>
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
