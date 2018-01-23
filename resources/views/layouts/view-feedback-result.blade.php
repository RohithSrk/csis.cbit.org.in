@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">
            @if( $feedback_items->count() )
            <div class="page-header">
                <h1 class="page-title ">Feedback</h1>
            </div>

            <div class="page-content">
                @foreach( $feedback_items as $feedback )
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">{{ $feedback->name }}</h4>
                            </div>

                            <div class="panel-body">
                                <canvas class="faculty-feedback-chart" id="feedback-chart-{{ $feedback->id }}"
                                        data-feedback-id="{{ $feedback->id }}" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
                <div class="alert alert-danger mg-top-15 text-left">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    <strong>Error:</strong> No feedback available.
                </div>
            @endif
        </div>
    </div>
@endsection