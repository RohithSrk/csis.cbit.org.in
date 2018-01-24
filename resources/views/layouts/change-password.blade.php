@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">

            <div class="page-header">
                <h1 class="page-title hidden">Change Password</h1>
            </div>

            <!-- .page-header -->
            <div class="page-content">

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Change Password</h4>
                            </div>
                            {{ Form::open( array('action' => 'HomeController@changePassword', 'method' => 'post',
                                'class' => 'form-horizontal' ) ) }}

                            <div class="panel-body admin-form">

                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <div class="form-group {{ $errors->has('current-password') ? ' has-error' : '' }}">
                                    <label for="current-password" class="col-md-4 control-label">Current Password</label>

                                    <div class="col-md-6">
                                        <input id="current-password" class="form-control" name="current-password" value="" required="" type="password">

                                        @if ($errors->has('current-password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('current-password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('new-password') ? ' has-error' : '' }}">
                                    <label for="new-password" class="col-md-4 control-label">New Password</label>

                                    <div class="col-md-6">
                                        <input id="new-password" class="form-control" name="new-password" value="" required="" type="password">

                                        @if ($errors->has('new-password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('new-password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                                    <div class="col-md-6">
                                        <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Change Password
                                        </button>
                                    </div>
                                </div>

                            </div>
                            {{ Form::close() }}
                        </div>
                    </div><!-- .col-lg-12 -->
                </div><!-- .row -->

            </div><!-- .page-content -->

        </div>
    </div><!-- .page -->
@endsection