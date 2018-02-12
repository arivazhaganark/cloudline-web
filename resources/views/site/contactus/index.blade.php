@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Us</div>

                <div class="panel-body">
                    {{ Form::open(['url' => 'contactus/store', 'class' => 'form-horizontal']) }}
                    
                    <div class="form-group">
                        {{ Form::label('name','Name*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('email','Email*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('email',null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('phone','Phone*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('phone',null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('message','Message*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::textArea('message',null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('captcha','Captcha*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            <div class="g-recaptcha" 
                                 data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-6">
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
