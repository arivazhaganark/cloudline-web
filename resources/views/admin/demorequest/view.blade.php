@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <h1>
        DemoRequest Form Details
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
                    <h3 class="box-title">Basic Details</h3>
                    <div class="box-body">
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

                        </div>

                        <hr>

                        <h3 class="box-title">Demo Request Form</h3>

                        <div class="form-horizontal">
                            @foreach($Demos as $Demo)

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Location:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Demo->location }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Preferred Date:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Demo->preferred_date }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Alternate Date:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Demo->alternate_date }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Schedule Time:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Demo->schedule_time }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Person Incharge:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Demo->person_incharge }}
                                </div>
                            </div>

                            @endforeach                                                       

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection