@extends('layouts.adminLTE.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Upgrade to Customer</h3>
                    <div class="box-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Name:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Customer->name }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Email:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Customer->email }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Company Name:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Customer->company_name }}
                                </div>
                            </div>
                        </div>
                        <hr>
                        {{ Form::model($Customer, ['url'=>['admin/upgrade_customer/'. $Customer->id],'method' => 'PUT', 'class' => 'form-horizontal']) }}
                        <div class="form-group">
                            {{ Form::label('plan_name','Plan Name*',['class'=>'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {!! Form::select('plan_name',$Plan_names, old('plan_name'), array('class'=>'form-control','placeholder'=>'Select Type')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('plan_price','Price*',['class'=>'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {!! Form::text('plan_price', old('plan_price'), array('class'=>'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('start_date','Service Start Date',['class'=>'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {!! Form::text('start_date', old('start_date'),['class'=>'date form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('end_date','Service End Date',['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('end_date', old('end_date'),['class'=>'date form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-6">
                                {!! Form::hidden('id', $Customer->id) !!}
                                {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
