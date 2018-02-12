@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Register Users</div>

                    <div class="panel-body">
                        {{ Form::model($Model, ['url' => [ 'backend/registerusers/'. $Model->id ],'method' => 'PUT', 'class' => 'form-horizontal']) }}
                        @include('admin.customer.partial._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
