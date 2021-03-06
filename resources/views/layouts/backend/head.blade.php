<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
            data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        {{-- Logo --}}
        <div class="top-left-part">
            <a class="logo" href="index.html">
                {{-- Logo icon image, you can use font-icon also --}}<b><img src="../plugins/images/pixeladmin-logo.png"
                        alt="home" /></b>
                {{-- Logo text image you can use text also --}}<span class="hidden-xs"><img src="../plugins/images/pixeladmin-text.png"
                        alt="home" /></span> </a>
        </div>
        {{-- /Logo --}}
        <ul class="nav navbar-top-links navbar-left hidden-xs active">
            <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="ti-menu icon-arrow-left-circle"></i></a></li>
            
        </ul>
        {{-- This is the message dropdown --}}
        <ul class="nav navbar-top-links navbar-right pull-right">
            {{-- /.dropdown --}}
            
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="../plugins/images/users/varun.jpg"
                        alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{Auth::user()->email}}</b> </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li><a href="{{route('site.logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
                {{-- /.dropdown-user --}}
            </li>
            {{-- /.dropdown --}}
        </ul>
    </div>
    {{-- /.navbar-header --}}
    {{-- /.navbar-top-links --}}
    {{-- /.navbar-static-side --}}
</nav>