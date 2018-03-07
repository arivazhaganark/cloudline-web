@extends('admin.layouts.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Register Users</h3>
                    <div class="box-body">
                        {{ Form::model($Model, ['url' => [ 'admin/registerusers/'. $Model->id ],'method' => 'PUT', 'class' => 'form-horizontal']) }}
                        @include('admin.customer.partial._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
