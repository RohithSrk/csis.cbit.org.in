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
        body select.course-selector {
            display: none;
        }

        body select.faculty-selector {
            display: none;
        }
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
