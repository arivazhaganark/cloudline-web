@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Partners Regsitration</div>

                    <div class="panel-body">
                        {{ Form::model($Model, ['route' => [ "partners.update", $Model->id ],'method' => 'PUT', 'class' => 'form-horizontal']) }}
                        @include('admin.partner.partial._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
