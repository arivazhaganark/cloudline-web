@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Create Page 
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
                    <!--<h3 class="box-title">Partner Registration</h3>-->
                    <div class="box-body">
                        {{ Form::open(['route'=>'products.store', 'class' => 'form-horizontal','files'=>true]) }}
                        @include('admin.products.partial._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection