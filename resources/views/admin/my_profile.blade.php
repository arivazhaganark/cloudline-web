@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1>
        My Profile
    </h1>
    <ol class="breadcrumb">
        <a href="#"><?php echo $breadcrumbs ?></a>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <!--<h3 class="box-title">My Profile</h3>-->
                    <div class="box-body">
                        {{ Form::model($Model, ['route' => [ 'myprofile' ],'method' => 'POST', 'class' => 'form-horizontal']) }}

                        <div class="form-group">
                            {{ Form::label('name','Name*',['class'=>'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {!! Form::text('name', @$User->name,['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('email','Email*',['class'=>'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {!! Form::text('email', @$User->email,['class'=>'form-control']) !!}
                            </div>
                        </div>


                        <div class="form-group">
                            {{ Form::label('password','Password',['class'=>'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {!! Form::password('password',['class'=>'form-control']) !!}
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-6">
                                {!! Form::hidden('uid', @$User->id) !!}
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
