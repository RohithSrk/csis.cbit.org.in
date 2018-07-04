@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">
            @if( $electives->count() )
            <div class="page-header">
                <h1 class="page-title ">Elective Statistics</h1>
            </div>

            <div class="page-content">
                @foreach( $electives as $elective )
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">{{ $elective->name }} ({{ $elective->semester->name }})</h4>
                            </div>

                            <div class="panel-body">
                                <canvas class="elective-report-chart" id="elective-report-chart-{{ $elective->id }}"
                                        data-elective-id="{{ $elective->id }}" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
                <div class="alert alert-danger mg-top-15 text-left">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    <strong>Error:</strong> No electives available.
                </div>
            @endif
        </div>
    </div>
@endsection