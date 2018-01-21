<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">Select Students</h4>
            </div>
            <form class="form-horizontal" action="/students/add-lab-marks" method="post">

                {{ csrf_field() }}

                <div class="panel-body admin-form">

                    <div class="col-md-6">
                        <div class="section">
                            <label for="select_subject" class="field-label">Select Course</label>
                            <label for="select_subject" class="field">
                                {{  Form::select('subject', $subjects, isset($subject_id)? $subject_id : '' , [
                                    'class' => 'form-control select',
                                    'id' => 'select_subject' ]) }}
                            </label>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="section">
                            <label for="select_section" class="field-label">Select Section</label>
                            <label for="select_section" class="field">
                                {{  Form::select('section',$sections, isset($section_id)? $section_id : '' , [
                                    'class' => 'form-control select',
                                    'id' => 'select_section' ]) }}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="section">
                            <label for="select_batch" class="field-label">Select Batch</label>
                            <label for="select_batch" class="field">
                                {{  Form::select('batch',$batches, isset($batch_id)? $batch_id : '' , [
                                    'class' => 'form-control select',
                                    'id' => 'select_batch' ]) }}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="section">
                            <label for="select_labweek" class="field-label">Select Week</label>
                            <label for="select_labweek" class="field">
                                {{  Form::select('lab_week',$lab_weeks, isset($lab_week_id)? $lab_week_id: '' , [
                                    'class' => 'form-control select',
                                    'id' => 'select_labweek' ]) }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="panel-footer admin-form clearfix">
                    <input type="submit" class="btn btn-primary right" value="Get Students">
                    <div class="section col-sm-3 right">
                        <label for="date" class="field-label hidden">Select Date</label>
                        <label for="date" class="field">
                            <div class="input-group date ">
                                    <span class="input-group-addon cursor">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                <input type="text" id="date" name="date" value="{{ $date }}"
                                       class="form-control gui-input datetimepicker" placeholder="dd/mm/yyyy">
                            </div>
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- .col-lg-12 -->
</div><!-- .row -->