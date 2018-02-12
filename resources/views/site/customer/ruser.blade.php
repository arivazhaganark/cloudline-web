@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">User Regsitration</div>

                    <div class="panel-body">
                        {{ Form::model($Model, ['url'=>'registerusers/store', 'class' => 'form-horizontal']) }}
                        @include('site.customer.partial._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
