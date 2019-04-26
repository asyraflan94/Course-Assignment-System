@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
      <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="" class="current">System Analysis and Design</a> </div>
    </div>
    <!--End-breadcrumbs-->
    <div class="row-fluid">
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>System Analysis and Design</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Student name</th>
                                <th>Student matrix</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($subject as $index => $stud)
                            <tr class="gradeX">
                                <td style="text-align:center">{{$index +1}}</td>
                                <td><a href="{{url('/admin/student/'.$stud->id)}}" target="_blank">{{$stud->student_name}}</td>
                                <td>{{$stud->matrix_no}}</td>
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
