<div class="form-group">
    {{ Form::label('title','Product Title*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('title', old('title'),['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('icon','Product Image*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::file('icon') !!}
        @if(@$Products['icon'])
        <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url(@$Products['icon']) }}" alt="" height="150px" width="150px">
        @endif
    </div>
</div>

<div class="form-group">
    {{ Form::label('description','Product Description*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::textarea('description', old('description'),['class'=>'form-control','rows'=>'4']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-xs-offset-2 col-xs-6">
        {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
    </div>
</div>