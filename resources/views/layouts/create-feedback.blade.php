@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            @include ('partials.alerts')

            <div class="page-header">
                <h1 class="page-title ">Create Feedback</h1>
            </div>

            <!-- .page-header -->
            <div class="page-content">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Create new feedback</h4>
                            </div>
                            {{ Form::open(array('action' => 'FeedbackController@store', 'method' => 'post')) }}

                            <div class="panel-body admin-form">

                                <div class="col-md-6">
                                    <div class="section">
                                        <label for="feedback-name" class="field-label">Feedback Name</label>
                                        <label for="feedback-name text" class="field">
                                            {{  Form::text('feedback-name', $feedback_name ?? '', [
                                                'class' => 'form-control',
                                                'id' => 'feedback-name', 'required' ]) }}
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="section">
                                        <label for="start-date" class="field-label">Start Date</label>
                                        <label for="start-date" class="field">
                                            <div class="input-group date ">
                                                <span class="input-group-addon cursor">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="text" id="start-date" name="start-date" value="{{ $start_date }}"
                                                       class="form-control gui-input datetimepicker" placeholder="dd/mm/yyyy">
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="section">
                                        <label for="end-date" class="field-label">End Date</label>
                                        <label for="end-date" class="field">
                                            <div class="input-group date">
                                                <span class="input-group-addon cursor">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="text" id="end-date" name="end-date" value="{{ $end_date }}"
                                                       class="form-control gui-input datetimepicker" placeholder="dd/mm/yyyy">
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="section">
                                        <label for="select_feedback_type" class="field-label">Select Type</label>
                                        <label for="select_feedback_type" class="field">
                                            {{  Form::select('feedback-type', [ 'new' => 'New', 'old' => 'Old' ], $feedback_type ?? '' , [
                                                'class' => 'form-control select',
                                                'id' => 'select_feedback_type' ]) }}
                                        </label>
                                    </div>
                                </div>

                            </div><!-- .panel-body -->
                            <div class="panel-footer admin-form" align="right">
                                <input type="submit" class="btn btn-sm btn-primary" value="Create">
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div><!-- .col-lg-12 -->
                </div><!-- .row -->

            </div><!-- .page-content -->

        </div>
    </div><!-- .page -->
@endsection