
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i><span>Dashboard</span></a></li>
      {{-- <li class="submenu"> <a href=""><i class="icon icon-th-list"></i> <span>Courses</span> <span class="label label-important">1</span></a>
        <ul>
            <li ><a href="{{url('/admin/scsj')}}">Software Engineering (SCSJ)</a></li>
            <!-- <li><a href="{{url('/admin/scsr')}}">Computer Network (SCSR)</a></li>
            <li><a href="{{url('/admin/scsv')}}">Computer Graphic (SCSV)</a></li> -->
        </ul>
      </li> --}}
      <li class="{{ Request::is('admin/list-of-subject') ? 'active' : '' }}"><a href="{{url('/admin/list-of-subject')}}"><i class="icon icon-list-ol"></i> <span>List of subjects</span></a></li>
      <li class="{{ Request::is('admin/final-year-list') ? 'active' : '' }}"><a href="{{url('/admin/final-year-list')}}"><i class="icon icon-list-ol"></i> <span>List of final year subjects</span></a></li>
      {{-- <li class="{{ Request::is('admin/general-subject') ? 'active' : '' }}"><a href="{{url('/admin/general-subject')}}"><i class="icon icon-list-ol"></i> <span>General Subject</span></a></li> --}}
      <li class="{{ Request::is('admin/generated-subject') ? 'active' : '' }}"><a href="{{url('/admin/generated-subject')}}"><i class="icon icon-list-ol"></i> <span>View Subject Offering List</span></a></li>
      {{-- <li class="{{ Request::is('admin/generate-subject') ? 'active' : '' }}"><a href="{{url('/admin/generate-subject')}}"><i class="icon icon-list-ol"></i> <span>Generate Subject Offering List</span></a></li> --}}

    </ul>
  </div>
  <!--sidebar-menu-->
