@extends('layouts.site')

@section('content')
<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</section>
<div class="innerpage-cont">
    <section class="home-part1 partners-page-cont my-login-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 product-txt2 product-txt4">

                    <div class="card-wrapper">
                        <div class="card fat">
                            <div class="card-body">
                                <h4 class="card-title"> Send Message </h4>
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
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5 product-txt2 map">
                    <h3 class="card-title"> Get Direction </h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15719.909783617339!2d78.1355813!3d9.9358344!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x54a082310de10b7f!2sA+%26+T+Video+Networks+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1521794359725" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection