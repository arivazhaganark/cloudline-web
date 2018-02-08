@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">My Profile</div>

                <div class="panel-body">
                    {{ Form::model($Model, ['url' => [ 'backend/my_profile/'. $Model->id ],'method' => 'PUT', 'class' => 'form-horizontal']) }}

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
@endsection
