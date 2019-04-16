@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
      <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a></div>
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
                    <h5>General Subject List for Final Year</h5>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--end-main-container-part-->

@endsection
