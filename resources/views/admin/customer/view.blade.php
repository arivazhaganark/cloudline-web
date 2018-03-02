@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">User Details</div>

                <div class="panel-body">
                    <h4>User Details</h4>
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

                        <hr>

                        <!--Demo Request form-->

                        @if($Demoform)
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

                        {{ Form::open(["url" => ["backend/demorequest",$Customer->id], 'class' => 'form-horizontal']) }}
                        <div class="form-group">
                            {{ Form::label('admin_comments','Admin Comment',['class'=>'col-sm-2 control-label']) }}
                            <div class="col-sm-10">
                                {!! Form::textArea('admin_comments', null, array('class'=>'form-control','placeholder' => 'Add your comment', 'rows' => '4')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-6">
                                {!! Form::submit('Post Comment', array('class'=>'btn btn-primary')) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                        
                        
                        @else
                        
                        <a href="{{ url('backend/demorequestform/'.$Customer->access_token) }}" class="btn btn-sm btn-success" type="button"> Demo Request Form </a>

                        @endif


                        <hr> 

                        <!--Upgrade to Customer details-->
                        
                        @if($Customer->status == 2)
                        <h4>Upgrade to Customer details</h4>
                        
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
                        
                         @elseif(Auth::user()->isAdmin)

                        <a href="{{ url('backend/upgrade_customer/'.$Customer->id) }}" class="btn btn-sm btn-info" type="button"> Upgrade to Customer </a>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
