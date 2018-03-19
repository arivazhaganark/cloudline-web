<div class="form-group">
    {{ Form::label('name','Name*') }}
    {!! Form::text('name', old('name'), array('class'=>'form-control')) !!}
    @if ($errors->has('name'))
    <span class="text-danger">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
</div>

<div class="form-group">
    {{ Form::label('company_name','Company Name*') }}
    {!! Form::text('company_name', old('company_name'), array('class'=>'form-control')) !!}
    @if ($errors->has('company_name'))
    <span class="text-danger">
        <strong>{{ $errors->first('company_name') }}</strong>
    </span>
    @endif
</div>

<div class="form-group">
    {{ Form::label('email','Email*') }}
    {!! Form::text('email', old('email'),['class'=>'form-control']) !!}
    @if ($errors->has('email'))
    <span class="text-danger">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif

</div>

<div class="form-group">
    {{ Form::label('phone','Phone*') }}
    {!! Form::text('phone', old('phone'),['class'=>'form-control']) !!}
    @if ($errors->has('phone'))
    <span class="text-danger">
        <strong>{{ $errors->first('phone') }}</strong>
    </span>
    @endif
</div>

<div class="form-group">
    <div class="col-xs-offset-2 col-xs-6">
        {!! Form::submit('Submit', array('class'=>'btn btn-sec btn-block')) !!}
    </div>
</div>