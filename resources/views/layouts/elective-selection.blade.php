<!DOCTYPE html>
<!--
    ,o888888o.        ,o888888o.       d888888o.       ,o888888o.
   8888     `88.   . 8888     `88.   .`8888:' `88.    8888     `88.
,8 8888       `8. ,8 8888       `8b  8.`8888.   Y8 ,8 8888       `8.
88 8888           88 8888        `8b `8.`8888.     88 8888
88 8888           88 8888         88  `8.`8888.    88 8888
88 8888           88 8888         88   `8.`8888.   88 8888
88 8888           88 8888        ,8P    `8.`8888.  88 8888
`8 8888       .8' `8 8888       ,8P 8b   `8.`8888. `8 8888       .8'
   8888     ,88'   ` 8888     ,88'  `8b.  ;8.`8888    8888     ,88'
    `8888888P'        `8888888P'     `Y8888P ,88P'     `8888888P'

A Project made by CBIT Open Source Community members.
Crafted with love by @SrkRohith, @ramlmn, @harshatech
-->
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name') . ' - Login' }}</title>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="/css/elective-styles.css">

    </head>
    <body>

    <div class="site-wrap feedback-dashboard dashboard elective-dashboard">

        <div id="site-navbar">
            <div class="navbar-container container-fluid">
                <h2 class="logo-text">Chaitanya Bharathi <br class="custom-break-1"> Institute of Technology</h2>
            </div><!-- .navbar-container -->
        </div>

        <div class="page" style="margin-left: 0">
            <div class="page-main">

                <div class="page-content">

                    <div class="row">
                        <div class="col-md-4 col-md-offset-4" style="margin-top: 32px">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">{{ $elective->name }} Subject Selection</h4>
                                </div>
                                {{ Form::open(array(
                                'action' => [ 'ElectiveController@store',
                                'user_id' => $_GET['user_id'],
                                'signature' => $_GET['signature'] ], 'method' => 'post')) }}

                                    <input type="hidden" name="signature" value="{{ $_GET['signature'] }}">
                                    <input type="hidden" name="user_id" value="{{ $_GET['user_id'] }}">

                                    <div class="panel-body admin-form">

                                        <div class="section student-details">
                                            <div class="student-detail name">{{ ucwords( strtolower($student->name) ) }}</div>
                                            <div class="student-detail email">{{ $student->email }}</div>
                                            <div class="student-detail year">Year: BE {{ $year->id }}/4</div>
                                        </div><!-- section -->

                                        <div class="section">
                                            <p class="saved-selection"></p>
                                        </div>

                                        <div class="section">
                                            <label for="select_semester" class="field-label">Select a subject</label>
                                            <label for="select_semester" class="field">
                                                {{  Form::select('subject', $subjects_arr, $selected_subject_id ?? '' , [
                                                    'class' => 'form-control select',
                                                    'id' => 'select_subject' ]) }}
                                            </label>
                                        </div><!-- section -->

                                    </div><!-- .panel-body -->

                                    <div class="panel-footer" align="right">
                                        <input type="submit" class="btn btn-block btn-primary" value="Submit">
                                    </div>

                                {{ Form::close() }}
                            </div>
                        </div><!-- .col-lg-12 -->
                    </div><!-- .row -->

                </div><!-- .page-content -->

            </div>
        </div>

        <footer id="site-footer" class="clearfix" style="margin-left: 0">
            <div class="site-footer-right">
                Crafted with <i class="fa fa-heart"></i> by
                <a href="https://twitter.com/SrkRohith" target="_blank">@SrkRohith</a>,
                <a href="https://twitter.com/ramlmn" target="_blank">@ramlmn</a>,
                <a href="https://twitter.com/harshatech" target="_blank">@harshatech</a>
            </div>
            <div class="site-footer-legal">© 2018 <a href="https://cbitosc.github.io/" target="_blank">COSC</a></div>
        </footer>

    </div>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113151008-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-113151008-1');
    </script>

    </body>
</html>
