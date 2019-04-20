@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="" class="current">Final Year Student list</a> </div>
            <h1>Final Year List of Software Engineering (SCSJ)</h1>
        </div>
        <div class="container-fluid"><hr>
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
                                <td><a href="{{url('/admin/technology-and-information-system')}}" target="_blank">Technology & Information System</td>
                                <td style="text-align:center">{{ $t1 }}</td>
                            </tr>
                            @endif
                            @if($t2>0)
                            <tr class="gradeX">
                                <td><a href="{{url('/admin/discrete-structure')}}" target="_blank">Discrete Structure</td>
                                <td style="text-align:center">{{ $t2 }}</td>
                            </tr>
                            @endif
                            @if($t3>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/programming-technique-1')}}" target="_blank">Programming Technique 1</td>
                                <td style="text-align:center">{{ $t3 }}</td>
                            </tr>
                            @endif
                            @if($t4>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/digital-logic')}}" target="_blank">Digital Logic</td>
                                <td style="text-align:center">{{ $t4 }}</td>
                            </tr>
                            @endif
                            @if($t5>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/computational-mathematic')}}" target="_blank">Computational Mathematics</td>
                                <td style="text-align:center">{{ $t5 }}</td>
                            </tr>
                            @endif
                            @if($t6>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/programming-technique-2')}}" target="_blank">Programming Technique 2</td>
                                <td style="text-align:center">{{ $t6 }}</td>
                            </tr>
                            @endif
                            @if($t7>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/network-communication')}}" target="_blank">Network Communication</td>
                                <td style="text-align:center"d>{{ $t7 }}</td>
                            </tr>
                            @endif
                            @if($t8>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/web-programming')}}" target="_blank">Web Programming</td>
                                <td style="text-align:center">{{ $t8 }}</td>
                            </tr>
                            @endif
                            @if($t9>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/database')}}" target="_blank">Database</td>
                                <td style="text-align:center">{{ $t9 }}</td>
                            </tr>
                            @endif
                            @if($t10>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/data-structures-and-algorithm')}}" target="_blank">Data Structures and Algorithm</td>
                                <td style="text-align:center">{{ $t10 }}</td>
                            </tr>
                            @endif
                            @if($t11>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/system-analysis-and-design')}}" target="_blank">System Analysis and Design</td>
                                <td style="text-align:center">{{ $t11 }}</td>
                            </tr>
                            @endif
                            @if($t12>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/computer-organisation-and-architecture')}}" target="_blank">Computer Organisation and Architecture</td>
                                <td style="text-align:center">{{ $t12 }}</td>
                            </tr>
                            @endif
                            @if($t13>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/human-computer-interaction')}}" target="_blank">Human Computer Interaction</td>
                                <td style="text-align:center">{{ $t13 }}</td>
                            </tr>
                            @endif
                            @if($t14>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/probability-and-statistical-data-analysis')}}" target="_blank">Probability & Statistical Data Analysis</td>
                                <td style="text-align:center">{{ $t14 }}</td>
                            </tr>
                            @endif
                            @if($t15>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/object-oriented-programming')}}" target="_blank">Object Oriented Programming</td>
                                <td style="text-align:center">{{ $t15 }}</td>
                            </tr>
                            @endif
                            @if($t16>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/software-engineering')}}" target="_blank">Software Engineering</td>
                                <td style="text-align:center">{{ $t16 }}</td>
                            </tr>
                            @endif
                            @if($t17>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/operating-system')}}" target="_blank">Operating Systems</td>
                                <td style="text-align:center">{{ $t17 }}</td>
                            </tr>
                            @endif
                            @if($t18>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/theory-of-computer-science')}}" target="_blank">Theory of Computer Science</td>
                                <td style="text-align:center">{{ $t18 }}</td>
                            </tr>
                            @endif
                            @if($t19>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/technopreneurship-and-seminar')}}" target="_blank">Technopreneurship and Seminar</td>
                                <td style="text-align:center">{{ $t19 }}</td>
                            </tr>
                            @endif
                            @if($t20>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/software-engineering-project-1')}}" target="_blank">Software Engineering Project 1</td>
                                <td style="text-align:center">{{ $t20 }}</td>
                            </tr>
                            @endif
                            @if($t21>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/software-engineering-project-2')}}" target="_blank">Software Engineering Project 2</td>
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

                                <td><a href="{{url('/admin/requirement-engineering-and-software-modeling')}}" target="_blank">Requirement Engineering & Software Modeling</td>
                                <td style="text-align:center">{{ $t22 }}</td>
                            </tr>
                            @endif
                            @if($t23>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/software-project-management')}}" target="_blank">Software Project Management</td>
                                <td style="text-align:center">{{ $t23 }}</td>
                            </tr>
                            @endif
                            @if($t24>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/artificial-intelligent')}}" target="_blank">Artificial Intelligent</td>
                                <td style="text-align:center">{{ $t24 }}</td>
                            </tr>
                            @endif
                            @if($t25>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/application-development')}}" target="_blank">Application Development</td>
                                <td style="text-align:center">{{ $t25 }}</td>
                            </tr>
                            @endif
                            @if($t26>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/internet-programming')}}" target="_blank">Internet Programming</td>
                                <td style="text-align:center">{{ $t26 }}</td>
                            </tr>
                            @endif
                            @if($t27>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/software-quality-assurance')}}" target="_blank">Software Quality Assurance</td>
                                <td style="text-align:center">{{ $t27 }}</td>
                            </tr>
                            @endif
                            @if($t28>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/knowledge-based-and-expert-system')}}" target="_blank">Knowledge-based & Expert System</td>
                                <td style="text-align:center">{{ $t28 }}</td>
                            </tr>
                            @endif
                            @if($t29>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/software-design-and-architecture')}}" target="_blank">Software Design and Architecture</td>
                                <td style="text-align:center">{{ $t29 }}</td>
                            </tr>
                            @endif
                            @if($t30>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/computational-intelligence')}}" target="_blank">Computational Intelligence</td>
                                <td style="text-align:center">{{ $t30 }}</td>
                            </tr>
                            @endif
                            @if($t31>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/programming-technique-3')}}" target="_blank">Programming Technique 3</td>
                                <td style="text-align:center">{{ $t31 }}</td>
                            </tr>
                            @endif
                            @if($t32>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/special-topic-in-software-engineering')}}" target="_blank">Special Topic in Software Engineering</td>
                                <td style="text-align:center">{{ $t32 }}</td>
                            </tr>
                            @endif
                            @if($t33>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/software-construction')}}" target="_blank">Software Construction</td>
                                <td style="text-align:center">{{ $t33 }}</td>
                            </tr>
                            @endif
                            @if($t34>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/real-time-software-engineering')}}" target="_blank">Real-time Software Engineering</td>
                                <td style="text-align:center">{{ $t34 }}</td>
                            </tr>
                            @endif
                            @if($t35>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/web-technology')}}" target="_blank">Web Technology</td>
                                <td style="text-align:center">{{ $t35 }}</td>
                            </tr>
                            @endif
                            @if($t36>0)
                            <tr class="gradeX">

                                <td><a href="{{url('/admin/agent-oriented-software-engineering')}}" target="_blank">Agent-Oriented Software Engineering</td>
                                <td style="text-align:center">{{ $t36 }}</td>
                            </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>

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
                                            <button class="btn btn-primary btn-mini" title="Technology & Information System">SCSD1513(S1)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S2=='1')
                                        @if (App\TemporarySubject::where('subject_name','S2')->exists())
                                            <button class="btn btn-primary btn-mini" title="Discrete Structure">SCSI1013(S2)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S3=='1')
                                        @if (App\TemporarySubject::where('subject_name','S3')->exists())
                                            <button class="btn btn-primary btn-mini" title="Programming Technique 1">SCSJ1013(S3)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S4=='1')
                                        @if (App\TemporarySubject::where('subject_name','S4')->exists())
                                            <button class="btn btn-primary btn-mini" title="Digital Logic">SCSR1013(S4)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S5=='1')
                                        @if (App\TemporarySubject::where('subject_name','S5')->exists())
                                            <button class="btn btn-primary btn-mini" title="Computational Mathematics">SCSI1113(S5)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S6=='1')
                                        @if (App\TemporarySubject::where('subject_name','S6')->exists())
                                            <button class="btn btn-primary btn-mini" title="Programming Technique 2">SCSJ1023(S6)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S7=='1')
                                        @if (App\TemporarySubject::where('subject_name','S7')->exists())
                                            <button class="btn btn-primary btn-mini" title="Network Communications">SCSR1213(S7)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S8=='1')
                                        @if (App\TemporarySubject::where('subject_name','S8')->exists())
                                            <button class="btn btn-primary btn-mini" title="Web Programming">SCSV1223(S8)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S9=='1')
                                        @if (App\TemporarySubject::where('subject_name','S9')->exists())
                                            <button class="btn btn-primary btn-mini" title="Database">SCSD2523(S9)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S10=='1')
                                        @if (App\TemporarySubject::where('subject_name','S10')->exists())
                                            <button class="btn btn-primary btn-mini" title="Data Structure & Algorithm">SCSJ2013(S10)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S11=='1')
                                        @if (App\TemporarySubject::where('subject_name','S11')->exists())
                                            <button class="btn btn-primary btn-mini" title="System Analysis and Design">SCSD2613(S11)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S12=='1')
                                        @if (App\TemporarySubject::where('subject_name','S12')->exists())
                                            <button class="btn btn-primary btn-mini" title="Computer Organisation and Architecture">SCSR2033(S12)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S13=='1')
                                        @if (App\TemporarySubject::where('subject_name','S13')->exists())
                                            <button class="btn btn-primary btn-mini" title="Human Computer Interaction">SCSV2113(S13)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S14=='1')
                                        @if (App\TemporarySubject::where('subject_name','S14')->exists())
                                            <button class="btn btn-primary btn-mini" title="Probability & Statistical Data Analysis">SCSI2143(S14)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S15=='1')
                                        @if (App\TemporarySubject::where('subject_name','S15')->exists())
                                            <button class="btn btn-primary btn-mini" title="Object Oriented Programming">SCSJ2154(S15)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S16=='1')
                                        @if (App\TemporarySubject::where('subject_name','S16')->exists())
                                            <button class="btn btn-primary btn-mini" title="Software Engineering">SCSJ2203(S16)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S17=='1')
                                        @if (App\TemporarySubject::where('subject_name','S17')->exists())
                                            <button class="btn btn-primary btn-mini" title="Operating System">SCSR2043(S17)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S18=='1')
                                        @if (App\TemporarySubject::where('subject_name','S18')->exists())
                                            <button class="btn btn-primary btn-mini" title="Theory of Computer Science">SCSJ3203(S18)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S19=='1')
                                        @if (App\TemporarySubject::where('subject_name','S19')->exists())
                                            <button class="btn btn-primary btn-mini" title="Technopreneurship and Seminar">UCSD2762(S19)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S20=='1' && $rows->S21=='1')
                                        @if (App\TemporarySubject::where('subject_name','S20')->exists())
                                            <button class="btn btn-primary btn-mini" title="Software Engineering Project 1">SCSJ3032(S20)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S21=='1' && $rows->S20=='0')
                                        @if (App\TemporarySubject::where('subject_name','S21')->exists())
                                            <button class="btn btn-primary btn-mini" title="Software Engineering Project 2">SCSJ4134(S21)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S22_E1=='1')
                                        @if (App\TemporarySubject::where('subject_name','S22_E1')->exists())
                                            <button class="btn btn-info btn-mini" title="Pengaturcaraan Pangkalan Data">SCSD2623(S22_E1)</button>
                                        @endif
                                    @endif

                                    @if (($rows->S23_E1=='1'  && $rows->S24_E1=='1') && ($rows->S24_E1+$rows->S23_E1 > '1'))
                                        @if (App\TemporarySubject::where('subject_name','S23_E1')->exists())
                                            <button class="btn btn-info btn-mini" title="Requirement Engineering & Software Modelling">SCSJ2253(S23_E1)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S25_E2=='1')
                                        @if (App\TemporarySubject::where('subject_name','S25_E2')->exists())
                                            <button class="btn btn-info btn-mini" title="Artificial Intelligent">SCSJ3553(S25_E2)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S26_E2=='1')
                                        @if (App\TemporarySubject::where('subject_name','S26_E2')->exists())
                                            <button class="btn btn-info btn-mini" title="Application Development">SCSJ3104(S26_E2)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S27_E2=='1')
                                        @if (App\TemporarySubject::where('subject_name','S27_E2')->exists())
                                            <button class="btn btn-info btn-mini" title="Internet Programming">SCSJ3303(S27_E2)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S28_E2=='1')
                                        @if (App\TemporarySubject::where('subject_name','S28_E2')->exists())
                                            <button class="btn btn-info btn-mini" title="Software Quality Assurance">SCSJ3343(S28_E2)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S29_E2=='1')
                                        @if (App\TemporarySubject::where('subject_name','S29_E2')->exists())
                                            <button class="btn btn-info btn-mini" title="Knowledge-Based & Expert System">SCSJ3603(S29_E2)</button>
                                        @endif
                                    @endif

                                    @if ($rows->S30_E3=='1')
                                        @if (App\TemporarySubject::where('subject_name','S30_E3')->exists())
                                            <button class="btn btn-info btn-mini" title="Software Design & Architecture">SCSJ3323(S30_E3)</button>
                                        @endif
                                    @endif
                                    @if($rows->S31_E3=='1')
                                        @if (App\TemporarySubject::where('subject_name','S31_E3')->exists())
                                            <button class="btn btn-info btn-mini" title="Computer Intelligence">SCSJ3563(S31_E3)</button>
                                        @endif
                                    @endif
                                    @if ($rows->S32_E3=='1')
                                        @if (App\TemporarySubject::where('subject_name','S32_E3')->exists())
                                            <button class="btn btn-info btn-mini" title="Programming Technique 3">SCSJ3253(S32_E3)</button>
                                        @endif
                                    @endif
                                    @if ($rows->S33_E3=='1')
                                        @if (App\TemporarySubject::where('subject_name','S33_E3')->exists())
                                            <button class="btn btn-info btn-mini" title="Special Topic in Software Engineering">SCSJ3403(S33_E3)</button>
                                        @endif
                                    @endif
                                    @if ($rows->S34_E4=='1')
                                        @if (App\TemporarySubject::where('subject_name','S34_E4')->exists())
                                            <button class="btn btn-info btn-mini" title="Software Construction">SCSJ4383(S34_E4)</button>
                                        @endif
                                    @endif
                                    @if ($rows->S35_E4=='1')
                                            @if (App\TemporarySubject::where('subject_name','S35_E4')->exists())
                                                <button class="btn btn-info btn-mini" title="Real-Time Software Engineering">SCSJ4423(S35_E4)</button>
                                            @endif
                                    @endif
                                    @if ($rows->S36_E4=='1')
                                        @if (App\TemporarySubject::where('subject_name','S36_E4')->exists())
                                            <button class="btn btn-info btn-mini" title="Web Technology">SCSJ4483(S36_E4)</button>
                                        @endif
                                    @endif
                                    @if ($rows->S37_E4=='1')
                                        @if (App\TemporarySubject::where('subject_name','S37_E4')->exists())
                                            <button class="btn btn-info btn-mini" title="Agent-Oriented Software Engineering">SCSJ4463(S37_E4)</button>
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
