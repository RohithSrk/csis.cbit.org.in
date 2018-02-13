<div id="site-navbar">
    <div class="header">
        <div class="mb-menu-btn">
            <a href="#" class="nav-menu-main menu-toggle"><i class="fa fa-bars"></i></a>
        </div>
        <div class="mb-navbar-btn">
            <a href="#" class="navbar-toggle" data-toggle="collapse" data-target="#navbar"><i class="fa fa-ellipsis-v"></i></a>
        </div>
        <div class="logo font-1">
            <img src="{{asset('images/logo.png')}}" width="100" alt="CBIT Logo">
            <span class="logo-text" style="display: inline-block">CBIT Student Info.</span>
        </div><!-- .logo -->
    </div><!-- .header -->
    <div class="navbar-container collapse navbar-collapse container-fluid clearfix" id="navbar">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="#" id="menu-btn"><i class="fa fa-bars"></i></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right account-settings">

                <li class="dropdown dropdown-user nav-item">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link" aria-expanded="false">
                        @if( auth()->user()->hasRole( 'Student' ) )
                            <span class="user-name">Welcome, {{ auth()->user()->student()->first()->name }}</span>
                        @else
                            <span class="user-name">Welcome, {{ auth()->user()->employee()->first()->name }}</span>
                        @endif
                        <span class="avatar avatar-online">
                            <img width="40" src="http://blog.springfield.k12.or.us/yolanda/files/2009/02/person-placeholder-5.png" alt="avatar">
                        </span>
                        <span><i class="fa fa-angle-down"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right hidden"><a href="#" class="dropdown-item"><i
                                    class="ft-user"></i> Edit Profile</a><a href="#" class="dropdown-item"><i
                                    class="ft-mail"></i> My Inbox</a><a href="#" class="dropdown-item"><i
                                    class="ft-check-square"></i> Task</a><a href="#" class="dropdown-item"><i
                                    class="ft-message-square"></i> Chats</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="ft-power"></i> Logout</a>
                    </div>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="disabled"><a href="#"><span class="fa fa-user-circle-o"></span> Profile Settings</a></li>
                        <li><a href="{{ action('HomeController@showChangePasswordForm') }}"><span class="fa fa-cog"></span> Change Password</a></li>
                        <li class="divider" role="separator"></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="fa fa-power-off"></span>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            <li class="dropdown hidden">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-caret-down"></span></a>
                <ul class="dropdown-menu">
                    <li class="disabled"><a href="#"><span class="fa fa-user-circle-o"></span> Profile Settings</a></li>
                    <li><a href="{{ action('HomeController@showChangePasswordForm') }}"><span class="fa fa-cog"></span> Change Password</a></li>
                    <li class="divider" role="separator"></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="fa fa-power-off"></span>Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div><!-- .navbar-container -->
</div><!-- #site-navbar -->
