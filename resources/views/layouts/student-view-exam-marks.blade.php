@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            @include ('partials.alerts')

            @if( ! empty( $exams ) )
                <div class="page-header">
                    <h1 class="page-title ">Mid Exam Marks</h1>
                </div>

                <!-- .page-header -->
                <div class="page-content">

                    @foreach( $exams as $exam )

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">{{ $exam->name }} Marks</h4>
                                    </div>

                                    <div class="panel-body marks-table">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0 th-bb-n" id="student-lab-marks-entry">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Subject</th>
                                                    <th>Marks of each question</th>
                                                    <th>Total Marks</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php
                                                    $questionPapers = $exam->questionPapers->whereIN('subject_id', $subject_ids);
                                                    $t1 = $t2 = 0;
                                                @endphp
                                                    @foreach( $questionPapers as $i => $questionPaper )
                                                        @php
                                                            $emarks = \App\ExamMark::getMarks( $student_id, $questionPaper->id );
                                                            $questions = $questionPaper->questions;
                                                        @endphp
                                                        <tr>
                                                            <td class="width-50">{{ $i+1 }}</td>
                                                            <td>{{ $questionPaper->subject->name }}</td>
                                                            <td>
                                                            @foreach( $questions as $question )
                                                                @if( $question->subQuestions()->count() )
                                                                    @foreach( $question->subQuestions()->get() as $squestion )
                                                                        <b>{{$squestion->question}}</b> : {{ $emarks[ $question->id ][ $squestion->id ] }} / {{$squestion->max_marks}} &nbsp;
                                                                    @endforeach
                                                                @else
                                                                    <b>{{$question->question}}</b> : {{ $emarks[ $question->id ]}} / {{$question->max_marks}} &nbsp;
                                                                @endif
                                                            @endforeach
                                                            </td>
                                                            <td>{{ $emarks['total_marks'] }} / {{ $questionPaper->max_marks }} </td>
                                                            @php $t1 += $emarks['total_marks'] @endphp
                                                            @php $t2 += $questionPaper->max_marks @endphp
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr><td colspan="3" style="text-align: right"><b>Total</b></td><td><b>{{ $t1 }} / {{ $t2 }}</b></td></tr>
                                                </tfoot>
                                            </table>
                                        </div><!-- .table-responsive -->
                                    </div>
                                </div>
                            </div><!-- .col-lg-12 -->
                        </div><!-- .row -->
                    @endforeach

                </div><!-- .page-content -->
            @else
                <div class="alert alert-danger mg-top-15 text-left">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    No Exams available.
                </div>
            @endif

        </div>
    </div><!-- .page -->
@endsection