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
                                        @if (App\TemporarySubject::where('subject_name','S1')->exists())
                                            <button class="btn btn-danger btn-mini" title="Technology & Information System">SCSD1513(S1)</button>
                                        @else
                                            <button class="btn btn-mini" title="Technology & Information System">SCSD1513(S1)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S2=='1')
                                        @if (App\TemporarySubject::where('subject_name','S2')->exists())
                                            <button class="btn btn-danger btn-mini" title="Discrete Structure">SCSI1013(S2)</button>
                                        @else
                                            <button class="btn btn-mini" title="Discrete Structure">SCSI1013(S2)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S3=='1')
                                        @if (App\TemporarySubject::where('subject_name','S3')->exists())
                                            <button class="btn btn-danger btn-mini" title="Programming Technique 1">SCSJ1013(S3)</button>
                                        @else
                                            <button class="btn btn-mini" title="Programming Technique 1">SCSJ1013(S3)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S4=='1')
                                        @if (App\TemporarySubject::where('subject_name','S4')->exists())
                                            <button class="btn btn-danger btn-mini" title="Digital Logic">SCSR1013(S4)</button>
                                        @else
                                            <button class="btn btn-mini" title="Digital Logic">SCSR1013(S4)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S5=='1')
                                        @if (App\TemporarySubject::where('subject_name','S5')->exists())
                                            <button class="btn btn-danger btn-mini" title="Computational Mathematics">SCSI1113(S5)</button>
                                        @else
                                            <button class="btn btn-mini" title="Computational Mathematics">SCSI1113(S5)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S6=='1')
                                        @if (App\TemporarySubject::where('subject_name','S6')->exists())
                                            <button class="btn btn-danger btn-mini" title="Programming Technique 2">SCSJ1023(S6)</button>
                                        @else
                                            <button class="btn btn-mini" title="Programming Technique 2">SCSJ1023(S6)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S7=='1')
                                        @if (App\TemporarySubject::where('subject_name','S7')->exists())
                                            <button class="btn btn-danger btn-mini" title="Network Communications">SCSR1213(S7)</button>
                                        @else
                                            <button class="btn btn-mini" title="Network Communications">SCSR1213(S7)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S8=='1')
                                        @if (App\TemporarySubject::where('subject_name','S8')->exists())
                                            <button class="btn btn-danger btn-mini" title="Web Programming">SCSV1223(S8)</button>
                                        @else
                                            <button class="btn btn-mini" title="Web Programming">SCSV1223(S8)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S9=='1')
                                        @if (App\TemporarySubject::where('subject_name','S9')->exists())
                                            <button class="btn btn-danger btn-mini" title="Database">SCSD2523(S9)</button>
                                        @else
                                            <button class="btn btn-mini" title="Database">SCSD2523(S9)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S10=='1')
                                        @if (App\TemporarySubject::where('subject_name','S10')->exists())
                                            <button class="btn btn-danger btn-mini" title="Data Structure & Algorithm">SCSJ2013(S10)</button>
                                        @else
                                            <button class="btn btn-mini" title="Data Structure & Algorithm">SCSJ2013(S10)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S11=='1')
                                        @if (App\TemporarySubject::where('subject_name','S11')->exists())
                                            <button class="btn btn-danger btn-mini" title="System Analysis and Design">SCSD2613(S11)</button>
                                        @else
                                            <button class="btn btn-mini" title="System Analysis and Design">SCSD2613(S11)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S12=='1')
                                        @if (App\TemporarySubject::where('subject_name','S12')->exists())
                                            <button class="btn btn-danger btn-mini" title="Computer Organisation and Architecture">SCSR2033(S12)</button>
                                        @else
                                            <button class="btn btn-mini" title="Computer Organisation and Architecture">SCSR2033(S12)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S13=='1')
                                        @if (App\TemporarySubject::where('subject_name','S13')->exists())
                                            <button class="btn btn-danger btn-mini" title="Human Computer Interaction">SCSV2113(S13)</button>
                                        @else
                                            <button class="btn btn-mini" title="Human Computer Interaction">SCSV2113(S13)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S14=='1')
                                        @if (App\TemporarySubject::where('subject_name','S14')->exists())
                                            <button class="btn btn-danger btn-mini" title="Probability & Statistical Data Analysis">SCSI2143(S14)</button>
                                        @else
                                            <button class="btn btn-mini" title="Probability & Statistical Data Analysis">SCSI2143(S14)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S15=='1')
                                        @if (App\TemporarySubject::where('subject_name','S15')->exists())
                                            <button class="btn btn-danger btn-mini" title="Object Oriented Programming">SCSJ2154(S15)</button>
                                        @else
                                            <button class="btn btn-mini" title="Object Oriented Programming">SCSJ2154(S15)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S16=='1')
                                        @if (App\TemporarySubject::where('subject_name','S16')->exists())
                                            <button class="btn btn-danger btn-mini" title="Software Engineering">SCSJ2203(S16)</button>
                                        @else
                                            <button class="btn btn-mini" title="Software Engineering">SCSJ2203(S16)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S17=='1')
                                        @if (App\TemporarySubject::where('subject_name','S17')->exists())
                                            <button class="btn btn-danger btn-mini" title="Operating System">SCSR2043(S17)</button>
                                        @else
                                            <button class="btn btn-mini" title="Operating System">SCSR2043(S17)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S18=='1')
                                        @if (App\TemporarySubject::where('subject_name','S18')->exists())
                                            <button class="btn btn-danger btn-mini" title="Theory of Computer Science">SCSJ3203(S18)</button>
                                        @else
                                            <button class="btn btn-mini" title="Theory of Computer Science">SCSJ3203(S18)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S19=='1')
                                        @if (App\TemporarySubject::where('subject_name','S19')->exists())
                                            <button class="btn btn-danger btn-mini" title="Technopreneurship and Seminar">UCSD2762(S19)</button>
                                        @else
                                            <button class="btn btn-mini" title="Technopreneurship and Seminar">UCSD2762(S19)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S20=='1' && $rows->S21=='1')
                                        @if (App\TemporarySubject::where('subject_name','S20')->exists())
                                            <button class="btn btn-danger btn-mini" title="Software Engineering Project 1">SCSJ3032(S20)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S20=='0' && $rows->S21=='1')
                                        @if (App\TemporarySubject::where('subject_name','S21')->exists())
                                            <button class="btn btn-danger btn-mini" title="Software Engineering Project 2">SCSJ4134(S21)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S22_E1=='1')
                                        @if (App\TemporarySubject::where('subject_name','S22_E1')->exists())
                                            <button class="btn btn-info btn-mini" title="Pengaturcaraan Pangkalan Data">SCSD2623(S22_E1)</button>
                                        @else
                                            <button class="btn btn-mini" title="Pengaturcaraan Pangkalan Data">SCSD2623(S22_E1)</button>
                                        @endif
                                    @endif

                                    @if (($rows->S23_E1=='1'  && $rows->S24_E1=='1') && ($rows->S24_E1+$rows->S23_E1 > '1'))
                                        @if (App\TemporarySubject::where('subject_name','S23_E1')->exists())
                                            <button class="btn btn-info btn-mini" title="Requirement Engineering & Software Modelling">SCSJ2253(S23_E1)</button>
                                        @else
                                            <button class="btn btn-mini" title="Requirement Engineering & Software Modelling">SCSJ2253(S23_E1)</button>
                                        @endif
                                    @endif

                                    @if (($rows->S25_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        @if ($rows->S25_E2+$rows->S26_E2=='2')
                                            @if (App\TemporarySubject::where('subject_name','S25_E2')->exists())
                                                <button class="btn btn-info btn-mini" title="Artificial Intelligent">SCSJ3553(S25_E2)</button>
                                            @else
                                                <button class="btn btn-mini" title="Artificial Intelligent">SCSJ3553(S25_E2)</button>
                                            @endif
                                        @endif
                                    @endif

                                    @if (($rows->S26_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        @if ($rows->S26_E2+$rows->S27_E2=='2')
                                            @if (App\TemporarySubject::where('subject_name','S26_E2')->exists())
                                                <button class="btn btn-info btn-mini" title="Application Development">SCSJ3104(S26_E2)</button>
                                            @else
                                                <button class="btn btn-mini" title="Application Development">SCSJ3104(S26_E2)</button>
                                            @endif
                                        @endif
                                    @endif

                                    @if (($rows->S27_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        @if ($rows->S27_E2+$rows->S28_E2=='2')
                                            @if (App\TemporarySubject::where('subject_name','S27_E2')->exists())
                                                <button class="btn btn-info btn-mini" title="Internet Programming">SCSJ3303(S27_E2)</button>
                                            @else
                                                <button class="btn btn-mini" title="Internet Programming">SCSJ3303(S27_E2)</button>
                                            @endif
                                        @endif
                                    @endif

                                    @if (($rows->S28_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        @if ($rows->S28_E2+$rows->S29_E2=='2')
                                            @if (App\TemporarySubject::where('subject_name','S28_E2')->exists())
                                                <button class="btn btn-info btn-mini" title="Software Quality Assurance">SCSJ3343(S28_E2)</button>
                                            @else
                                                <button class="btn btn-mini" title="Software Quality Assurance">SCSJ3343(S28_E2)</button>
                                            @endif
                                        @endif
                                    @endif

                                    @if (($rows->S29_E2=='1') && ($rows->S25_E2+$rows->S26_E2+$rows->S27_E2+$rows->S28_E2+$rows->S29_E2 > '1'))
                                        @if ($rows->S29_E2+$rows->S25_E2=='2')
                                            @if (App\TemporarySubject::where('subject_name','S29_E2')->exists())
                                                <button class="btn btn-info btn-mini" title="Knowledge-Based & Expert System">SCSJ3603(S29_E2)</button>
                                            @else
                                                <button class="btn btn-mini" title="Knowledge-Based & Expert System">SCSJ3603(S29_E2)</button>
                                            @endif
                                        @endif
                                    @endif

                                    @if (($rows->S30_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1'))
                                        @if ($rows->S30_E3+$rows->S31_E3 =='2')
                                            @if (App\TemporarySubject::where('subject_name','S30_E3')->exists())
                                                <button class="btn btn-info btn-mini" title="Software Design & Architecture">SCSJ3323(S30_E3)</button>
                                            @else
                                                <button class="btn btn-mini" title="Software Design & Architecture">SCSJ3323(S30_E3)</button>
                                            @endif
                                        @endif
                                    @endif

                                    @if (($rows->S31_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1'))
                                        @if ($rows->S31_E3+$rows->S32_E3 =='2')
                                            @if (App\TemporarySubject::where('subject_name','S31_E3')->exists())
                                                <button class="btn btn-info btn-mini" title="Computer Intelligence">SCSJ3563(S31_E3)</button>
                                            @else
                                                <button class="btn btn-mini" title="Computer Intelligence">SCSJ3563(S31_E3)</button>
                                            @endif
                                        @endif
                                    @endif

                                    @if (($rows->S32_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1'))
                                        @if ($rows->S32_E3+$rows->S33_E3 =='2')
                                            @if (App\TemporarySubject::where('subject_name','S32_E3')->exists())
                                                <button class="btn btn-info btn-mini" title="Programming Technique 3">SCSJ3253(S32_E3)</button>
                                            @else
                                                <button class="btn btn-mini" title="Programming Technique 3">SCSJ3253(S32_E3)</button>
                                            @endif
                                        @endif
                                    @endif

                                    @if (($rows->S33_E3=='1') && ($rows->S30_E3+$rows->S31_E3+$rows->S32_E3+$rows->S33_E3 > '1'))
                                        @if ($rows->S33_E3+$rows->S30_E3 =='2')
                                            @if (App\TemporarySubject::where('subject_name','S33_E3')->exists())
                                                <button class="btn btn-info btn-mini" title="Special Topic in Software Engineering">SCSJ3403(S33_E3)</button>
                                            @else
                                                <button class="btn btn-mini" title="Special Topic in Software Engineering">SCSJ3403(S33_E3)</button>
                                            @endif
                                        @endif
                                    @endif

                                    @if(($rows->S34_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1'))
                                        @if ($rows->S34_E4+$rows->S35_E4=='2')
                                            @if (App\TemporarySubject::where('subject_name','S34_E4')->exists())
                                                <button class="btn btn-info btn-mini" title="Software Construction">SCSJ4383(S34_E4)</button>
                                            @else
                                                <button class="btn btn-mini" title="Software Construction">SCSJ4383(S34_E4)</button>
                                            @endif
                                        @endif
                                    @endif

                                    @if (($rows->S35_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1'))
                                        @if ($rows->S35_E4+$rows->S36_E4=='2')
                                            @if (App\TemporarySubject::where('subject_name','S35_E4')->exists())
                                                <button class="btn btn-info btn-mini" title="Real-Time Software Engineering">SCSJ4423(S35_E4)</button>
                                            @else
                                                <button class="btn btn-mini" title="Real-Time Software Engineering">SCSJ4423(S35_E4)</button>
                                            @endif
                                        @endif
                                    @endif

                                    @if (($rows->S36_E4=='1') && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1'))
                                        @if ($rows->S36_E4+$rows->S37_E4=='2')
                                            @if (App\TemporarySubject::where('subject_name','S36_E4')->exists())
                                                <button class="btn btn-info btn-mini" title="Web Technology">SCSJ4483(S36_E4)</button>
                                            @else
                                                <button class="btn btn-mini" title="Web Technology">SCSJ4483(S36_E4)</button>
                                            @endif
                                        @endif
                                    @endif

                                    @if (($rows->S37_E4=='1')  && ($rows->S34_E4+$rows->S35_E4+$rows->S36_E4+$rows->S37_E4 > '1'))
                                        @if ($rows->S37_E4+$rows->S34_E4=='2')
                                            @if (App\TemporarySubject::where('subject_name','S37_E4')->exists())
                                                <button class="btn btn-info btn-mini" title="Agent-Oriented Software Engineering">SCSJ4463(S37_E4)</button>
                                            @else
                                                <button class="btn btn-mini" title="Agent-Oriented Software Engineering">SCSJ4463(S37_E4)</button>
                                            @endif
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
