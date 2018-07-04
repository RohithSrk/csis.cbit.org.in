@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            @include ('partials.alerts')

            <div class="page-header">
                <h1 class="page-title ">Elective Report</h1>
            </div><!-- .page-header -->

            <div class="page-content">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Select Elective</h4>
                            </div>
                            {{ Form::open(['action' => 'ElectiveReportController@viewReport', 'method' => 'post']) }}

                            <div class="panel-body admin-form">
                                <div class="col-md-4">
                                    <div class="section">
                                        <label for="select_elective" class="field-label">Select Elective</label>
                                        <label for="select_elective" class="field">
                                            {{  Form::select('elective', $electives_arr, $elective_id ?? '', [
                                                'class' => 'form-control select',
                                                'id' => 'select_elective' ]) }}
                                        </label>
                                    </div><!-- section -->
                                </div><!-- col-md-4 -->

                                <div class="col-md-4">
                                    <div class="section">
                                        <label for="select_subject" class="field-label">Select Subject</label>
                                        <label for="select_subject" class="field">
                                            {{  Form::select('subject[]', $subjects_arr, $subject_id ?? '', [
                                                'class' => 'form-control all-selector select',
                                                'id' => 'select_subject', 'multiple' => 'multiple', 'required' ]) }}
                                        </label>
                                    </div><!-- section -->
                                </div><!-- col-md-4 -->

                                <div class="col-md-4">
                                    <div class="section">
                                        <label for="select_section" class="field-label">Select Section</label>
                                        <label for="select_section" class="field">
                                            {{  Form::select('section[]', $sections_arr, $section_id ?? '', [
                                                'class' => 'form-control all-selector select',
                                                'id' => 'select_section', 'multiple' => 'multiple', 'required' ]) }}
                                        </label>
                                    </div><!-- section -->
                                </div><!-- col-md-4 -->

                            </div><!-- .panel-body -->

                            <div class="panel-footer admin-form" align="right">
                                <input type="submit" class="btn btn-sm btn-primary" value="Get Report">
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div><!-- .col-lg-12 -->
                </div><!-- .row -->

                @if( ! empty( $students ))
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title left">
                                        {{ count( $students ) == 1 ? '1 Member' : count( $students ) . ' Members' }}
                                    </h4>
                                    <a href="/download-elective-report?{{ http_build_query([
                                    'elective' => $elective_id,
                                    'subject' => $_POST['subject'],
                                    'section' => $_POST['section'] ] ) }}" target="_blank" class="btn btn-sm btn-primary right">Download Excel</a>
                                </div>

                                <div class="panel-body marks-table">
                                    <div class="table-responsive">
                                        @include ( 'partials.elective-report-table' )
                                    </div><!-- .table-responsive -->
                                </div>
                            </div>
                        </div><!-- .col-lg-12 -->
                    </div><!-- .row -->
                @endif

            </div><!-- .page-content -->


        </div>
    </div><!-- .page -->
@endsection