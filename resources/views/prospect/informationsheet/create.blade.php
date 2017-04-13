@extends ('prospect.layouts.master')

@section ('content')

      <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome to K-State Polytechnic Admissions Portal</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-12">

                                   {!! Form::open(['class' => 'form-horizontal', 'method' => 'POST',  'role' =>'form']) !!}
                                        <h5><strong>FULL NAME *</strong></h5>
                                        <!-- First and Last Names -->
                                        <div class="form-group">

                                            <div class="col-md-4{{ $errors->has('firstName') ? ' has-error ' : '' }}">
                                                {!! Form::text('firstName', '', ['class' => 'form-control', 'name' => 'firstName', 'placeholder' => 'First Name',  'required', 'autofocus', 'value' => old('firstName')]) !!}

                                                @if ($errors->has('firstName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4{{ $errors->has('lastName') ? ' has-error' : '' }}">
                                               {!! Form::text('lastName', '', ['class' => 'form-control', 'name' => 'lastName', 'placeholder' => 'Last Name', 'required', 'autofocus', 'value' => old('lastName')]) !!}
                                                @if ($errors->has('lastName'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('lastName') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <h5><strong>ADDRESS *</strong></h5>
                                        <!-- Street Address -->
                                        <div class="form-group{{ $errors->has('streetAddress') ? ' has-error' : '' }}">

                                            <div class="col-md-8">
                                                {!! Form::text('streetAddress', '', ['class' => 'form-control', 'name' => 'streetAddress', 'placeholder' => 'Street Address', 'required', 'autofocus', 'value' => old('streetAddress')]) !!}

                                                @if ($errors->has('streetAddress'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('streetAddress') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Street Address 2 -->
                                        <div class="form-group{{ $errors->has('streetAddress2') ? ' has-error' : '' }}">

                                            <div class="col-md-8">
                                                {!! Form::text('streetAddress2', '', ['class' => 'form-control', 'name' => 'streetAddress2', 'placeholder' => 'Street Address 2', 'required', 'autofocus', 'value' => old('streetAddress2')]) !!}
                                                
                                                @if ($errors->has('streetAddress2'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('streetAddress2') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- City / State -->
                                        <div class="form-group">

                                            <div class="col-md-4{{ $errors->has('city') ? ' has-error ' : '' }}">
                                                {!! Form::text('city', '', ['class' => 'form-control', 'name' => 'city', 'placeholder' => 'City',  'required', 'autofocus', 'value' => old('city')]) !!}

                                                @if ($errors->has('city'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('city') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4{{ $errors->has('state') ? ' has-error' : '' }}">
                                                
                                                {!! Form::select('state', ['AR' => 'Arkansas', 'KS' => 'Kansas'], 'Kansas', ['class' => 'form-control', 'name' => 'State', 'required', 'autofocus', 'value' => old('state')]) !!}
                                                @if ($errors->has('state'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('state') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Zipcode / Country -->
                                        <div class="form-group">

                                            <div class="col-md-4{{ $errors->has('zipcode') ? ' has-error ' : '' }}">
                                                {!! Form::text('zipcode', '', ['class' => 'form-control', 'name' => 'zipcode', 'placeholder' => 'Zipcode',  'required', 'autofocus', 'value' => old('zipcode')]) !!}

                                                @if ($errors->has('zipcode'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4{{ $errors->has('country') ? ' has-error' : '' }}">
                                                
                                                {!! Form::select('country', ['US' => 'United States', 'JP' => 'Japan'], 'United States', ['class' => 'form-control', 'name' => 'country', 'required', 'autofocus', 'value' => old('country')]) !!}
                                                @if ($errors->has('country'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('country') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <h5><strong>SEX *</strong></h5>
                                        <!-- Sex -->
                                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">

                                            <div class="col-md-4">
                                                {!! Form::radio('sex', 'Male', ['class' => 'form-control', 'required', 'autofocus' ]) !!}
                                                 {!! Form::Label('sex', '   Male', ['class' => 'control-label']) !!}
                                                @if ($errors->has('sex'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('sex') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-md-4">
                                                {!! Form::radio('sex', 'Female', ['class' => 'form-control', 'required', 'autofocus' ]) !!}
                                                 {!! Form::Label('sex', '   Female', ['class' => ' control-label']) !!}
                                                @if ($errors->has('sex'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('sex') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <h5><strong>BIRHTDATE *</strong></h5>
                                        <!-- Birthday -->
                                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">

                                            <div class="col-md-8">
                                                {!! Form::date('birthday', \Carbon\Carbon::NOW(), ['class' => 'form-control', 'placeholder' => 'Birthday', 'required', 'autofocus', 'value' => old('birthday')]) !!}

                                                @if ($errors->has('birthday'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('birthday') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <h5><strong>PHONE NUMBER</strong></h5>
                                        <!-- Phone -->
                                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">

                                            <div class="col-md-8">
                                                {!! Form::text('phone', '', ['class' => 'form-control', 'name' => 'phone', 'placeholder' => '1-123-456-7890', 'autofocus', 'value' => old('phone')]) !!}
                                                
                                                @if ($errors->has('phone'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <h5><strong>EMAIL *</strong></h5>
                                        <!-- Email -->
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                            <div class="col-md-8">
                                                {!! Form::text('email', '', ['class' => 'form-control', 'name' => 'email', 'placeholder' => 'john@doe.com', 'autofocus', 'value' => old('email')]) !!}
                                                
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <h5><strong>SECONDARY SCHOOL TYPE *</strong></h5>
                                        <!-- Sex -->
                                        <div class="form-group{{ $errors->has('secondary_school') ? ' has-error' : '' }}">

                                            <div class="col-md-3">
                                                {!! Form::radio('secondary_school', 'High School', ['class' => 'form-control', 'required', 'autofocus'  ]) !!}
                                                 {!! Form::Label('secondary_school', '   High School', ['class' => 'control-label']) !!}
                                                @if ($errors->has('secondary_school'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('secondary_school') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-md-3">
                                                {!! Form::radio('secondary_school', 'Home School', ['class' => 'form-control', 'required', 'autofocus' ]) !!}
                                                 {!! Form::Label('secondary_school', '   Home School', ['class' => ' control-label']) !!}
                                                @if ($errors->has('secondary_school'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('secondary_school') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-md-3">
                                                {!! Form::radio('secondary_school', 'GED', ['class' => 'form-control', 'required', 'autofocus' ]) !!}
                                                 {!! Form::Label('secondary_school', '   GED', ['class' => 'control-label']) !!}
                                                @if ($errors->has('secondary_school'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('secondary_school') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <h5><strong>EXPECTED START DATE *</strong></h5>
                                        <!-- Start Date -->
                                        <div class="form-group{{ $errors->has('start_month') ? ' has-error' : '' }}{{ $errors->has('start_year') ? ' has-error' : '' }}">

                                            <div class="col-md-4">
                                                {!! Form::select('start_month', ['Fall' => 'Fall', 'Spring' => 'Spring', 'Summer' => 'Summer'], 'Fall', ['class' => 'form-control', 'name' => 'start_month', 'required', 'autofocus', 'value' => old('start_month')]) !!}
                                                
                                                @if ($errors->has('start_month'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('start_month') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::text('start_year', '', ['class' => 'form-control', 'name' => 'email', 'placeholder' => '2017', 'min' => '2017', 'max' => '3000', 'autofocus', 'value' => old('start_year')]) !!}
                                                
                                                @if ($errors->has('start_year'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('start_year') }}</strong>
                                                    </span>
                                                @endif
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

