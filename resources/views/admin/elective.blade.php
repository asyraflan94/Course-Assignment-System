@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin/dashboard')}}" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="" class="current">Elective Course List</a> </div>
            <h1>Elective course list</h1>
        </div>
        <div class="container-fluid"><hr>
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>Data table</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <tbody>
                            <tr>
                                <th>E1</th>
                                @foreach ($E1 as $e1)
                                <td>{{$e1->subject_name}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>E2</th>
                                @foreach ($E2 as $e2)
                                <td>{{$e2->subject_name}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>E3</th>
                                @foreach ($E3 as $e3)
                                <td>{{$e3->subject_name}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th>E4</th>
                                @foreach ($E4 as $e4)
                                <td>{{$e4->subject_name}}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
