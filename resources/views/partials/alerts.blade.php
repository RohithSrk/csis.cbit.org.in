@if( Session::has('success') )
    <div class="alert alert-success fade in alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        <strong>Success!</strong> {{Session::get('success')}}
        {{Session::forget('success')}}
    </div>
@endif

@if( count( $errors->all() ) )
    <ul class="alert alert-danger mg-top-15 text-left">
        @foreach( $errors->all() as $error )
            <li style="margin-left: 18px;">{{$error}}</li>
        @endforeach
    </ul>
@endif