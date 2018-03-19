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
                                <div class="flash-message">
                                  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close"></a></p>
                                    @endif
                                    @endforeach
                                </div>
                                {{ Form::open(['url' => 'contactus/store']) }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    {!! Form::label('name','Name*') !!}
                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                                    @if ($errors->has('name'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {!! Form::label('email','Email*') !!}
                                    {!! Form::text('email',null,['class'=>'form-control']) !!} 
                                    @if ($errors->has('email'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    {!! Form::label('phone','Phone*') !!}
                                    {!! Form::text('phone',null,['class'=>'form-control']) !!}  
                                    @if ($errors->has('phone'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                    {!! Form::label('message','Message*') !!}
                                    {!! Form::textArea('message',null,['class'=>'form-control']) !!}
                                    @if ($errors->has('message'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('g-recaptcha-response','Captcha*') !!}
                                    {!! NoCaptcha::display() !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{ Form::hidden('ip_address') }}
                                </div>
                                <div class="form-group no-margin">
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