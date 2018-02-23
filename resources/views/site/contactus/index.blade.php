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
                                <h4 class="card-title"> Contact Us </h4>
                                {{ Form::open(['url' => 'contactus/store']) }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    {!! Form::label('name','Name*') !!}
                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {!! Form::label('email','Email*') !!}
                                    {!! Form::text('email',null,['class'=>'form-control']) !!} 
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    {!! Form::label('phone','Phone*') !!}
                                    {!! Form::text('phone',null,['class'=>'form-control']) !!}  
                                    @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                    {!! Form::label('message','Message*') !!}
                                    {!! Form::textArea('message',null,['class'=>'form-control']) !!}
                                    @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('captcha','Captcha*') !!}
                                    {!! NoCaptcha::display() !!}
                                </div>
                                <div class="form-group no-margin">
                                    {!! Form::submit('Submit', array('class'=>'btn btn-primary btn-block')) !!}
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