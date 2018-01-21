@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            @include ('partials.alerts')

            <div class="page-header">
                <h1 class="page-title ">Assign Faculty for Courses</h1>
            </div>

            <!-- .page-header -->
            <div class="page-content">

                <div class="row">
                    <div class="col-lg-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Select Courses</h4>
                            </div>
                            {{ Form::open( array( 'action' => 'CoursesController@create',
                               'method' => 'post', 'class' => 'form-horizontal' ) ) }}

                                <div class="panel-body admin-form">
                                    <div class="col-md-4">
                                        <div class="section">
                                            <label for="select_semester" class="field-label">Select Semester</label>
                                            <label for="select_semester" class="field">
                                                {{  Form::select('semester', $semesters_arr, $semester_id ?? '' , [
                                                    'class' => 'form-control select',
                                                    'id' => 'select_semester' ]) }}
                                            </label>
                                        </div><!-- section -->
                                    </div><!-- col-md-4 -->

                                    <div class="col-lg-4">
                                        <div class="section">
                                            <label for="select_section" class="field-label">Select Section</label>
                                            <label for="select_section" class="field">
                                                {{  Form::select('section',$sections_arr, $section_id ?? '' , [
                                                    'class' => 'form-control select',
                                                    'id' => 'select_section' ]) }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer admin-form" align="right">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Get Courses">
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div><!-- .col-lg-12 -->
                </div><!-- .row -->

                @if( ! empty( $subjects ) )

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Assign Faculty for courses of {{ $semesters_arr[$semester_id] . ' ' . $sections_arr[$section_id] }}</h4>
                                </div>
                                {{ Form::open( [ 'action' => 'CoursesController@store', 'method' => 'put' ]  ) }}
                                {{ Form::hidden('semester', $semester_id) }}
                                {{ Form::hidden('section', $section_id) }}

                                    <div class="panel-body marks-table">
                                        <div class="">
                                            <table class="table table-bordered mb-0 th-bb-n">
                                                <thead>
                                                <tr>
                                                    <th>Sid</th>
                                                    <th>Name</th>
                                                    <th>Faculty</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach( $subjects as $subject )
                                                    <tr>
                                                        <td class="width-50">{{ $subject->id }}</td>
                                                        <td>{{ $subject->getNameWithCode() }}</td>

                                                        <td class="width-250">
                                                            {{Form::select( 'subjects['. $subject->code . '][]',
                                                              $faculty_arr, $subject->getAssignedFaculty( $section_id ),
                                                              array( 'id' => '', 'class' => 'course-selector form-control',
                                                              'multiple' => 'multiple')) }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div><!-- .table-responsive -->
                                    </div>
                                    <div class="panel-footer admin-form" align="right">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Submit">
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div><!-- .col-lg-12 -->
                    </div><!-- .row -->
                @endif

            </div>
            <!-- .page-content -->
        </div>
    </div>
    <!-- .page -->
@endsection