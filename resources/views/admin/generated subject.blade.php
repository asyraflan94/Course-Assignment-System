@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
      <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="" class="current">View Subject Offering List</a></div>
      </div>
    <!--End-breadcrumbs-->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>Subjects Offering List</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Subject code</th>
                                <th>Subject name</th>
                                <th>Subject type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $index=>$sub)
                                <tr>

                                    @if ($sub->subject_type=='compulsory')
                                        <td style="text-align:center;">{{$index+1}}</td>
                                        <td style="background-color:#033DC4;"><font color="white">{{$sub->subject_long_name}}</font></td>
                                        <td style="background-color:#033DC4; text-align:center"><font color="white">{{$sub->subject_code}}</font></td>
                                        <td style="background-color:#033DC4; text-align:center"><font color="white">{{$sub->subject_type}}</font></td>
                                    @else
                                        <td style="text-align:center;">{{$index+1}}</td>
                                        <td style="background-color:#ADD8E6;">{{$sub->subject_long_name}}</td>
                                        <td style="background-color:#ADD8E6; text-align:center">{{$sub->subject_code}}</td>
                                        <td style="background-color:#ADD8E6; text-align:center">{{$sub->subject_type}}</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>Courses Timetable</h5>
                </div>
                <div class="widget-content">
                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align:left"><h6>Group 1</h6></th>
                            </tr>
                            <tr>
                                <th>Subject name</th>
                                <th>Subject code</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($compulsory1 as $sub)
                                <tr>
                                    <td style="background-color:#033DC4;"><font color="white">{{$sub->subject_long_name}}</font></td>
                                    <td style="background-color:#033DC4; text-align:center"><font color="white">{{$sub->subject_code}}</font></td>
                                </tr>
                            @endforeach
                            @foreach ($elective1 as $sub)
                            <tr>
                                <td style="background-color:#ADD8E6;">{{$sub->subject_long_name}}</td>
                                <td style="background-color:#ADD8E6; text-align:center">{{$sub->subject_code}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align:left"><h6>Group 2</h6></th>
                            </tr>
                            <tr>
                                <th>Subject name</th>
                                <th>Subject code</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($compulsory2 as $sub)
                                <tr>
                                    <td style="background-color:#033DC4;"><font color="white">{{$sub->subject_long_name}}</font></td>
                                    <td style="background-color:#033DC4; text-align:center"><font color="white">{{$sub->subject_code}}</font></td>
                                </tr>
                            @endforeach
                            @foreach ($elective2 as $sub)
                            <tr>
                                <td style="background-color:#ADD8E6;">{{$sub->subject_long_name}}</td>
                                <td style="background-color:#ADD8E6; text-align:center">{{$sub->subject_code}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2" style="text-align:left"><h6>Group 3</h6></th>
                            </tr>
                            <tr>
                                <th>Subject name</th>
                                <th>Subject code</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($compulsory3 as $sub)
                                <tr>
                                    <td style="background-color:#033DC4;"><font color="white">{{$sub->subject_long_name}}</font></td>
                                    <td style="background-color:#033DC4; text-align:center"><font color="white">{{$sub->subject_code}}</font></td>
                                </tr>
                            @endforeach
                            @foreach ($elective3 as $sub)
                            <tr>
                                <td style="background-color:#ADD8E6;">{{$sub->subject_long_name}}</td>
                                <td style="background-color:#ADD8E6; text-align:center">{{$sub->subject_code}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row-fluid" align="center">
                <a class="btn btn-danger" role="button" style="margin-top:1%;width:165px" href="{{url('generate-pdf')}}"><i class="icon-retweet"></i> Print</a>
            </div>
            {{-- <div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                        <h5>Final Year Student List</h5>
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
                                                <button class="btn btn-primary btn-mini" title="Technology & Information System">SCSD1513</button>
                                            @endif
                                        @endif

                                        @if ($rows->S2=='1')
                                            @if (App\TemporarySubject::where('subject_name','S2')->exists())
                                                <button class="btn btn-primary btn-mini" title="Discrete Structure">SCSI1013</button>
                                            @endif
                                        @endif

                                        @if ($rows->S3=='1')
                                            @if (App\TemporarySubject::where('subject_name','S3')->exists())
                                                <button class="btn btn-primary btn-mini" title="Programming Technique 1">SCSJ1013</button>
                                            @endif
                                        @endif

                                        @if ($rows->S4=='1')
                                            @if (App\TemporarySubject::where('subject_name','S4')->exists())
                                                <button class="btn btn-primary btn-mini" title="Digital Logic">SCSR1013</button>
                                            @endif
                                        @endif

                                        @if ($rows->S5=='1')
                                            @if (App\TemporarySubject::where('subject_name','S5')->exists())
                                                <button class="btn btn-primary btn-mini" title="Computational Mathematics">SCSI1113</button>
                                            @endif
                                        @endif

                                        @if ($rows->S6=='1')
                                            @if (App\TemporarySubject::where('subject_name','S6')->exists())
                                                <button class="btn btn-primary btn-mini" title="Programming Technique 2">SCSJ1023</button>
                                            @endif
                                        @endif

                                        @if ($rows->S7=='1')
                                            @if (App\TemporarySubject::where('subject_name','S7')->exists())
                                                <button class="btn btn-primary btn-mini" title="Network Communications">SCSR1213</button>
                                            @endif
                                        @endif

                                        @if ($rows->S8=='1')
                                            @if (App\TemporarySubject::where('subject_name','S8')->exists())
                                                <button class="btn btn-primary btn-mini" title="Web Programming">SCSV1223</button>
                                            @endif
                                        @endif

                                        @if ($rows->S9=='1')
                                            @if (App\TemporarySubject::where('subject_name','S9')->exists())
                                                <button class="btn btn-primary btn-mini" title="Database">SCSD2523</button>
                                            @endif
                                        @endif

                                        @if ($rows->S10=='1')
                                            @if (App\TemporarySubject::where('subject_name','S10')->exists())
                                                <button class="btn btn-primary btn-mini" title="Data Structure & Algorithm">SCSJ2013</button>
                                            @endif
                                        @endif

                                        @if ($rows->S11=='1')
                                            @if (App\TemporarySubject::where('subject_name','S11')->exists())
                                                <button class="btn btn-primary btn-mini" title="System Analysis and Design">SCSD2613</button>
                                            @endif
                                        @endif

                                        @if ($rows->S12=='1')
                                            @if (App\TemporarySubject::where('subject_name','S12')->exists())
                                                <button class="btn btn-primary btn-mini" title="Computer Organisation and Architecture">SCSR2033</button>
                                            @endif
                                        @endif

                                        @if ($rows->S13=='1')
                                            @if (App\TemporarySubject::where('subject_name','S13')->exists())
                                                <button class="btn btn-primary btn-mini" title="Human Computer Interaction">SCSV2113</button>
                                            @endif
                                        @endif

                                        @if ($rows->S14=='1')
                                            @if (App\TemporarySubject::where('subject_name','S14')->exists())
                                                <button class="btn btn-primary btn-mini" title="Probability & Statistical Data Analysis">SCSI2143</button>
                                            @endif
                                        @endif

                                        @if ($rows->S15=='1')
                                            @if (App\TemporarySubject::where('subject_name','S15')->exists())
                                                <button class="btn btn-primary btn-mini" title="Object Oriented Programming">SCSJ2154</button>
                                            @endif
                                        @endif

                                        @if ($rows->S16=='1')
                                            @if (App\TemporarySubject::where('subject_name','S16')->exists())
                                                <button class="btn btn-primary btn-mini" title="Software Engineering">SCSJ2203</button>
                                            @endif
                                        @endif

                                        @if ($rows->S17=='1')
                                            @if (App\TemporarySubject::where('subject_name','S17')->exists())
                                                <button class="btn btn-primary btn-mini" title="Operating System">SCSR2043</button>
                                            @endif
                                        @endif

                                        @if ($rows->S18=='1')
                                            @if (App\TemporarySubject::where('subject_name','S18')->exists())
                                                <button class="btn btn-primary btn-mini" title="Theory of Computer Science">SCSJ3203</button>
                                            @endif
                                        @endif

                                        @if ($rows->S19=='1')
                                            @if (App\TemporarySubject::where('subject_name','S19')->exists())
                                                <button class="btn btn-primary btn-mini" title="Technopreneurship and Seminar">UCSD2762</button>
                                            @endif
                                        @endif

                                        @if ($rows->S20=='1' && $rows->S21=='1')
                                            @if (App\TemporarySubject::where('subject_name','S20')->exists())
                                                <button class="btn btn-primary btn-mini" title="Software Engineering Project 1">SCSJ3032</button>
                                            @endif
                                        @endif

                                        @if ($rows->S21=='1' && $rows->S20=='0')
                                            @if (App\TemporarySubject::where('subject_name','S21')->exists())
                                                <button class="btn btn-primary btn-mini" title="Software Engineering Project 2">SCSJ4134</button>
                                            @endif
                                        @endif

                                        @if ($rows->S22_E1=='1')
                                            @if (App\TemporarySubject::where('subject_name','S22_E1')->exists())
                                                <button class="btn btn-info btn-mini" title="Pengaturcaraan Pangkalan Data">SCSD2623</button>
                                            @endif
                                        @endif

                                        @if (($rows->S23_E1=='1'  && $rows->S24_E1=='1') && ($rows->S24_E1+$rows->S23_E1 > '1'))
                                            @if (App\TemporarySubject::where('subject_name','S23_E1')->exists())
                                                <button class="btn btn-info btn-mini" title="Requirement Engineering & Software Modelling">SCSJ2253</button>
                                            @endif
                                        @endif

                                        @if ($rows->S25_E2=='1')
                                            @if (App\TemporarySubject::where('subject_name','S25_E2')->exists())
                                                <button class="btn btn-info btn-mini" title="Artificial Intelligent">SCSJ3553</button>
                                            @endif
                                        @endif

                                        @if ($rows->S26_E2=='1')
                                            @if (App\TemporarySubject::where('subject_name','S26_E2')->exists())
                                                <button class="btn btn-info btn-mini" title="Application Development">SCSJ3104</button>
                                            @endif
                                        @endif

                                        @if ($rows->S27_E2=='1')
                                            @if (App\TemporarySubject::where('subject_name','S27_E2')->exists())
                                                <button class="btn btn-info btn-mini" title="Internet Programming">SCSJ3303</button>
                                            @endif
                                        @endif

                                        @if ($rows->S28_E2=='1')
                                            @if (App\TemporarySubject::where('subject_name','S28_E2')->exists())
                                                <button class="btn btn-info btn-mini" title="Software Quality Assurance">SCSJ3343</button>
                                            @endif
                                        @endif

                                        @if ($rows->S29_E2=='1')
                                            @if (App\TemporarySubject::where('subject_name','S29_E2')->exists())
                                                <button class="btn btn-info btn-mini" title="Knowledge-Based & Expert System">SCSJ3603</button>
                                            @endif
                                        @endif

                                        @if ($rows->S30_E3=='1')
                                            @if (App\TemporarySubject::where('subject_name','S30_E3')->exists())
                                                <button class="btn btn-info btn-mini" title="Software Design & Architecture">SCSJ3323</button>
                                            @endif
                                        @endif
                                        @if($rows->S31_E3=='1')
                                            @if (App\TemporarySubject::where('subject_name','S31_E3')->exists())
                                                <button class="btn btn-info btn-mini" title="Computer Intelligence">SCSJ3563</button>
                                            @endif
                                        @endif
                                        @if ($rows->S32_E3=='1')
                                            @if (App\TemporarySubject::where('subject_name','S32_E3')->exists())
                                                <button class="btn btn-info btn-mini" title="Programming Technique 3">SCSJ3253</button>
                                            @endif
                                        @endif
                                        @if ($rows->S33_E3=='1')
                                            @if (App\TemporarySubject::where('subject_name','S33_E3')->exists())
                                                <button class="btn btn-info btn-mini" title="Special Topic in Software Engineering">SCSJ3403</button>
                                            @endif
                                        @endif
                                        @if ($rows->S34_E4=='1')
                                            @if (App\TemporarySubject::where('subject_name','S34_E4')->exists())
                                                <button class="btn btn-info btn-mini" title="Software Construction">SCSJ4383</button>
                                            @endif
                                        @endif
                                        @if ($rows->S35_E4=='1')
                                                @if (App\TemporarySubject::where('subject_name','S35_E4')->exists())
                                                    <button class="btn btn-info btn-mini" title="Real-Time Software Engineering">SCSJ4423</button>
                                                @endif
                                        @endif
                                        @if ($rows->S36_E4=='1')
                                            @if (App\TemporarySubject::where('subject_name','S36_E4')->exists())
                                                <button class="btn btn-info btn-mini" title="Web Technology">SCSJ4483</button>
                                            @endif
                                        @endif
                                        @if ($rows->S37_E4=='1')
                                            @if (App\TemporarySubject::where('subject_name','S37_E4')->exists())
                                                <button class="btn btn-info btn-mini" title="Agent-Oriented Software Engineering">SCSJ4463</button>
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <!--end-main-container-part-->

@endsection
