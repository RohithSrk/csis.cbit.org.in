<aside id="sidebar">

    <ul class="nav navigation">
        <li class="menu-item {{ empty( request()->segment(1) )? 'active' : '' }}">
            <a href="/"><i class="fa fa-home"></i><span class="menu-title">Home</span></a>
        </li>
        <li class="menu-item {{ (request()->segment(2) == 'view-lab-marks') ? 'active' : '' }}">
            <a href="{{ action('LabMarksController@studentIndexLabMarks') }}"><i class="fa fa-list-alt"></i><span
                        class="menu-title">View Lab Marks</span></a>
        </li>
        <li class="menu-item hidden">
            <a href="{{ URL::to('logout') }}"><i class="fa fa-sign-out"></i><span class="menu-title">Logout</span></a>
        </li>
        <li class="menu-item hidden">
            <a href="#"><i class="fa fa-info-circle"></i><span class="menu-title">About</span></a>
        </li>
    </ul>

</aside><!-- #sidebar -->