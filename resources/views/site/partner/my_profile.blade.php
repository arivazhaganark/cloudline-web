@extends('layouts.site')

@section('content')
<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Partners Dashboard</h1>
            </div>
        </div>
    </div>
</section>
<div class="innerpage-cont">
    <section class="home-part1 partners-page-cont my-login-page">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><?php echo $breadcrumbs; ?></li>
            </ol>
        </nav>
        <div class="container">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 offset-md-1 offset-lg-1 offset-xl-1 partner-login-form">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title"> My Profile </h4>
                            <div class="flash-message">
                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close"></a></p>
                                @endif
                                @endforeach
                            </div>
                            {{ Form::model($Model, ['route' => [ 'profile' ],'method' => 'POST', 'class' => 'form-horizontal']) }}

                            <div class="form-group">
                                {{ Form::label('name','Name*',['class'=>'col-sm-2 control-label']) }}
                                {!! Form::text('name', @$User->name,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {{ Form::label('email','Email*',['class'=>'col-sm-2 control-label']) }}
                                {!! Form::text('email', @$User->email,['class'=>'form-control']) !!}
                            </div>


                            <div class="form-group">
                                {{ Form::label('password','Password',['class'=>'col-sm-2 control-label']) }}
                                {!! Form::password('password',['class'=>'form-control']) !!}
                            </div>


                            <div class="form-group no-margin">
                                {!! Form::hidden('uid', @$User->id) !!}
                                {!! Form::submit('Submit', array('class'=>'btn btn-sec btn-block')) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
