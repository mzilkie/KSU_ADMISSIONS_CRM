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
        {!! Form::text('streetAddress2', '', ['class' => 'form-control', 'name' => 'streetAddress2', 'placeholder' => 'Street Address 2', 'autofocus', 'value' => old('streetAddress2')]) !!}
        
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
<h5><strong>BIRTHDATE *</strong></h5>
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
<h5><strong>COLLEGE COURSES? </strong></h5>
<!-- Sex -->
<div class="form-group{{ $errors->has('college_credit') ? ' has-error' : '' }}">

    <div class="col-md-4">
        {!! Form::radio('college_credit', 'Yes', ['class' => 'form-control',  'autofocus' ]) !!}
            {!! Form::Label('college_credit', '   Yes', ['class' => 'control-label']) !!}
        @if ($errors->has('college_credit'))
            <span class="help-block">
                <strong>{{ $errors->first('college_credit') }}</strong>
            </span>
        @endif
    </div>

    <div class="col-md-4">
        {!! Form::radio('college_credit', 'No', ['class' => 'form-control',  'autofocus' ]) !!}
            {!! Form::Label('college_credit', '   No', ['class' => ' control-label']) !!}
        @if ($errors->has('college_credit'))
            <span class="help-block">
                <strong>{{ $errors->first('sex') }}</strong>
            </span>
        @endif
    </div>
</div>

<h5><strong>IF YES, WHAT COLLEGE?</strong></h5>
<!-- Name of College -->
<div class="form-group{{ $errors->has('college_name') ? ' has-error' : '' }}">

    <div class="col-md-8">
        {!! Form::text('college_name', '', ['class' => 'form-control', 'name' => 'college_name', 'placeholder' => 'Wichita State University', 'autofocus', 'value' => old('college_name')]) !!}
        
        @if ($errors->has('college_name'))
            <span class="help-block">
                <strong>{{ $errors->first('college_name') }}</strong>
            </span>
        @endif
    </div>
</div>                                           

<h5><strong>MAJOR OF INTEREST (1ST CHOICE) *</strong></h5>
<!-- 1st Major of Interest -->
<div class="form-group{{ $errors->has('primary_major') ? ' has-error' : '' }}">

    <div class="col-md-8">
        {!! Form::select('primary_major', ['Airport Management' => 'Airport Management', 'Applied Business' => 'Applied Business', 'Aviation Maintenance Management' => 'Aviation Maintenance Management', 'Computer Systems Technology' => 'Computer Systems Technology', 'Digital Media Technology' => 'Digital Media Technology', 'Electronic and Computer Engineering Technology' => 'Electronic and Computer Engineering Technology', 'Family Studies and Human Services' => 'Family Studies and Human Services', 'Mechanical Engineering Technology' => 'Mechanical Engineering Technology', 'Professional Pilot' => 'Professional Pilot', 'Social Work' => 'Social Work', 'Technology Management' => 'Technology Management', 'Unmanned Aircraft Systems Design and Integration' => 'Unmanned Aircraft Systems Design and Integration', 'Unmanned Aircraft Systems Flight and Operations' => 'Unmanned Aircraft Systems Flight and Operations', 'Web Development Technology' => 'Web Development Technology', 'General Courses -- Non Degree Seeking' => 'General Courses -- Non Degree Seeking', 'Undecided' => 'Undecided'], ['class' => 'form-control', 'name' => 'primary_major', 'required', 'autofocus', 'value' => old('primary_major')]) !!}
        
        @if ($errors->has('primary_major'))
            <span class="help-block">
                <strong>{{ $errors->first('primary_major') }}</strong>
            </span>
        @endif
    </div>
