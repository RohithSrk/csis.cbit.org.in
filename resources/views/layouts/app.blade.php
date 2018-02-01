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

    <style type="text/css">
        .feedback-dashboard .navbar-container,
        .feedback-dashboard .page,
        .feedback-dashboard #site-footer {
            margin-left: 0;
        }

        .col-print-1 {width:8%;  float:left;}
        .col-print-2 {width:16%; float:left;}
        .col-print-3 {width:25%; float:left;}
        .col-print-4 {width:33%; float:left;}
        .col-print-5 {width:42%; float:left;}
        .col-print-6 {width:50%; float:left;}
        .col-print-7 {width:58%; float:left;}
        .col-print-8 {width:66%; float:left;}
        .col-print-9 {width:75%; float:left;}
        .col-print-10{width:83%; float:left;}
        .col-print-11{width:92%; float:left;}
        .col-print-12{width:100%; float:left;}
    </style>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @yield ('content')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
