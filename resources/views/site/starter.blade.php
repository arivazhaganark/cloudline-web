@extends('layouts.site')

@section('content')

<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Starter</h1>
            </div>
        </div>
    </div>
</section>
<div class="innerpage-cont">
    <section class="home-part1  price-plan-cont">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 plan-quote plan-quote2">  Startups can use this plan <strong> FREE </strong> for a period of upto 3 years  </div>
            </div>
        </div>
    </section>
    <section class=" price-plan-cont price-plan-cont1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h4>Starter  Plan Pricing</h4>
                </div>
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3  col-xl-6 offset-xl-3 pricing-cont ">
                    <div class="card">
                        <div class="card-header  bg-primary">
                            <h3 class="card-title">Starter</h3>
                        </div>
                        <div class="card-body">
                            <div class="the-price"> <span class="text-center"> <a href="{{ url('registerusers') }}" class="btn btn1 btn2 boder1"> Click Here for Demo </a> </span> </div>
                            <div class="">
                                <div class="table-responsve">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="w-75 option">
                                                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                        <i class="fa fa-plus"></i>
                                                        <i class="fa fa-minus" style="display: none"></i>
                                                        Video Conferencing Features &nbsp;&nbsp;
                                                    </a>
                                                    <div class="panel-collapse collapse" id="collapseExample">
                                                        <ul>
                                                            <li>HD Video & Audio</li>
                                                            <li>Shedule Unlimited Meetings</li>
                                                            <li> Host Meetings </li>
                                                            <li>Manage Meetings</li> 
                                                            <li>Control Participants</li>
                                                            <li>Discussion Mode</li>
                                                            <li>Desktop</li>
                                                            <li>Laptop</li>
                                                            <li>WebRTC</li>
                                                            <li>Mobile </li>
                                                            <li>Dfferent Layouts</li>
                                                            <li>Audio & Video Mute</li>
                                                            <li>Invitation via mail client</li>
                                                            <li>Change Camera</li>
                                                            <li>Mic & Speaker on the fly</li>
                                                            <li>Auto Bandwidth Optimization</li>
                                                            <li>Auto echo cancellation</li>
                                                            <li>Participant List</li>
                                                            <li>Active Speaker View</li>
                                                            <li>Ban/Unban participants</li>
                                                            <li>Hold/Unhold Participants</li>
                                                            <li>Standard/Compact&Fullscreen Mode</li>
                                                            <li>Conference Information Link for sharing</li>
                                                            <li>AES 128 Enabled</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-check"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">
                                                    <a data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                                                        <i class="fa fa-plus"></i>
                                                        <i class="fa fa-minus" style="display: none"></i>
                                                        Collaboration &nbsp;&nbsp;
                                                    </a>
                                                    <div class="panel-collapse collapse" id="collapseExample1">
                                                        <ul class="link">
                                                            <li>WhiteBoard Collaboration</li>
                                                            <li>Desktop Sharing</li>
                                                            <li>App sharing</li>
                                                            <li>Presentation Sharing</li>
                                                            <li>File Sharing</li>
                                                            <li>Poll/QA Session</li>
                                                            <li>Private/Group Chat</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td><i class="fa fa-check"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">No of Simultaneous Meeting room </td>
                                                <td>1</i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Total no of max participants</td>
                                                <td>5</i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Duration</td>
                                                <td>Upto 3 years </td>
                                            </tr>
<!--                                            <tr>
                                                <td class="option">Total Amount</td>
                                                <td> ? </td>
                                            </tr>-->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p> <a href="#" class="btn  btn1  buy-acc" data-toggle="modal" data-target="#myModal">Avail it for Free</a> </p>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade bs-example-modal-lg" id="myModal"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document" style="padding-top: 60px">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Starter Form</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body" style="overflow: hidden;">
                                {{ Form::open(['url' => 'starter/store','method'=>'POST','files'=> true,'id'=>'register']) }}

                                <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                                    {!! Form::label('company_name','Company Name*') !!}
                                    {!! Form::text('company_name',null,['class'=>'form-control']) !!}
                                    <span class="text-danger">
                                        <strong id="company_name-error"></strong>
                                    </span>
                                </div>

                                <div class="form-group{{ $errors->has('started_on') ? ' has-error' : '' }}">
                                    {{ Form::label('started_on','Started On*') }}
                                    {!! Form::text('started_on', '',['class'=>'form-control','id'=>'startdate']) !!}
                                    <span class="text-danger">
                                        <strong id="started_on-error"></strong>
                                    </span>
                                </div>

                                <div class="form-group{{ $errors->has('sector') ? ' has-error' : '' }}">
                                    {!! Form::label('sector', 'Sector') !!}
                                    {{ Form::select('sector', ["business"=>"Business","education"=>"Education","wellness"=>"Wellness","other"=>"Other"], null, ['class' => 'form-control','placeholder'=>'Select Sector']) }}
                                    <span class="text-danger">
                                        <strong id="sector-error"></strong>
                                    </span>
                                </div>

                                <div class="form-group{{ $errors->has('specify_other') ? ' has-error' : '' }}" id="specifyother">
                                    {!! Form::label('specify_other','Please specify if other*') !!}
                                    {!! Form::text('specify_other',null,['class'=>'form-control']) !!}  
                                    <span class="text-danger">
                                        <strong id="specify_other-error"></strong>
                                    </span>
                                </div>

                                <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                                    {!! Form::label('start_date', 'Start Date is < 3 Years') !!}
                                    {{ Form::select('start_date', ["yes"=>"Yes","no"=>"No"], null, ['class' => 'form-control','placeholder'=>'Select']) }}
                                </div>

                                <div class="form-group{{ $errors->has('capital') ? ' has-error' : '' }}">
                                    {!! Form::label('capital', 'Capital < 10 Lakhs') !!}
                                    {{ Form::select('capital', ["yes"=>"Yes","no"=>"No"], null, ['class' => 'form-control','placeholder'=>'Select']) }}
                                </div>

                                <div class="form-group {{ $errors->has('file_upload') ? ' has-error' : '' }}" id='fileupload'>
                                    {{ Form::label('file_upload', 'Please attach supporting documents*') }}
                                    {{ Form::file('file_upload',['class'=>'form-control']) }}
                                    <span class="text-danger">
                                        <strong id="file_upload-error"></strong>
                                    </span>
                                </div>

                                <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                                    {!! Form::label('comments','Comments If any') !!}
                                    {!! Form::textArea('comments', null, array('class'=>'form-control','placeholder' => 'Add your comment', 'rows' => '4')) !!}
                                </div>

                                <div class="form-group no-margin">
                                    {!! Form::submit('Submit', array('id'=>'submitForm','class'=>'btn btn-sec btn-block')) !!}
                                </div>
                                <div class="formComplete btn btn1">Thank you for contacting us! We will respond to you as soon as possible.</div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function () {

        $("#specifyother").hide();

        $('#sector').change(function () {
            if ($(this).val() == 'other') {
                $('#specifyother').show();
            } else {
                $('#specifyother').hide();
            }
        });
        $('#fileupload,#submitForm').hide();

        $('#start_date,#capital').change(function () {
            if ($('#capital').val() == 'yes' && $('#start_date').val() == 'yes') {
                $('#fileupload,#submitForm').show();
            } else {
                $('#fileupload,#submitForm').hide();
            }
        });

    });

</script>
@endpush
