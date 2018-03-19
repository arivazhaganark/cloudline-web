@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Contact Form Details
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
                        <!--<h4>Contact Form Details</h4>-->
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Name:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $data->name }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Email:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $data->email }}
                                </div>
                            </div>                            

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Phone:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $data->phone }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Message:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $data->message }}
                                </div>
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
