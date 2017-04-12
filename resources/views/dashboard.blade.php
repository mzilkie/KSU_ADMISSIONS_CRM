@extends('layouts.master')

@section ('content')

      <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Information Request Form</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- First name -->
                                    {{ //::open(array('class' => 'form-horizontal', 'method' => 'POST', 'role' =>'form', 'route' => 'infoForm.create')) }}
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Last Name -->
                                        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                                            <label for="lastName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                                @if ($errors->has('lastName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('lastName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Street Address -->
                                        <div class="form-group{{ $errors->has('streetAddress') ? ' has-error' : '' }}">
                                            <label for="streetAddress" class="col-md-4 control-label">Street Address</label>

                                            <div class="col-md-6">
                                                <input id="streetAddress" type="text" class="form-control"  name="streetAddress" value="{{ old('streetAddress') }}" required autofocus>

                                                @if ($errors->has('streetAddress'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('streetAddress') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Street Address 2 -->
                                        <div class="form-group{{ $errors->has('streetAddress2') ? ' has-error' : '' }}">
                                            <label for="streetAddress2" class="col-md-4 control-label">Street Address 2</label>

                                            <div class="col-md-6">
                                                <input id="streetAddress2" type="text" class="form-control" name="firstName" value="{{ old('streetAddress2') }}" required autofocus>

                                                @if ($errors->has('streetAddress2'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('streetAddress2') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control {{ $errors->has('firstName') ? ' has-warning' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control {{ $errors->has('firstName') ? ' has-warning' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control {{ $errors->has('firstName') ? ' has-warning' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control {{ $errors->has('firstName') ? ' has-warning' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control {{ $errors->has('firstName') ? ' has-warning' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control {{ $errors->has('firstName') ? ' has-warning' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control {{ $errors->has('firstName') ? ' has-warning' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control {{ $errors->has('firstName') ? ' has-warning' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control {{ $errors->has('firstName') ? ' has-warning' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control {{ $errors->has('firstName') ? ' has-warning' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control {{ $errors->has('firstName') ? ' has-warning' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control {{ $errors->has('firstName') ? ' has-warning' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                   Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-12 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
        <!-- /#page-wrapper -->

@endsection
