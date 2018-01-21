@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            @include ('partials.alerts')

            @if( ! empty( $subjects ) )
                <div class="page-header">
                    <h1 class="page-title">Lab Mark Types</h1>
                </div>

                <!-- .page-header -->
                <div class="page-content">

                    <div class="row">
                        <div class="col-lg-9">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Select a course to add/remove mark types.</h4>
                                </div>
                                {{ Form::open( array('action' => 'LabMarkTypesController@create', 'method' => 'post',
                                    'class' => 'form-horizontal' ) ) }}

                                <div class="panel-body admin-form">

                                    <div class="col-lg-8">
                                        <div class="section">
                                            <label for="select_subject" class="field-label">Select Course</label>
                                            <label for="select_subject" class="field">
                                                {{  Form::select('subject', $subjects, $subject_id ?? '' , [
                                                    'class' => 'form-control select',
                                                    'id' => 'select_subject' ]) }}
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="panel-footer admin-form" align="right">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Get Mark Types">
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div><!-- .col-lg-12 -->
                    </div><!-- .row -->

                    @if( ! empty( $labMarkTypes ) )

                        <div class="row">
                            <div class="col-lg-9">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Lab Mark Types for {{ $subject->name }}</h4>
                                    </div>
                                    {{ Form::open(array('action' => 'LabMarkTypesController@store', 'method' => 'put')) }}
                                    {{ Form::hidden('subject', $subject_id) }}


                                    <div class="panel-body marks-table">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0 th-bb-n">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Max Marks</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody id="lab-mark-types">
                                                @php
                                                    $lmt_i = 1;
                                                @endphp
                                                @foreach( $labMarkTypes as $labMarkType )
                                                    <tr>
                                                        <td class="width-50">{{ $lmt_i }}</td>
                                                        <td class="">
                                                            {{Form::text( 'labMarkType[' . $lmt_i . '][]'  , $labMarkType->name,
                                                              array('class' => 'form-control'))}}
                                                        </td>
                                                        <td class="width-100">
                                                            {{Form::number( 'labMarkType[' . $lmt_i . '][]'  , $labMarkType->max_marks,
                                                              array('class' => 'form-control'))}}
                                                        </td>
                                                        <td class="width-100">
                                                            <button class="btn btn-sm btn-default remove-mark-type">Remove</button>
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $lmt_i++;
                                                    @endphp
                                                @endforeach
                                                <tr>
                                                    <td class="width-50">{{ $lmt_i }}</td>
                                                    <td class="">
                                                        {{Form::text( 'labMarkType[' . $lmt_i . '][]'  , '',
                                                          array('class' => 'form-control'))}}
                                                    </td>
                                                    <td class="width-100">
                                                        {{Form::number( 'labMarkType[' . $lmt_i . '][]'  , '',
                                                          array('class' => 'form-control'))}}
                                                    </td>
                                                    <td class="width-100">
                                                        <button class="btn btn-sm btn-default remove-mark-type">Remove</button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- .table-responsive -->
                                    </div>
                                    <div class="" style="padding: 15px;">
                                        <button class="btn btn-sm btn-default add-mark-type">Add Mark Type</button>
                                    </div>
                                    <div class="panel-footer admin-form" align="right">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Submit">
                                    </div>
                                    {{ Form::close() }}
                                </div>
                            </div><!-- .col-lg-12 -->
                        </div><!-- .row -->
                    @endif

                </div><!-- .page-content -->
            @endif

        </div>
    </div><!-- .page -->
@endsection