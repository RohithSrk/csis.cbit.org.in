<div id="site-navbar">
    <div class="header hidden">
        <div class="logo font-1">
            <h1>CBIT Anonymous Feedback System</h1>
            <img src="{{asset('images/logo.png')}}" width="100" alt="CBIT Logo">
            <span class="logo-text" style="display: inline-block">CBIT Student Info.</span>
        </div><!-- .logo -->
    </div><!-- .header -->
    <div class="navbar-container container-fluid clearfix">

        <ul class="nav navbar-nav navbar-left account-settings">
            <li class="welcome-text"><h2 style="margin-top: 18px;">CBIT Anonymous Feedback System</h2></li>
        </ul>

        <ul class="nav navbar-nav navbar-right account-settings">
            <li class="welcome-text"><span>Welcome, {{ $username }}</span></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-caret-down"></span></a>
                <ul class="dropdown-menu">
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
