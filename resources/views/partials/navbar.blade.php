<div id="site-navbar">
    <div class="header">
        <div class="logo font-1">
            <img src="{{asset('images/logo.png')}}" width="100" alt="CBIT Logo">
            <span class="logo-text" style="display: inline-block">CBIT Student Info.</span>
        </div><!-- .logo -->
    </div><!-- .header -->
    <div class="navbar-container container-fluid clearfix">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="#" id="menu-btn"><i class="fa fa-bars"></i></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right account-settings">
            @if( auth()->user()->hasRole( 'Student' ) )
                <li class="welcome-text"><span>Welcome, {{ auth()->user()->student()->first()->name }}</span></li>
            @else
                <li class="welcome-text"><span>Welcome, {{ auth()->user()->employee()->first()->name }}</span></li>
            @endif
            <li class="dropdown">
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
    </div><!-- .nabar-container -->
</div><!-- #site-navbar -->
