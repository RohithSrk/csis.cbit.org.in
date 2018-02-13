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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style type="text/css">
        .mb-navbar-btn, .mb-menu-btn {
            display: none;
        }

        #site-navbar .navbar-nav > li > a.dropdown-toggle {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .account-settings {

        }

        .dropdown-user .user-name {
            font-size: 15px;
            margin-right: 8px;
        }


        /* ======================================================
   Responsive Styles
   ====================================================== */

        @media only screen and (max-width: 1199px){
            .site-widget.notumn_about_widget {
                padding: 0 50px;
            }
        }

        /* ==============================
           Tablet Landscape
           ============================== */

        @media only screen and (max-width: 1024px){

        }

        @media only screen and (max-width: 991px){

        }

        /* ==============================
           Tablet Portrait
           ============================== */

        @media only screen and (max-width: 782px){
            .nav.navbar-nav.navbar-left {
                display: none;
            }

            #sidebar {
                top: 60px;
                height: 100%;

                -webkit-transition: left 0.25s, opacity 0.25s;
                -moz-transition: left 0.25s, opacity 0.25s;
                -o-transition: left 0.25s, opacity 0.25s;
                transition: left 0.25s, opacity 0.25s;
                opacity: 0;
                left: -260px;
            }

            #sidebar.sb-open {
                left: 0;
                opacity: 1;
            }

            #site-navbar .header {
                height: auto;
                width: 100%;

                border: 1px solid #ccc;
                border: 1px solid rgba(0, 0, 0, 0.15);
                -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            }

            #site-navbar {
            }

            #site-navbar .logo > img {
                width: 30px;
            }

            #site-navbar .header {
                 padding: 0;
            }

            #site-navbar .navbar-container {
                margin-left: auto;
                margin-top: 60px;
                position: relative;
            }

            .page {
                margin-left: auto;
            }


            #site-footer {
                margin-left: auto;
            }

            #navbar .navbar-right .dropdown {
                /*display: none;*/
            }

            #navbar .navbar-nav {
                margin: 0;
            }

            #site-navbar .mb-menu-btn,
            #site-navbar .mb-navbar-btn {
                display: block;
            }

            #site-navbar .mb-menu-btn .menu-toggle {
                position: relative;
                float: left;
                margin-left: 15px;
                padding: 9px 10px;
                /*margin-top: 8px;*/
                /*margin-bottom: 8px;*/
                background-color: transparent;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 4px;
                font-size: 24px;
                color: white;
            }

            #site-navbar .mb-navbar-btn .navbar-toggle {
                font-size: 24px;
                color: white;
                margin-top: 0;
                margin-bottom: 0;
            }

            #site-navbar .mb-navbar-btn .navbar-toggle.active,
            #site-navbar .mb-menu-btn .menu-toggle.active {
                color: #53a6fa;
            }



            .navbar-nav .open .dropdown-menu {
                position:  absolute;
                width: 100%;
                background-color: #fff;
                border-top: 1px solid #dadada;
                border: 1px solid #ccc;
                border: 1px solid rgba(0, 0, 0, 0.15);
                /*border-radius: 4px;*/
                -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            }

            .navbar-collapse.in {
                overflow-y: visible;
            }

            #site-navbar .dropdown.dropdown-user.nav-item {
                position: static;
            }
            
            #site-navbar .nav .open > a:focus {
                background-color: #fff;
            }
        }


        @media only screen and (max-width: 767px){

        }

        /* ==============================
           Mobile Landscape
           ============================== */


        @media only screen and (max-width: 675px) {

        }

        @media only screen and (max-width: 600px) {

        }

        @media only screen and (min-width: 676px) {

        }

        @media only screen and (max-width: 568px){
            .page {
                min-height: calc(100% - 76px);
            }

            #site-footer {
                text-align: center;
            }

            .site-footer-legal {
                float: none;
            }
            .site-footer-right {
                float: none;
                margin-bottom: 10px;
            }
        }

        @media only screen and (max-width: 530px) {

        }

        /* ==============================
           Mobile Portrait
           ============================== */

        @media only screen and (max-width: 479px){

        }

        @media only screen and (max-width: 420px){
            .page {
                min-height: calc(100% - 98px);
            }
        }

        @media only screen and (max-width: 359px) {

        }

        /* ==============================
           Small Phone
           ============================== */

        @media only screen and (max-width: 320px) {

        }

        /* ==============================
           Others
           ============================== */

        @media screen and (min-width: 768px){

        }

        @media screen and (min-width: 992px){

        }

        @media screen and (min-width: 1200px){

        }

        .navbar-left {
            float: left !important;
        }

        .navbar-right {
            float: right !important;
            margin-right: -15px;
        }

        .navbar-right ~ .navbar-right {
            margin-right: 0;
        }
    </style>

</head>
<body>
    @yield ('content')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
