@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Details
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
                        @if($Customer->status == 1)
                        <h4>Registered User Details</h4>
                        @elseif($Customer->status == 2)
                        <h4>Customer Details</h4>
                        @endif
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Name:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Customer->name }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Email:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Customer->email }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Company Name:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Customer->company_name }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Phone:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Customer->phone }}
                                </div>
                            </div>                            

                            <!--Demo Request form-->

                            @if($Demoform)
                            <hr>
                            <h4>Demo Request Form</h4>
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

                            @endif                                                                                    

                            <!--Upgrade to Customer details-->

                            @if($Customer->status == 2)
                            <hr>
                            <h4>Customer Plan Information</h4>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Plan Name:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Customer->plan_name }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Price:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Customer->plan_price }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Service Start Date:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Customer->start_date }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Service End Date:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Customer->end_date }}
                                </div>
                            </div>

                            @endif

                            <hr>

                            {{ Form::model($Customer,["url" => ["admin/demorequest",$Customer->id], 'class' => 'form-horizontal']) }}                                                        
                            <i class="glyphicon glyphicon-edit" style="float: right" id="editicon"></i> <br />
                            <div class="form-group">
                                {{ Form::label('admin_comments','Admin Comment',['class'=>'col-sm-2 control-label']) }}
                                <div class="col-sm-10">
                                    @if(isset($Customer->admin_comments))
                                    {{ Form::textarea('admin_comments', old('admin_comments'), array('class'=>'form-control','placeholder' => 'Add your comment', 'rows' => '3','readonly' => true)) }}
                                    @else
                                    {{ Form::textarea('admin_comments', null, array('class'=>'form-control','placeholder' => 'Add your comment', 'rows' => '3')) }}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-offset-2 col-xs-6">
                                    {!! Form::submit('Submit', array('class'=>'btn btn-primary','id'=>'button')) !!}
                                </div>
                            </div>
                            {!! Form::close() !!} 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#editicon').hide();
        if (!($('#admin_comments').val() == '')) {
            $('#button').hide();
            $('#editicon').show();
            $("#editicon").click(function () {
                $('#admin_comments').removeAttr('readonly');
                $('#admin_comments').focus();
                $('#button').show().val('Submit');
            })
        }

    });

</script>
@endpush

