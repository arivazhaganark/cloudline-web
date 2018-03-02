<div class="form-group">
    {{ Form::label('name','Name*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('name', old('name'), array('class'=>'form-control')) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('company_name','Company Name*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('company_name', old('company_name'), array('class'=>'form-control')) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('email','Email*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('email', old('email'),['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('phone','Phone*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('phone', old('phone'),['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-xs-offset-2 col-xs-6">
        {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
    </div>
</div>