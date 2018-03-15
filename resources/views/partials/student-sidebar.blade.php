<aside id="sidebar">

    <ul class="nav navigation">
        <li class="menu-item {{ empty( request()->segment(1) )? 'active' : '' }}">
            <a href="/"><i class="fa fa-home"></i><span class="menu-title">Home</span></a>
        </li>
        <li class="menu-item {{ (request()->is('lab-marks/view')) ? 'active' : '' }}">
            <a href="{{ action('LabMarksController@studentIndexLabMarks') }}"><i class="fa fa-list-alt"></i><span
                        class="menu-title">View Lab Marks</span></a>
        </li>
        <li class="menu-item hidden">
            <a href="{{ URL::to('logout') }}"><i class="fa fa-sign-out"></i><span class="menu-title">Logout</span></a>
        </li>
        <li class="menu-item hidden">
            <a href="#"><i class="fa fa-info-circle"></i><span class="menu-title">About</span></a>
        </li>
        <li class="menu-item {{ (request()->is('student/view-exam-marks')) ? 'active' : '' }}">
            <a href="{{ action('ExamMarksController@show') }}"><i class="fa fa-list"></i><span
                        class="menu-title">View Mid Marks</span></a>
        </li>
    </ul>

</aside><!-- #sidebar -->