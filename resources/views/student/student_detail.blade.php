@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
      <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="" class="current">{{$student->student_name}}</a> </div>
    </div>
    <!--End-breadcrumbs-->

    <div class="row-fluid">
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>

                    <h5>NAME : {{$student->student_name}}</h5>
                    <h5>MATRIC NO : {{$student->matrix_no}}</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="gradeX">
                                <th>Code</th>
                                <th>Course (Year 1)</th>
                                <th>Status</th>
                                <th>Code</th>
                                <th>Course (Year 2)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSD1513</td>
                                <td ><a href="{{url('/admin/technology-and-information-system')}}">Technology & Information System</a></td>
                                @if ($student->S1=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td style="text-align:center">SCSD2523</td>
                                <td><a href="{{url('/admin/database')}}">Database</a></td>
                                @if ($student->S9=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSI1013</td>
                                <td ><a href="{{url('/admin/discrete-structure')}}">Discrete Structure</a></td>
                                @if ($student->S2=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td style="text-align:center">SCSD2613</td>
                                <td><a href="{{url('/admin/system-analysis-and-design')}}">System Analysis and Design</a></td>
                                @if ($student->S11=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ1013</td>
                                <td><a href="{{url('/admin/programming-technique-1')}}">Programming Technique 1</a></td>
                                @if ($student->S3=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td style="text-align:center">SCSJ2013</td>
                                <td><a href="{{url('/admin/data-structures-and-algorithm')}}">Data Structures and Algorithm</a></td>
                                @if ($student->S10=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSR1013</td>
                                <td><a href="{{url('/admin/digital-logic')}}">Digital Logic</a></td>
                                @if ($student->S4=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td style="text-align:center">SCSR2033</td>
                                <td><a href="{{url('/admin/computer-organisation-and-architecture')}}">Computer Organisation and Architecture</a></td>
                                @if ($student->S12=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSI13</td>
                                <td><a href="{{url('/admin/computational-mathematic')}}">Computational Mathematics</a></td>
                                @if ($student->S5=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td style="text-align:center">SCSV2113</td>
                                <td><a href="{{url('/admin/human-computer-interaction')}}">Human Computer Interaction</a></td>
                                @if ($student->S13=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ1023</td>
                                <td><a href="{{url('/admin/programming-technique-2')}}">Programming Technique 2</a></td>
                                @if ($student->S6=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td style="text-align:center">SCSV1223</td>
                                <td><a href="{{url('/admin/web-programming')}}">Web Programming</a></td>
                                @if ($student->S8=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSR1213</td>
                                <td><a href="{{url('/admin/network-communication')}}">Network Communication</a></td>
                                @if ($student->S7=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td style="text-align:center">SCSJ2154</td>
                                <td><a href="{{url('/admin/object-oriented-programming')}}">Object Oriented Programming</a></td>
                                @if ($student->S15=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSI2143</td>
                                <td><a href="{{url('/admin/probability-and-statistical-data-analysis')}}">Probability & Statistical Data Analysis</a></td>
                                @if ($student->S14=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td style="text-align:center">SCSJ2203</td>
                                <td><a href="{{url('/admin/software-engineering')}}">Software Engineering</a></td>
                                @if ($student->S16=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align:center">SCSR2043</td>
                                <td><a href="{{url('/admin/operating-system')}}">Operating Systems</a></td>
                                @if ($student->S17=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="3" style="text-align:center"><i><b>Elective Courses - Choose 1(3 Credits)</b></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align:center">SCSJ2253</td>
                                <td><a href="{{url('/admin/requirement-engineering-and-software-modeling')}}">Requirement Engineering & Software Modeling</a></td>
                                @if ($student->S23_E1=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align:center">SCSJ2363</td>
                                <td><a href="{{url('/admin/software-project-management')}}">Software Project Management</a></td>
                                @if ($student->S24_E1=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                        </tbody>
                        {{-- year 3 --}}
                        <thead>
                            <tr class="gradeX">
                                <th>Code</th>
                                <th>Course (Year 3)</th>
                                <th>Status</th>
                                <th>Code</th>
                                <th>Course (Year 4)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSD3203</td>
                                <td><a href="{{url('/admin/theory-of-computer-science')}}">Theory of Computer Science</a></td>
                                @if ($student->S18=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td style="text-align:center">SCSJ4134</td>
                                <td><a href="{{url('/admin/software-engineering-project-2')}}">Software Engineering Project 2</a></td>
                                @if ($student->S21=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3032</td>
                                <td><a href="{{url('/admin/software-engineering-project-1')}}">Software Engineering Project 1</a></td>
                                @if ($student->S20=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td colspan="3" style="text-align:center"><i><b>Elective Courses - Choose 3(9 Credits)</b></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">UCSD2762</td>
                                <td><a href="{{url('/admin/technopreneurship-and-seminar')}}">Technopreneurship and Seminar</a></td>
                                @if ($student->S19=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td style="text-align:center">SCSJ4383</td>
                                <td><a href="{{url('/admin/software-construction')}}">Software Construction</a></td>
                                @if ($student->S34_E4=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td colspan="3" style="text-align:center"><i><b>Elective Courses - Choose 4(13 Credits)</b></i></td>
                                <td style="text-align:center">SCSJ4423</td>
                                <td><a href="{{url('/admin/real-time-software-engineering')}}">Real-time Software Engineering</a></td>
                                @if ($student->S35_E4=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3104</td>
                                <td><a href="{{url('/admin/application-development')}}">Application Development</a></td>
                                @if ($student->S26_E210=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td style="text-align:center">SCSJ4483</td>
                                <td><a href="{{url('/admin/web-technology')}}">Web Technology</a></td>
                                @if ($student->S36_E4=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3553</td>
                                <td><a href="{{url('/admin/artificial-intelligent')}}">Artificial Intelligent</a></td>
                                @if ($student->S25_E2=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td style="text-align:center">SCSJ4463</td>
                                <td><a href="{{url('/admin/agent-oriented-software-engineering')}}">Agent-Oriented Software Engineering</a></td>
                                @if ($student->S37_E4=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3303</td>
                                <td><a href="{{url('/admin/internet-programming')}}">Internet Programming</a></td>
                                @if ($student->S27_E2=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3343</td>
                                <td><a href="{{url('/admin/software-quality-assurance')}}">Software Quality Assurance</a></td>
                                @if ($student->S10=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3603</td>
                                <td><a href="{{url('/admin/knowledge-based-and-expert-system')}}">Knowledge-based & Expert System</a></td>
                                @if ($student->S29_E2=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="gradeX">
                                <td colspan="3" style="text-align:center"><i><b>Elective Courses - Choose 3(9 Credits)</b></i></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3323</td>
                                <td><a href="{{url('/admin/software-design-and-architecture')}}">Software Design and Architecture</a></td>
                                @if ($student->S30_E3=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3563</td>
                                <td><a href="{{url('/admin/computational-intelligence')}}">Computational Intelligence</a></td>
                                @if ($student->S31_E3=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3253</td>
                                <td><a href="{{url('/admin/programming-technique-3')}}">Programming Technique 3</a></td>
                                @if ($student->S32_E3=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3403</td>
                                <td><a href="{{url('/admin/special-topic-in-software-engineering')}}">Special Topic in Software Engineering</a></td>
                                @if ($student->S33_E3=="0")
                                    <td style="text-align:center">Pass</td>
                                @else
                                    <td style="text-align:center">Null</td>
                                @endif
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--end-main-container-part-->

@endsection

