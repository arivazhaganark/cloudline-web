@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit Register User
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
                    @if($Model->status == 1)
                    <!--<h3 class="box-title">Register Users</h3>-->
                    @elseif($Model->status == 2) 
                    <h3 class="box-title">Customers</h3>
                    @endif
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
