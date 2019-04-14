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
                                        <button class="btn btn-mini" title="Technology & Information System">SCSD1513</button>
                                    @endif

                                    @if ($rows->S2=='1')
                                        <button class="btn btn-mini" title="Discrete Structure">SCSI1013</button>
                                    @endif

                                    @if ($rows->S3=='1')
                                        <button class="btn btn-mini" title="Programming Technique 1">SCSJ1013</button>
                                    @endif

                                    @if ($rows->S4=='1')
                                        <button class="btn btn-mini" title="Digital Logic">SCSR1013</button>
                                    @endif

                                    @if ($rows->S5=='1')
                                        <button class="btn btn-mini" title="Computational Mathematics">SCSI1113</button>
                                    @endif

                                    @if ($rows->S6=='1')
                                        <button class="btn btn-mini" title="Programming Technique 2">SCSJ1023</button>
                                    @endif

                                    @if ($rows->S7=='1')
                                        <button class="btn btn-mini" title="Network Communications">SCSR1213</button>
                                    @endif

                                    @if ($rows->S8=='1')
                                        <button class="btn btn-mini" title="Web Programming">SCSV1223</button>
                                    @endif

                                    @if ($rows->S9=='1')
                                        <button class="btn btn-mini" title="Database">SCSD2523</button>
                                    @endif

                                    @if ($rows->S10=='1')
                                        <button class="btn btn-mini" title="Data Structure & Algorithm">SCSJ2013</button>
                                    @endif

                                    @if ($rows->S11=='1')
                                        <button class="btn btn-mini" title="System Analysis and Design">SCSD2613</button>
                                    @endif

                                    @if ($rows->S12=='1')
                                        <button class="btn btn-mini" title="Computer Organisation and Architecture">SCSR2033</button>
                                    @endif

                                    @if ($rows->S13=='1')
                                        <button class="btn btn-mini" title="Human Computer Interaction">SCSV2113</button>
                                    @endif

                                    @if ($rows->S14=='1')
                                        <button class="btn btn-mini" title="Probability & Statistical Data Analysis">SCSI2143</button>
                                    @endif

                                    @if ($rows->S15=='1')
                                        <button class="btn btn-mini" title="Object Oriented Programming">SCSJ2154</button>
                                    @endif

                                    @if ($rows->S16=='1')
                                        <button class="btn btn-mini" title="Software Engineering">SCSJ2203</button>
                                    @endif

                                    @if ($rows->S17=='1')
                                        <button class="btn btn-mini" title="Operating System">SCSR2043</button>
                                    @endif

                                    @if ($rows->S18=='1')
                                        <button class="btn btn-mini" title="Theory of Computer Science">SCSJ3203</button>
                                    @endif

                                    @if ($rows->S19=='1')
                                        <button class="btn btn-mini" title="Technopreneurship and Seminar">UCSD2762</button>
                                    @endif

                                    @if ($rows->S20=='1' && $rows->S21=='1')
                                        <button class="btn btn-mini" title="Software Engineering Project 1">SCSJ3032</button>
                                    @elseif ($rows->S20=='0' && $rows->S21=='1')
                                        <button class="btn btn-mini" title="Software Engineering Project 2">SCSJ4134</button>
                                    @endif

                                    @if ($rows->S22_E1=='1')
                                        <button class="btn btn-mini" title="Pengaturcaraan Pangkalan Data">SCSD2623</button>
                                    @endif

                                    @if (($rows->S23_E1=='1'  && $rows->S24_E1=='1') && ($rows->S24_E1+$rows->S23_E1 > '1'))
                                        <button class="btn btn-mini" title="Requirement Engineering & Software Modelling">SCSJ2253</button>
                                    @endif

                                    @if (($rows->S25_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        @if ($rows->S25_E2+$rows->S26_E2=='2')
                                            <button class="btn btn-mini" title="Artificial Intelligent">SCSJ3553</button>
                                        @endif
                                    @endif

                                    @if (($rows->S26_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        @if ($rows->S26_E2+$rows->S27_E2=='2')
                                            <button class="btn btn-mini" title="Application Development">SCSJ3104</button>
                                        @endif
                                    @endif

                                    @if (($rows->S27_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        @if ($rows->S27_E2+$rows->S28_E2=='2')
                                            <button class="btn btn-mini" title="Internet Programming">SCSJ3303</button>
                                        @endif
                                    @endif

                                    @if (($rows->S28_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        @if ($rows->S28_E2+$rows->S29_E2)
                                            <button class="btn btn-mini" title="Software Quality Assurance">SCSJ3343</button>
                                        @endif
                                    @endif

                                    @if (($rows->S29_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        @if ($rows->S29_E2+$rows->S25_E2)
                                            <button class="btn btn-mini" title="Knowledge-Based & Expert System">SCSJ3603</button>
                                        @endif
                                    @endif

                                    @if (($rows->S30_E3=='1')  && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1'))
                                        @if ($rows->S30_E3+$rows->S31_E3 =='2')
                                            <button class="btn btn-mini" title="Software Design & Architecture">SCSJ3323</button>
                                        @endif
                                    @endif

                                    @if (($rows->S31_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1'))
                                        @if ($rows->S31_E3+$rows->S32_E3 =='2')
                                            <button class="btn btn-mini" title="Computer Intelligence">SCSJ3563</button>
                                        @endif
                                    @endif

                                    @if (($rows->S32_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1'))
                                        @if ($rows->S32_E3+$rows->S33_E3 =='2')
                                            <button class="btn btn-mini" title="Programming Technique 3">SCSJ3253</button>
                                        @endif
                                    @endif

                                    @if (($rows->S33_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1'))
                                        @if ($rows->S33_E3+$rows->S30_E3 =='2')
                                            <button class="btn btn-mini" title="Special Topic in Software Engineering">SCSJ3403</button>
                                        @endif
                                    @endif

                                    @if(($rows->S34_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1'))
                                        @if ($rows->S34_E4+$rows->S35_E4=='2')
                                            <button class="btn btn-mini" title="Software Construction">SCSJ4383</button>
                                        @endif
                                    @endif

                                    @if (($rows->S35_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1'))
                                        @if ($rows->S35_E4+$rows->S36_E4=='2')
                                            <button class="btn btn-mini" title="Real-Time Software Engineering">SCSJ4423</button>
                                        @endif
                                    @endif

                                    @if (($rows->S36_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1'))
                                        @if ($rows->S36_E4+$rows->S37_E4=='2')
                                            <button class="btn btn-mini" title="Web Technology">SCSJ4483</button>
                                        @endif
                                    @endif

                                    @if (($rows->S37_E4=='1')  && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1'))
                                        @if ($rows->S37_E4+$rows->S34_E4=='2')
                                            <button class="btn btn-mini" title="Agent-Oriented Software Engineering">SCSJ4463</button>
                                        @endif
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
