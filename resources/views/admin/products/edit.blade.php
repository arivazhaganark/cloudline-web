@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit Page       
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
                    <div class="box-body">
                        {{ Form::model($Products, ['route' => [ "products.update", $Products->id ],'method' => 'PUT', 'class' => 'form-horizontal','files'=>true]) }}
                        @include('admin.products.partial._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection