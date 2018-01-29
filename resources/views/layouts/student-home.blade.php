@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">
            <div class="page-header">
                <h1 class="page-title ">Dashboard</h1>
            </div>

            <div class="page-content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">My Courses</h4>
                            </div>

                            <div class="panel-body marks-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 th-bb-n">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Course Name</th>
                                            <th>Course Type</th>
                                        </tr>
                                        </thead>
                                        <tbody id="lab-mark-types">
                                        @php $i = 0 @endphp
                                        @foreach( $subjects as $subject )
                                            <tr>
                                                <td class="width-50">{{ ++$i }}</td>
                                                <td>{{ $subject->name }}</td>
                                                <td>{{ ucwords($subject->type) }}</td>
                                            </tr>
                                        @endforeach
                                        @if( empty( $subjects ) )
                                        <tr>
                                            <td colspan="4" align="center" class="alert alert-danger">No courses found!</td>
                                        </tr>
                                        @endif
                                        </tbody>
                                    </table><!-- .table-responsive -->
                                </div>
                            </div>
                        </div><!--.panel-->
                    </div>
                    <div class="col-lg-4">
                        <div id="dashboard-calendar"></div>
                    </div>
                </div><!-- .page-content -->
            </div>
        </div><!-- .page-main -->
    </div>
@endsection