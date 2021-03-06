@extends('layouts.site')

@section('content')
<div class="innerpage-cont">
    <section class="home-part1 partners-page-cont my-login-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6  offset-md-2  offset-lg-3 offset-xl-3 partner-login-form">
                    <div class="card-wrapper">
                        <div class="card fat">
                            <div class="card-body">
                                <h4 class="card-title"> Demo Request Form </h4>
                                <div class="flash-message">
                                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close"></a></p>
                                    @endif
                                    @endforeach
                                </div>
                                {{ Form::model($Model, ['url'=>'demorequest/store', 'class' => 'form-horizontal']) }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {!! Form::label('email','Email*') !!}
                                    {!! Form::text('email', $Customer->email , ['class'=>'form-control','readonly' => 'true'] ); !!} 
                                </div>
                                <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                                    {!! Form::label('company_name','Company Name*') !!}
                                    {!! Form::text('company_name', $Customer->company_name, ['class'=>'form-control','readonly' => 'true'] ); !!} 
                                </div>
                                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                    {{ Form::label('location','Location*') }}
                                    {!! Form::text('location', null, array('class'=>'form-control')) !!}
                                    @if ($errors->has('location'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('preferred_date') ? ' has-error' : '' }}">
                                    {{ Form::label('preferred_date','Preferred Date*') }}
                                    {!! Form::text('preferred_date', '',['class'=>'form-control','id'=>'startdate']) !!}
                                    @if ($errors->has('preferred_date'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('preferred_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('alternate_date') ? ' has-error' : '' }}">
                                    {{ Form::label('alternate_date','Alternate Date*') }}
                                    {!! Form::text('alternate_date', '',['class'=>'form-control','id'=>'enddate']) !!}                                    
                                </div>
                                <div class="form-group{{ $errors->has('schedule_time') ? ' has-error' : '' }}">
                                    {{ Form::label('schedule_time','Schedule Time*') }}
                                    {!! Form::text('schedule_time',null,['class'=>'form-control','id'=>'timepicker']) !!}
                                    @if ($errors->has('schedule_time'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('schedule_time') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('person_incharge') ? ' has-error' : '' }}">
                                    {{ Form::label('person_incharge','Person Incharge*') }}
                                    {!! Form::text('person_incharge', null,['class'=>'form-control']) !!}
                                    @if ($errors->has('person_incharge'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('person_incharge') }}</strong>
                                    </span>
                                    @endif
                                </div>                                
                                <div class="form-group no-margin">
                                    {!! Form::hidden('customer_id', $Customer->id) !!}
                                    {!! Form::submit('Submit', array('class'=>'btn btn-sec btn-block')) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
</div>
@endsection
