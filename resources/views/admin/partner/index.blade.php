@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <h1>
        Partners
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
                    <!--<h3 class="box-title">Partners</h3>-->
                    <div class="box-body">
                        {!! $dataTable->table(['class' => 'table table-striped table-bordered', 'id' => 'datatable-buttons'],['width' => '100%']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Partner Approved Modal popup-->

<div id="thankyouModal1" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Partner Registration</h4>
            </div>
            <div class="modal-body">
                <p>The Partner is Successfully Approved!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>

<!--Partner Declined Modal popup-->

<div id="thankyouModal2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Partner Registration</h4>
            </div>
            <div class="modal-body">
                <p>The Partner is Declined!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>

<select id="table-filter">
    <option value="">All</option>
    <option value="Approved">Approved</option>
    <option value="Declined">Declined</option>
    <option value="Not Verified">Not Verified</option>
    <!--<option value="Both">Both</option>-->
</select>

@endsection
@include('admin.partials.datatable_scripts')