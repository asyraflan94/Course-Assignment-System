<!--Header-part-->
<div id="header">
    <h1><a href="{{url('/admin/dashboard')}}">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome Mohd Asyraf</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
            {{-- <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
            <li class="divider"></li> --}}
            <li><a href="{{url('/admin/setting')}}"><i class="icon-key"></i> Change Password</a></li>
            </ul>
        </li>
        {{-- <li class=""><a title="" href="{{url('/admin/setting')}}"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li> --}}
        <li class=""><a title="" href="{{url('/logout')}}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
</div>

