@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="" class="current">List of subjects</a> </div>
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
                                <th>NAME</th>
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
                            @foreach ($subject as $subjects)
                            <tr class="gradeX">
                                <td>{{$subjects->student_name}}</td>
                                <td>{{$subjects->teknologi_dan_sistem_maklumat}}</td>
                                <td>{{$subjects->struktur_diskrit}}</td>
                                <td>{{$subjects->teknik_pengaturcaraan_1}}</td>
                                <td>{{$subjects->logik_digital}}</td>
                                <td>{{$subjects->matematik_pengkomputeran}}</td>
                                <td>{{$subjects->teknik_pengaturcaraan_2}}</td>
                                <td>{{$subjects->komunikasi_rangkaian}}</td>
                                <td>{{$subjects->pengaturcaraan_web}}</td>
                                <td>{{$subjects->pangkalan_data}}</td>
                                <td>{{$subjects->struktur_data_dan_algoritma}}</td>
                                <td>{{$subjects->analisa_dan_rekabentuk_sistem}}</td>
                                <td>{{$subjects->organisasi_dan_senibina_komputer}}</td>
                                <td>{{$subjects->interaksi_komputer_manusia}}</td>
                                <td>{{$subjects->kebarangkalian_dan_analisa_data_statistik}}</td>
                                <td>{{$subjects->pengaturcaraan_berorentasikan_objek}}</td>
                                <td>{{$subjects->kejuruteraan_perisian}}</td>
                                <td>{{$subjects->sistem_pengoperasian}}</td>
                                <td>{{$subjects->teori_sains_komputer}}</td>
                                <td>{{$subjects->keushawanan_teknologi_maklumat_dan_seminar}}</td>
                                <td>{{$subjects->projek_1}}</td>
                                <td>{{$subjects->projek_2}}</td>
                                <td>{{$subjects->kejuruteraan_keperluan_dan_permodelan_perisian}}</td>
                                <td>{{$subjects->pengurusan_projek_perisian}}</td>
                                <td>{{$subjects->kepintaran_buatan}}</td>
                                <td>{{$subjects->pembangunan_aplikasi}}</td>
                                <td>{{$subjects->pengaturcaraan_internet}}</td>
                                <td>{{$subjects->jaminan_kualiti_perisian}}</td>
                                <td>{{$subjects->sistem_pakar_berasaskan_pengetahuan}}</td>
                                <td>{{$subjects->rekabentuk_dan_senibina_perisian}}</td>
                                <td>{{$subjects->kepintaran_komputer}}</td>
                                <td>{{$subjects->teknik_pengaturcaraan_3}}</td>
                                <td>{{$subjects->topik_khas_dalam_kejuruteraan_perisian}}</td>
                                <td>{{$subjects->pembinaan_perisian}}</td>
                                <td>{{$subjects->kejuruteraan_perisian_masa_nyata}}</td>
                                <td>{{$subjects->teknologi_web}}</td>
                                <td>{{$subjects->kejuruteraan_perisian_berorentasikan_ejen}}</td>
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
