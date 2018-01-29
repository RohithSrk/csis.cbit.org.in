@extends('layouts.app')

@section('content')

<div class="site-wrap dashboard">

@include ( 'partials.navbar' )

    @if ( auth()->user()->hasRole( 'Student' ) )
        @include ( 'partials.student-sidebar' )
    @else
        @include ( 'partials.sidebar' )
    @endif

@yield( 'page-content' )

@include ( 'partials.footer' )

</div>

@include('partials.js-data')

@endsection

