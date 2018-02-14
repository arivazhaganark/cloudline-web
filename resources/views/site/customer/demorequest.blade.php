@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Demo Request Form</div>

                <div class="panel-body">
                    {{ Form::model($Model, ['url'=>'demorequest/store', 'class' => 'form-horizontal']) }}
                    
                     <div class="form-group">
                        {!! Form::label('email','Email*',['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('email', $Customer->email , ['class'=>'form-control','readonly' => 'true'] ); !!} 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('company_name','Company Name*',['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('company_name', $Customer->company_name, ['class'=>'form-control','readonly' => 'true'] ); !!} 
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('location','Location*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('location', null, array('class'=>'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('preferred_date','Preferred Date*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('preferred_date', '',['class'=>'date form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('alternate_date','Alternate Date*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('alternate_date', '',['class'=>'date form-control']) !!}
                        </div>
                    </div>


                    <div class="form-group">
                        {{ Form::label('schedule_time','Schedule Time*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('schedule_time',null,['class'=>'timepicker form-control']) !!}
                        </div>
                    </div>


                    <div class="form-group">
                        {{ Form::label('person_incharge','Person Incharge*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('person_incharge', null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-6">
                            {!! Form::hidden('customer_id', $Customer->id) !!}
                            {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
