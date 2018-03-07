@extends('layouts.adminLTE.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Settings</h3>
                    <div class="box-body">
                        {{ Form::model($Model,['route' => [ 'settings' ],'method' => 'POST', 'class' => 'form-horizontal']) }}
                        <div class="form-group">
                            {{ Form::label('meta_value','Contact Email*',['class'=>'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {!! Form::text('meta_value', old('meta_value'),['class'=>'form-control']) !!}
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
</section>
@endsection
