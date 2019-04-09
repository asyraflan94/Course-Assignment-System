@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="" class="current">Final Year Student list</a> </div>
            <h1>Final Year List of Software Engineering (SCSJ)</h1>
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
                                <th>No.</th>
                                <th>Name</th>
                                <th>Subjects</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($finalyear_students as $index => $fy)
                            <tr class="gradeX">
                                <td style="text-align:center">{{ $index +1 }}</td>
                                <td>{{$fy->student_name}}</td>
                                <td>
                                    @if ($fy->S1=='1')
                                        <button class="btn btn-mini">S1</button>
                                    @endif
                                    @if ($fy->S2=='1')
                                        <button class="btn btn-mini">S2</button>
                                    @endif
                                    @if ($fy->S3=='1')
                                        <button class="btn btn-mini">S3</button>
                                    @endif
                                    @if ($fy->S4=='1')
                                        <button class="btn btn-mini">S4</button>
                                    @endif
                                    @if ($fy->S5=='1')
                                        <button class="btn btn-mini">S5</button>
                                    @endif
                                    @if ($fy->S6=='1')
                                        <button class="btn btn-mini">S6</button>
                                    @endif
                                    @if ($fy->S7=='1')
                                        <button class="btn btn-mini">S7</button>
                                    @endif
                                    @if ($fy->S8=='1')
                                        <button class="btn btn-mini">S8</button>
                                    @endif
                                    @if ($fy->S9=='1')
                                        <button class="btn btn-mini">S9</button>
                                    @endif
                                    @if ($fy->S10=='1')
                                        <button class="btn btn-mini">S10</button>
                                    @endif

                                    @if ($fy->S11=='1')
                                        <button class="btn btn-mini">S11</button>
                                    @endif
                                    @if ($fy->S12=='1')
                                        <button class="btn btn-mini">S12</button>
                                    @endif
                                    @if ($fy->S13=='1')
                                        <button class="btn btn-mini">S13</button>
                                    @endif
                                    @if ($fy->S14=='1')
                                        <button class="btn btn-mini">S14</button>
                                    @endif

                                    @if ($fy->S15=='1')
                                        <button class="btn btn-mini">S15</button>
                                    @endif
                                    @if ($fy->S16=='1')
                                        <button class="btn btn-mini">S16</button>
                                    @endif
                                    @if ($fy->S17=='1')
                                        <button class="btn btn-mini">S17</button>
                                    @endif
                                    @if ($fy->S18=='1')
                                        <button class="btn btn-mini">S18</button>
                                    @endif
                                    @if ($fy->S19=='1')
                                        <button class="btn btn-mini">S19</button>
                                    @endif
                                    @if ($fy->S20=='1')
                                        <button class="btn btn-mini">S20</button>
                                    @endif

                                    @if ($fy->S21=='1')
                                        <button class="btn btn-mini">S21</button>
                                    @endif
                                    @if ($fy->S22_E1=='1')
                                        <button class="btn btn-mini">S22_E1</button>
                                    @endif
                                    @if ($fy->S23_E1=='1')
                                        <button class="btn btn-mini">S23_E1</button>
                                    @endif
                                    @if ($fy->S24_E1=='1')
                                        <button class="btn btn-mini">S24_E1</button>
                                    @endif
                                    @if ($fy->S25_E2=='1')
                                        <button class="btn btn-mini">S25_E2</button>
                                    @endif
                                    @if ($fy->S26_E2=='1')
                                        <button class="btn btn-mini">S26_E2</button>
                                    @endif
                                    @if ($fy->S27_E2=='1')
                                        <button class="btn btn-mini">S27_E2</button>
                                    @endif
                                    @if ($fy->S28_E2=='1')
                                        <button class="btn btn-mini">S28_E2</button>
                                    @endif
                                    @if ($fy->S29_E2=='1')
                                        <button class="btn btn-mini">S29_E2</button>
                                    @endif
                                    @if ($fy->S30_E3=='1')
                                        <button class="btn btn-mini">S30_E3</button>
                                    @endif
                                    @if ($fy->S31_E3=='1')
                                        <button class="btn btn-mini">S31_E3</button>
                                    @endif
                                    @if ($fy->S31_E3=='1')
                                        <button class="btn btn-mini">S31_E3</button>
                                    @endif
                                    @if ($fy->S32_E3=='1')
                                        <button class="btn btn-mini">S32_E3</button>
                                    @endif
                                    @if ($fy->S33_E3=='1')
                                        <button class="btn btn-mini">S33_E3</button>
                                    @endif
                                    @if ($fy->S34_E4=='1')
                                        <button class="btn btn-mini">S34_E4</button>
                                    @endif
                                    @if ($fy->S35_E4=='1')
                                        <button class="btn btn-mini">S35_E4</button>
                                    @endif
                                    @if ($fy->S36_E4=='1')
                                        <button class="btn btn-mini">S36_E4</button>
                                    @endif
                                    @if ($fy->S37_E4=='1')
                                        <button class="btn btn-mini">S37_E4</button>
                                    @endif


                                </td>
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
