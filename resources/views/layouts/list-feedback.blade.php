@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            @include ('partials.alerts')

            @if( $feedback_items->count() )
                <div class="page-header">
                    <h1 class="page-title ">Add Feedback</h1>
                </div>

                <!-- .page-header -->
                <div class="page-content">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">List of all available feedback</h4>
                                </div>

                                <div class="panel-body marks-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0 th-bb-n">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th colspan="4">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $i = 0 @endphp
                                            @foreach( $feedback_items as $feedback_item )
                                                <tr>
                                                    <td class="width-50">{{ ++$i }}</td>
                                                    <td >{{ $feedback_item->name }}</td>
                                                    <td class="width-100"><a href="/feedback-data/{{$feedback_item->id}}/add" class="btn btn-sm btn-default">Add Data</a></td>
                                                    <td class="width-100"><a href="/feedback/{{$feedback_item->id}}/edit" class="btn btn-sm btn-default">Edit Name/Dates</a></td>
                                                    <td class="width-100"><a href="/feedback-data/{{$feedback_item->id}}/edit" class="btn btn-sm btn-default">Edit Data</a></td>
                                                    <td class="width-100"><a href="/feedback/{{$feedback_item->id}}/delete" class="btn btn-sm btn-default">Delete</a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div><!-- .table-responsive -->
                                </div><!-- .panel-body -->
                            </div><!-- .panel -->
                        </div><!-- .col-lg-12 -->
                    </div><!-- .row -->

                </div><!-- .page-content -->
            @else
                <div class="alert alert-danger mg-top-15 text-left">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    No feedback available. Please create a new feedback by clicking <a href="{{ action('FeedbackController@create') }}">here</a>
                </div>
            @endif

        </div>
    </div><!-- .page -->
@endsection