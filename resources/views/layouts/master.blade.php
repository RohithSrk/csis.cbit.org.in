@extends('layouts.app')

@section('content')

<div class="site-wrap dashboard">

@include ( 'partials.navbar' )

@include ( 'partials.sidebar' )

@yield( 'page-content' )

@include ( 'partials.footer' )

</div>

@include('partials.js-data')

@endsection