</div>
<h5><strong>MAJOR OF INTEREST (2ND CHOICE)</strong></h5>
<!-- 2nd Major of Interest -->
<div class="form-group{{ $errors->has('secondary_major') ? ' has-error' : '' }}">

    <div class="col-md-8">
        {!! Form::select('secondary_major', ['Airport Management' => 'Airport Management', 'Applied Business' => 'Applied Business', 'Aviation Maintenance Management' => 'Aviation Maintenance Management', 'Computer Systems Technology' => 'Computer Systems Technology', 'Digital Media Technology' => 'Digital Media Technology', 'Electronic and Computer Engineering Technology' => 'Electronic and Computer Engineering Technology', 'Family Studies and Human Services' => 'Family Studies and Human Services', 'Mechanical Engineering Technology' => 'Mechanical Engineering Technology', 'Professional Pilot' => 'Professional Pilot', 'Social Work' => 'Social Work', 'Technology Management' => 'Technology Management', 'Unmanned Aircraft Systems Design and Integration' => 'Unmanned Aircraft Systems Design and Integration', 'Unmanned Aircraft Systems Flight and Operations' => 'Unmanned Aircraft Systems Flight and Operations', 'Web Development Technology' => 'Web Development Technology', 'General Courses -- Non Degree Seeking' => 'General Courses -- Non Degree Seeking', 'Undecided' => 'Undecided'], ['class' => 'form-control', 'name' => 'secondary_major', 'autofocus', 'value' => old('primary_major')]) !!}
        
        @if ($errors->has('secondary_major'))
            <span class="help-block">
                <strong>{{ $errors->first('secondary_major') }}</strong>
            </span>
        @endif
    </div>
</div>
<h5><strong>OTHER INTERESTS</strong></h5>
<!-- Other Interests -->
<div class="form-group{{ $errors->has('other_interest') ? ' has-error' : '' }}">

    <div class="col-md-8">
        {!! Form::text('other_interest', '', ['class' => 'form-control', 'name' => 'other_interest', 'placeholder' => 'Additional Information About K-State Polytechnic', 'autofocus', 'value' => old('other_interest')]) !!}
        
        @if ($errors->has('other_interest'))
            <span class="help-block">
                <strong>{{ $errors->first('other_interest') }}</strong>
            </span>
        @endif
    </div>
</div>
<h5><strong>HOW DID YOU HEAR ABOUT US? *</strong></h5>
<!-- How did you hear about us? -->
<div class="form-group{{ $errors->has('hear_about_us') ? ' has-error' : '' }}">
    <div class="col-md-4">
        
        {!! Form::select('hear_about_us', ['Google/Internet' => 'Google / Internet Search', 'Post Card/Brochure' => 'Post Card / Brochure', 'Admissions Representative' => 'Admissions Representative', 'High School Counselor/Teacher' => 'High School Counselor or Teacher', 'Friend or Family Member' => 'Friend or Family Member', 'K-State Manhattan' => 'K-State Manhattan', 'Advertisement' => 'Advertisement (TV Advertisement, Website, Facebook, Etc. )', 'Other' => 'Other'], ['class' => 'form-control', 'name' => 'country', 'required', 'autofocus', 'value' => old('hear_about_us')]) !!}
        @if ($errors->has('hear_about_us'))
            <span class="help-block">
                <strong>{{ $errors->first('hear_about_us') }}</strong>
            </span>
        @endif
    </div>
</div>

<h5><strong>IF OTHER, PLEASE EXPLAIN </strong></h5>
<!-- Other hear about us -->
<div class="form-group{{ $errors->has('other_hear') ? ' has-error' : '' }}">

    <div class="col-md-8">
        {!! Form::text('other_hear', '', ['class' => 'form-control', 'name' => 'other_hear', 'placeholder' => 'While playing golf', 'autofocus', 'value' => old('other_hear')]) !!}
        
        @if ($errors->has('other_hear'))
            <span class="help-block">
                <strong>{{ $errors->first('other_hear') }}</strong>
            </span>
        @endif
    </div>
</div>

<h5><strong>CONTACT PREFERENCE *</strong></h5>
<!-- Contact Method -->
<div class="form-group">
    <div class="col-md-4{{ $errors->has('contact') ? ' has-error' : '' }}">
        
        {!! Form::select('contact', ['Phone' => 'Phone', 'Email' => 'Email', 'Mail' => 'Standard Mail'], ['class' => 'form-control', 'name' => 'contact', 'required', 'autofocus', 'value' => old('contact')]) !!}
        @if ($errors->has('contact'))
            <span class="help-block">
                <strong>{{ $errors->first('contact') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-md-8 col-md-offset-4">
        {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
</div>