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
                                <td>S1</td>
                                <td>S2</td>
                                <td>S3</td>
                                <td>S4</td>
                                <td>S5</td>
                                <td>S6</td>
                                <td>S7</td>
                                <td>S8</td>
                                <td>S9</td>
                                <td>S10</td>
                                <td>S11</td>
                                <td>S12</td>
                                <td>S13</td>
                                <td>S14</td>
                                <td>S15</td>
                                <td>S16</td>
                                <td>S17</td>
                                <td>S18</td>
                                <td>S19</td>
                                <td>S20</td>
                                <td>S21</td>
                                <td>S22_E1</td>
                                <td>S23_E1</td>
                                <td>S24_E1</td>
                                <td>S25_E2</td>
                                <td>S26_E2</td>
                                <td>S27_E2</td>
                                <td>S28_E2</td>
                                <td>S29_E2</td>
                                <td>S30_E3</td>
                                <td>S31_E3</td>
                                <td>S32_E3</td>
                                <td>S33_E3</td>
                                <td>S34_E4</td>
                                <td>S35_E4</td>
                                <td>S36_E4</td>
                                <td>S37_E4</td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vars as $var)
                            <tr class="gradeX">
                                <td>{{$var->student_name}}</td>
                                <td>{{$var->total_subject_left}}</td> 
                                <td>{{$var->S1}}</td>
                                <td>{{$var->S2}}</td>
                                <td>{{$var->S3}}</td>
                                <td>{{$var->S4}}</td>
                                <td>{{$var->S5}}</td>
                                <td>{{$var->S6}}</td>
                                <td>{{$var->S7}}</td>
                                <td>{{$var->S8}}</td>
                                <td>{{$var->S9}}</td>
                                <td>{{$var->S10}}</td>
                                <td>{{$var->S11}}</td>
                                <td>{{$var->S12}}</td>
                                <td>{{$var->S13}}</td>
                                <td>{{$var->S14}}</td>
                                <td>{{$var->S15}}</td>
                                <td>{{$var->S16}}</td>
                                <td>{{$var->S17}}</td>
                                <td>{{$var->S18}}</td>
                                <td>{{$var->S19}}</td>
                                <td>{{$var->S20}}</td>
                                <td>{{$var->S21}}</td>
                                <td>{{$var->S22_E1}}</td>
                                <td>{{$var->S23_E1}}</td>
                                <td>{{$var->S24_E1}}</td>
                                <td>{{$var->S25_E2}}</td>
                                <td>{{$var->S26_E2}}</td>
                                <td>{{$var->S27_E2}}</td>
                                <td>{{$var->S28_E2}}</td>
                                <td>{{$var->S29_E2}}</td>
                                <td>{{$var->S30_E3}}</td>
                                <td>{{$var->S31_E3}}</td>
                                <td>{{$var->S32_E3}}</td>
                                <td>{{$var->S33_E3}}</td>
                                <td>{{$var->S34_E4}}</td>
                                <td>{{$var->S35_E4}}</td>
                                <td>{{$var->S36_E4}}</td>
                                <td>{{$var->S37_E4}}</td>
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
