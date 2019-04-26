@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
      <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a></div>
        @if(Session::has('flash_message_success'))
            <div id="alertThis" class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_success')!!}</strong>
            </div>
        @elseif(Session::has('flash_message_error'))
            <div id='alertThis' class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_error')!!}</strong>
            </div>
        @endif
      </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
    <div class="row-fluid">
        <div class="card-body" align="center">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control"><br>
                <button class="btn btn-success" style="margin-top:1%;height:30px;width:190px"><i class="icon-file"></i> Import Student Data</button>
            </form>
        </div>
        <div class="row-fluid" align="center">
            <a class="btn btn-danger" role="button" style="margin-top:1%" href="{{url('/admin/generate-subject')}}"><i class="icon-retweet"></i> Generate Offering List</a>
        </div>
    </div>
    <hr>
    <div class="row-fluid">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Student data</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>MATRIX NO.</th>
                            <th>NAME</th>
                            <th title="Technology & Information System">SCSD1513</th>
                            <th title="Discrete Structure">SCSI1013</th>
                            <th title="Programming Technique 1">SCSJ1013</th>
                            <th title="Digital Logic">SCSR103</th>
                            <th title="Computational Mathematics">SCSI1113</th>
                            <th title="Programming Technique 2">SCSJ1023</th>
                            <th title="Network Communication">SCSR1213</th>
                            <th title="Web Programming">SCSV1223</th>
                            <th title="Database">SCSD2523</th>
                            <th title="Data Structures and Algorithm">SCSJ2013</th>
                            <th title="System Analysis and Design">SCSD2613</th>
                            <th title="Computer Organisation and Architecture">SCSR2033</th>
                            <th title="Human Computer Interaction">SCSV2113</th>
                            <th title="Probability & Statistical Data Analysis">SCSI2143</th>
                            <th title="Object Oriented Programming">SCSJ2154</th>
                            <th title="Software Engineering">SCSJ2203</th>
                            <th title="Operating Systems">SCSR2043</th>
                            <th title="Theory of Computer Science">SCSJ3203</th>
                            <th title="Technopreneurship and Seminar">UCSD2762</th>
                            <th title="Software Engineering Project 1">SCSJ3032</th>
                            <th title="Software Engineering Project 2">SCSJ4134</th>
                            <th title="Pengaturcaraan Pangkalan Data">SCSD2623</th>
                            <th title="Requirement Engineering & Software Modeling">SCSJ2253</th>
                            <th title="Software Project Management">SCSJ2363</th>
                            <th title="Artificial Intelligent">SCSJ3553</th>
                            <th title="Application Development">SCSJ3104</th>
                            <th title="Internet Programming">SCSJ3303</th>
                            <th title="Software Quality Assurance">SCSJ3343</th>
                            <th title="Knowledge-based & Expert System">SCSJ3603</th>
                            <th title="Software Design and Architecture">SCSJ3323</th>
                            <th title="Computational Intelligence">SCSJ3563</th>
                            <th title="Programming Technique 3">SCSJ3253</th>
                            <th title="Special Topic in Software Engineering">SCSJ3403</th>
                            <th title="Software Construction">SCSJ4383</th>
                            <th title="Real-time Software Engineering">SCSJ4423</th>
                            <th title="Web Technology">SCSJ4483</th>
                            <th title="Agent-Oriented Software Engineering">SCSJ4463</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $index => $student)
                        <tr class="gradeX">
                            <td style="text-align:center">{{$index+1}}</td>
                            <td>{{$student->matrix_no}}</td>
                            <td>{{$student->student_name}}</td>
                            <td style="text-align:center">{{$student->S1}}</td>
                            <td style="text-align:center">{{$student->S2}}</td>
                            <td style="text-align:center">{{$student->S3}}</td>
                            <td style="text-align:center">{{$student->S4}}</td>
                            <td style="text-align:center">{{$student->S6}}</td>
                            <td style="text-align:center">{{$student->S7}}</td>
                            <td style="text-align:center">{{$student->S7}}</td>
                            <td style="text-align:center">{{$student->S8}}</td>
                            <td style="text-align:center">{{$student->S9}}</td>
                            <td style="text-align:center">{{$student->S10}}</td>
                            <td style="text-align:center">{{$student->S11}}</td>
                            <td style="text-align:center">{{$student->S12}}</td>
                            <td style="text-align:center">{{$student->S13}}</td>
                            <td style="text-align:center">{{$student->S14}}</td>
                            <td style="text-align:center">{{$student->S15}}</td>
                            <td style="text-align:center">{{$student->S16}}</td>
                            <td style="text-align:center">{{$student->S17}}</td>
                            <td style="text-align:center">{{$student->S18}}</td>
                            <td style="text-align:center">{{$student->S19}}</td>
                            <td style="text-align:center">{{$student->S20}}</td>
                            <td style="text-align:center">{{$student->S21}}</td>
                            <td style="text-align:center">{{$student->S22_E1}}</td>
                            <td style="text-align:center">{{$student->S23_E1}}</td>
                            <td style="text-align:center">{{$student->S24_E1}}</td>
                            <td style="text-align:center">{{$student->S25_E2}}</td>
                            <td style="text-align:center">{{$student->S26_E2}}</td>
                            <td style="text-align:center">{{$student->S27_E2}}</td>
                            <td style="text-align:center">{{$student->S28_E2}}</td>
                            <td style="text-align:center">{{$student->S29_E2}}</td>
                            <td style="text-align:center">{{$student->S30_E3}}</td>
                            <td style="text-align:center">{{$student->S31_E3}}</td>
                            <td style="text-align:center">{{$student->S32_E3}}</td>
                            <td style="text-align:center">{{$student->S33_E3}}</td>
                            <td style="text-align:center">{{$student->S34_E4}}</td>
                            <td style="text-align:center">{{$student->S35_E4}}</td>
                            <td style="text-align:center">{{$student->S36_E4}}</td>
                            <td style="text-align:center">{{$student->S37_E4}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!--end-main-container-part-->
@endsection
<script type="text/javascript">
    setTimeout(function() {
        $('#alertThis').fadeOut('slow');
    }, 3000); // <-- time in milliseconds
</script>
