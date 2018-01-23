<aside id="sidebar">

    <ul class="nav navigation">
        <li class="menu-item {{ empty( request()->segment(1) )? 'active' : '' }}">
            <a href="/"><i class="fa fa-home"></i><span class="menu-title">Home</span></a>
        </li>
        @if(auth()->user()->hasAnyRole(['HOD', 'Editor']))
            <li class="menu-item {{ (request()->segment(2) == 'assign-courses' )? 'active' : '' }}">
                <a href="{{ action('CoursesController@index') }}"><i class="fa fa-link"></i><span class="menu-title">Assign Courses</span></a>
            </li>
        @endif
        @if(auth()->user()->hasAnyRole(['Faculty']))
        <li class="menu-item {{ (request()->segment(2) == 'add-lab-marks') ? 'active' : '' }}">
            <a href="{{ action('LabMarksController@index') }}"><i class="fa fa-list"></i><span class="menu-title">Add/Edit Lab Marks</span></a>
        </li>
        <li class="menu-item {{ (request()->segment(2) == 'add-absentee-lab-marks') ? 'active' : '' }}">
            <a href="{{  action('AbsenteeLabMarksController@index') }}"><i class="fa fa-user-o"></i><span
                        class="menu-title">Add Marks for Absentee</span></a>
        </li>
        <li class="menu-item {{ (request()->segment(2) == 'view-lab-marks') ? 'active' : '' }}">
            <a href="{{ action('LabMarksController@indexLabMarks') }}"><i class="fa fa-list-alt"></i><span
                        class="menu-title">View Lab Marks</span></a>
        </li>
        <li class="menu-item {{ (request()->segment(2) == 'manage-mark-types') ? 'active' : '' }}">
            <a href="{{ action('LabMarkTypesController@index') }}"><i class="fa fa-columns"></i><span
                        class="menu-title">Labmark Division</span></a>
        </li>
        @endif
        @if(auth()->user()->hasAnyRole(['HOD', 'Editor', 'Principal']))
        <li class="menu-item {{ (request()->is('feedback/create')) ? 'active' : '' }}">
            <a href="{{ action('FeedbackController@create') }}"><i class="fa fa-comment-o"></i><span class="menu-title">Create Feedback</span></a>
        </li>
        @endif
        @if(auth()->user()->hasAnyRole(['Faculty']))
            <li class="menu-item {{ (request()->is('feedback/view')) ? 'active' : '' }}">
                <a href="{{ action('FeedbackController@viewResult') }}"><i class="fa fa-area-chart"></i><span
                            class="menu-title">View Feedback</span></a>
            </li>
        @endif
        @if(auth()->user()->hasAnyRole(['HOD', 'Editor', 'Principal']))
            <li class="menu-item {{ (request()->is('feedback/view-report')) ? 'active' : '' }}">
                <a href="{{ action('FeedbackController@viewReport') }}"><i class="fa fa-bar-chart-o"></i><span
                            class="menu-title">Feedback Report</span></a>
            </li>
        @endif
        @if(auth()->user()->hasAnyRole(['HOD', 'Editor']))
        <li class="menu-item {{ (request()->is('feedback/list') || request()->is('feedback-data/*/add')) ? 'active' : '' }}">
            <a href="{{ action('FeedbackController@index') }}"><i class="fa fa-pencil-square-o"></i><span
                        class="menu-title">Manage Feedback Data</span></a>
        </li>
        @endif
        <li class="menu-item hidden">
            <a href="#"><i class="fa fa-calendar-o"></i><span class="menu-title">Events</span></a>
        </li>
        <li class="menu-item hidden">
            <a href="#"><i class="fa fa-calendar-o"></i><span class="menu-title">Add/Update Event</span></a>
        </li>
        <li class="menu-item hidden">
            <a href="{{ URL::to('logout') }}"><i class="fa fa-sign-out"></i><span class="menu-title">Logout</span></a>
        </li>
        <li class="menu-item hidden">
            <a href="#"><i class="fa fa-info-circle"></i><span class="menu-title">About</span></a>
        </li>
    </ul>

</aside><!-- #sidebar -->