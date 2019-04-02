@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
      <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="" class="current">{{$student->student_name}}</a> </div>
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
                    <h5>{{$student->student_name}}</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="gradeX">
                                <th>Code</th>
                                <th>Course (Year 1)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSD1513</td>
                                <td >Technology & Information System</td>
                                <td style="text-align:center">{{$student->S1}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSI1013</td>
                                <td >Discrete Structure</td>
                                <td style="text-align:center">{{$student->S2}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ1013</td>
                                <td>Programming Technique 1</td>
                                <td style="text-align:center">{{$student->S3}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSR1013</td>
                                <td>Digital Logic</td>
                                <td style="text-align:center">{{$student->S4}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSI13</td>
                                <td>Computational Mathematics</td>
                                <td style="text-align:center">{{$student->S5}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ1023</td>
                                <td>Programming Technique 2</td>
                                <td style="text-align:center">{{$student->S6}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSR1213</td>
                                <td>Network Communication</td>
                                <td style="text-align:center">{{$student->S7}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSI2143</td>
                                <td>Probability & Statistical Data Analysis</td>
                                <td style="text-align:center">{{$student->S14}}</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr class="gradeX">
                                <th>Code</th>
                                <th>Course (Year 2)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSD2523</td>
                                <td>Database</td>
                                <td style="text-align:center">{{$student->S9}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSD2613</td>
                                <td>System Analysis and Design</td>
                                <td style="text-align:center">{{$student->S11}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ2013</td>
                                <td>Data Structures and Algorithm</td>
                                <td style="text-align:center">{{$student->S10}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSR2033</td>
                                <td>Computer Organisation and Architecture</td>
                                <td style="text-align:center">{{$student->S12}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSV2113</td>
                                <td>Human Computer Interaction</td>
                                <td style="text-align:center">{{$student->S13}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSV1223</td>
                                <td>Web Programming</td>
                                <td style="text-align:center">{{$student->S8}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ2154</td>
                                <td>Object Oriented Programming</td>
                                <td style="text-align:center">{{$student->S15}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ2203</td>
                                <td>Software Engineering</td>
                                <td style="text-align:center">{{$student->S16}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td colspan="3" style="text-align:center"><i><b>Elective Courses - Choose 1(3 Credits)</b></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ2253</td>
                                <td>Requirement Engineering & Software Modeling</td>
                                <td style="text-align:center">{{$student->S23_E1}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ2363</td>
                                <td>Software Project Management</td>
                                <td style="text-align:center">{{$student->S24_E1}}</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr class="gradeX">
                                <th>Code</th>
                                <th>Course (Year 3)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSD3203</td>
                                <td>Theory of Computer Science</td>
                                <td style="text-align:center">{{$student->S18}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3032</td>
                                <td>Software Engineering Project 1</td>
                                <td style="text-align:center">{{$student->S20}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">UCSD2762</td>
                                <td>Technopreneurship Seminar</td>
                                <td style="text-align:center">{{$student->S19}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td colspan="3" style="text-align:center"><i><b>Elective Courses - Choose 4(13 Credits)</b></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3104</td>
                                <td>Applicatin Development</td>
                                <td style="text-align:center">{{$student->S26_E2}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3553</td>
                                <td>Artificial Intelligent</td>
                                <td style="text-align:center">{{$student->S25_E2}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3303</td>
                                <td>Internet Programming</td>
                                <td style="text-align:center">{{$student->S27_E2}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3343</td>
                                <td>Software Quality Assurance</td>
                                <td style="text-align:center">{{$student->S28_E2}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3603</td>
                                <td>Knowledge-based & Expert System</td>
                                <td style="text-align:center">{{$student->S29_E2}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ2203</td>
                                <td>Software Engineering</td>
                                <td style="text-align:center">{{$student->S16}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td colspan="3" style="text-align:center"><i><b>Elective Courses - Choose 1(3 Credits)</b></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ2253</td>
                                <td>Requirement Engineering & Software Modeling</td>
                                <td style="text-align:center">{{$student->S23_E1}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ2363</td>
                                <td>Software Project Management</td>
                                <td style="text-align:center">{{$student->S24_E1}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td colspan="3" style="text-align:center"><i><b>Elective Courses - Choose 3(9 Credits)</b></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3323</td>
                                <td>Software Design and Architecture</td>
                                <td style="text-align:center">{{$student->S30_E3}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3563</td>
                                <td>Computational Intelligence</td>
                                <td style="text-align:center">{{$student->S31_E3}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3253</td>
                                <td>Programming Technique 3</td>
                                <td style="text-align:center">{{$student->S32_E3}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ3403</td>
                                <td>Special Topic in Software Engineering</td>
                                <td style="text-align:center">{{$student->S33_E3}}</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr class="gradeX">
                                <th>Code</th>
                                <th>Course (Year 4)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ4134</td>
                                <td>Software Engineering Project 2</td>
                                <td style="text-align:center">{{$student->S21}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td colspan="3" style="text-align:center"><i><b>Elective Courses - Choose 3(9 Credits)</b></i></td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ4383</td>
                                <td>Software Construction</td>
                                <td style="text-align:center">{{$student->S34_E4}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ4423</td>
                                <td>Real-time Software Engineering</td>
                                <td style="text-align:center">{{$student->S35_E4}}</td>
                            </tr>
                            <tr class="gradeX">
                                <td style="text-align:center">SCSJ4483</td>
                                <td>Web Technology</td>
                                <td style="text-align:center">{{$student->S36_E4}}</td>
                            </tr>
                             <tr class="gradeX">
                                <td style="text-align:center">SCSJ4463</td>
                                <td>Agent-Oriented Software Engineering</td>
                                <td style="text-align:center">{{$student->S37_E4}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--end-main-container-part-->

@endsection

