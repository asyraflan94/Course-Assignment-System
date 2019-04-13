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
                            @foreach ($finalyear_students as $index => $rows)
                            <tr class="gradeX">
                                <td style="text-align:center">{{ $index +1 }}</td>
                                <td>{{$rows->student_name}}</td>
                                <td>
                                    @if ($rows->S1=='1')
                                        <button class="btn btn-mini">S1</button>
                                    @endif

                                    @if ($rows->S2=='1')
                                        <button class="btn btn-mini">S2</button>
                                    @endif

                                    @if ($rows->S3=='1')
                                        <button class="btn btn-mini">S3</button>
                                    @endif

                                    @if ($rows->S4=='1')
                                        <button class="btn btn-mini">S4</button>
                                    @endif

                                    @if ($rows->S5=='1')
                                        <button class="btn btn-mini">S5</button>
                                    @endif

                                    @if ($rows->S6=='1')
                                        <button class="btn btn-mini">S6</button>
                                    @endif

                                    @if ($rows->S7=='1')
                                        <button class="btn btn-mini">S7</button>
                                    @endif

                                    @if ($rows->S8=='1')
                                        <button class="btn btn-mini">S8</button>
                                    @endif

                                    @if ($rows->S9=='1')
                                        <button class="btn btn-mini">S9</button>
                                    @endif

                                    @if ($rows->S10=='1')
                                        <button class="btn btn-mini">S10</button>
                                    @endif

                                    @if ($rows->S11=='1')
                                        <button class="btn btn-mini">S11</button>
                                    @endif

                                    @if ($rows->S12=='1')
                                        <button class="btn btn-mini">S12</button>
                                    @endif

                                    @if ($rows->S13=='1')
                                        <button class="btn btn-mini">S13</button>
                                    @endif

                                    @if ($rows->S14=='1')
                                        <button class="btn btn-mini">S14</button>
                                    @endif

                                    @if ($rows->S15=='1')
                                        <button class="btn btn-mini">S15</button>
                                    @endif

                                    @if ($rows->S16=='1')
                                        <button class="btn btn-mini">S16</button>
                                    @endif

                                    @if ($rows->S17=='1')
                                        <button class="btn btn-mini">S17</button>
                                    @endif

                                    @if ($rows->S18=='1')
                                        <button class="btn btn-mini">S18</button>
                                    @endif

                                    @if ($rows->S19=='1')
                                        <button class="btn btn-mini">S19</button>
                                    @endif

                                    @if ($rows->S20=='1' && $rows->S21=='1')
                                        <button class="btn btn-mini">S20</button>
                                    @elseif ($rows->S20=='0' && $rows->S21=='1')
                                        <button class="btn btn-mini">S21</button>
                                    @endif

                                    @if ($rows->S22_E1=='1')
                                        <button class="btn btn-mini">S22_E1</button>
                                    @endif

                                    @if (($rows->S23_E1=='1'  && $rows->S24_E1=='1') && ($rows->S24_E1+$rows->S23_E1 > '1'))
                                        <button class="btn btn-mini">S23_E1</button>
                                    @endif

                                    @if (($rows->S25_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        <button class="btn btn-mini">S25_E2</button>
                                    @endif

                                    @if (($rows->S26_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        <button class="btn btn-mini">S26_E2</button>
                                    @endif

                                    @if (($rows->S27_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        <button class="btn btn-mini">S27_E2</button>
                                    @endif

                                    @if (($rows->S28_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        <button class="btn btn-mini">S28_E2</button>
                                    @endif

                                    @if (($rows->S29_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        <button class="btn btn-mini">S29_E2</button>
                                    @endif

                                    @if (($rows->S30_E3=='1')  && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1'))
                                        @if ($rows->S30_E3+$rows->S31_E3 =='2')
                                            <button class="btn btn-mini">S30_E3</button>
                                        @endif
                                    @endif

                                    @if (($rows->S31_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1'))
                                        @if ($rows->S31_E3+$rows->S32_E3 =='2')
                                            <button class="btn btn-mini">S31_E3</button>
                                        @endif
                                    @endif

                                    @if (($rows->S32_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1'))
                                        @if ($rows->S32_E3+$rows->S33_E3 =='2')
                                            <button class="btn btn-mini">S32_E3</button>
                                        @endif
                                    @endif

                                    @if (($rows->S33_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1'))
                                        <button class="btn btn-mini">S33_E3</button>
                                    @endif

                                    @if(($rows->S34_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1'))
                                        <button class="btn btn-mini">S34_E4</button>
                                    @endif

                                    @if (($rows->S35_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1'))
                                        <button class="btn btn-mini">S35_E4</button>
                                    @endif

                                    @if (($rows->S36_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1'))
                                        <button class="btn btn-mini">S36_E4</button>
                                    @endif

                                    @if (($rows->S37_E4=='1')  && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1'))
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
