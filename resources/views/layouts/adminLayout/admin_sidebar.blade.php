
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
      <li class="submenu"> <a href=""><i class="icon icon-th-list"></i> <span>Courses</span> <span class="label label-important">3</span></a>
        <ul>
            <li ><a href="{{url('/admin/scsj')}}">Software Engineering (SCSJ)</a></li>
            <li><a href="{{url('/admin/scsr')}}">Computer Network (SCSR)</a></li>
            <li><a href="{{url('/admin/scsv')}}">Computer Graphic (SCSV)</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <!--sidebar-menu-->
