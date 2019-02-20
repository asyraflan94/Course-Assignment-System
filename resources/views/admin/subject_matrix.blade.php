@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="" class="current">Matrix Table</a> </div>
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
                                <th>Name</th>
                                <th>Total subject left</th>
                                <th>S1</th>
                                <th>S2</th>
                                <th>S3</th>
                                <th>S4</th>
                                <th>S5</th>
                                <th>S6</th>
                                <th>S7</th>
                                <th>S8</th>
                                <th>S9</th>
                                <th>S10</th>
                                <th>S11</th>
                                <th>S12</th>
                                <th>S13</th>
                                <th>S14</th>
                                <th>S15</th>
                                <th>S16</th>
                                <th>S17</th>
                                <th>S18</th>
                                <th>S19</th>
                                <th>S20</th>
                                <th>S21</th>
                                <th>S22</th>
                                <th>S23</th>
                                <th>S24</th>
                                <th>S25</th>
                                <th>S26</th>
                                <th>S27</th>
                                <th>S28</th>
                                <th>S29</th>
                                <th>S30</th>
                                <th>S31</th>
                                <th>S32</th>
                                <th>S33</th>
                                <th>S34</th>
                                <th>S35</th>
                                <th>S36</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vars as $var)
                            <tr class="gradeX">
                                <td>{{$var->student_name}}</td>
                                <td>{{$var->total_subject_left}}</td> 
                                <td>{{$var->teknologi_dan_sistem_maklumat}}</td>
                                <td>{{$var->struktur_diskrit}}</td>
                                <td>{{$var->teknik_pengaturcaraan_1}}</td>
                                <td>{{$var->logik_digital}}</td>
                                <td>{{$var->matematik_pengkomputeran}}</td>
                                <td>{{$var->teknik_pengaturcaraan_2}}</td>
                                <td>{{$var->komunikasi_rangkaian}}</td>
                                <td>{{$var->pengaturcaraan_web}}</td>
                                <td>{{$var->pangkalan_data}}</td>
                                <td>{{$var->struktur_data_dan_algoritma}}</td>
                                <td>{{$var->analisa_dan_rekabentuk_sistem}}</td>
                                <td>{{$var->organisasi_dan_senibina_komputer}}</td>
                                <td>{{$var->interaksi_komputer_manusia}}</td>
                                <td>{{$var->kebarangkalian_dan_analisa_data_statistik}}</td>
                                <td>{{$var->pengaturcaraan_berorentasikan_objek}}</td>
                                <td>{{$var->kejuruteraan_perisian}}</td>
                                <td>{{$var->sistem_pengoperasian}}</td>
                                <td>{{$var->teori_sains_komputer}}</td>
                                <td>{{$var->keushawanan_teknologi_maklumat_dan_seminar}}</td>
                                <td>{{$var->projek_1}}</td>
                                <td>{{$var->projek_2}}</td>
                                <td>{{$var->kejuruteraan_keperluan_dan_permodelan_perisian}}</td>
                                <td>{{$var->pengurusan_projek_perisian}}</td>
                                <td>{{$var->kepintaran_buatan}}</td>
                                <td>{{$var->pembangunan_aplikasi}}</td>
                                <td>{{$var->pengaturcaraan_internet}}</td>
                                <td>{{$var->jaminan_kualiti_perisian}}</td>
                                <td>{{$var->sistem_pakar_berasaskan_pengetahuan}}</td>
                                <td>{{$var->rekabentuk_dan_senibina_perisian}}</td>
                                <td>{{$var->kepintaran_komputer}}</td>
                                <td>{{$var->teknik_pengaturcaraan_3}}</td>
                                <td>{{$var->topik_khas_dalam_kejuruteraan_perisian}}</td>
                                <td>{{$var->pembinaan_perisian}}</td>
                                <td>{{$var->kejuruteraan_perisian_masa_nyata}}</td>
                                <td>{{$var->teknologi_web}}</td>
                                <td>{{$var->kejuruteraan_perisian_berorentasikan_ejen}}</td>
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
