<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {{ Form::label('name','Name*') }}
    {!! Form::text('name', old('name'), array('class'=>'form-control')) !!}
    @if ($errors->has('name'))
    <span class="text-danger">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
    {{ Form::label('company_name','Company Name*') }}
    {!! Form::text('company_name', old('company_name'), array('class'=>'form-control')) !!}
    @if ($errors->has('company_name'))
    <span class="text-danger">
        <strong>{{ $errors->first('company_name') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {{ Form::label('email','Email*') }}
    {!! Form::text('email', old('email'),['class'=>'form-control']) !!}
    @if ($errors->has('email'))
    <span class="text-danger">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {{ Form::label('phone','Phone*') }}
    {!! Form::text('phone', old('phone'),['class'=>'form-control']) !!}
    @if ($errors->has('phone'))
    <span class="text-danger">
        <strong>{{ $errors->first('phone') }}</strong>
    </span>
    @endif
</div>

<div class="form-group">
    {{ Form::label('g-recaptcha-response','Captcha*') }}
    {!! NoCaptcha::display() !!}
    @if ($errors->has('g-recaptcha-response'))
    <span class="text-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </span>
    @endif
</div>

<div class="form-group no-margin">
    {!! Form::submit('Submit', array('class'=>'btn btn-sec btn-block')) !!}
</div>