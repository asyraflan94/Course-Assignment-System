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
                    <h5>Suggested General Subject List for Final Year</h5>
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
                                        <td style="text-align:center; background-color:#F5F5DC;">{{$index+1}}</td>
                                        <td style="background-color:#F5F5DC;">{{$sub->subject_long_name}}</td>
                                        <td style="background-color:#F5F5DC; text-align:center">{{$sub->subject_code}}</td>
                                        <td style="background-color:#F5F5DC; text-align:center">{{$sub->subject_type}}</td>
                                    @else
                                        <td style="text-align:center; background-color:#ADD8E6;">{{$index+1}}</td>
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
        </div>
    </div>

    <!--end-main-container-part-->

@endsection
