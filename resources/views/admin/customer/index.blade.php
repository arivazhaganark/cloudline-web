@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <h1>
        Customers
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
                    <!--<h3 class="box-title">Customers</h3>-->
                    <div class="box-body">
                        {!! $dataTable->table(['class' => 'table table-striped table-bordered', 'id' => 'datatable-buttons'],['width'=>'100%']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@include('admin.partials.datatable_scripts')