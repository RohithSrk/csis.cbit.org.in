@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">
            <div class="page-header">
                <h1 class="page-title hidden"></h1>
            </div>

            <div class="page-content">
                {{ $msg }}
            </div>
        </div>
    </div>
@endsection
