@extends('layouts.site')

@section('content')

<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Wellness</h1>
                <p class="text-center"><span> For Multi Specialty Hospitals, Clinics, Specialist Doctors </span> </p>
            </div>
        </div>
    </div>
</section>
<div class="innerpage-cont">
    <section class="home-part1  price-plan-cont">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 plan-quote">  Cloudline <strong> Wellness </strong> is an integrated offering for the Hospitals and can play a significant role in value added patient  </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 priceplan-img priceplan-img2"><img src="{{ asset('images/healthy.png') }}"  alt=""> </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 priceplan-txt">
                    <h3> Why Wellness Plan ? </h3>
                    <ul>
                        <li> Its custom plan supports telemedicine services offering a consultation room with a remote end patient, and if needed include a third specialty doctor in the same consultation. </li>
                        <li> Doctors can virtually provide advice to their patients from anywhere even from their mobile, by reviewing the patient's reports online. </li>
                        <li> Cloudline Wellness supports programs likes CME, Surgery recording & broadcasting, Virtual ICUs ( Doctor to Patient & Patient to Relatives) Patient Interactions & medical collaboration.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=" price-plan-cont price-plan-cont1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h4>Wellness Plan Pricing</h4>
                </div>
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3  col-xl-6 offset-xl-3 pricing-cont ">
                    <div class="card">
                        <div class="card-header  bg-primary">
                            <h3 class="card-title">Wellness</h3>
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
                                                        Video Consultation Features &nbsp;&nbsp;
                                                    </a>
                                                    <div class="panel-collapse collapse" id="collapseExample">
                                                        <ul>
                                                            <li>HD Video & Audio</li>
                                                            <li>Shedule Unlimited Consultation</li>
                                                            <li> Host Consultation </li>
                                                            <li>Manage Consultation</li> 
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
                                                        Patient Record Sharing &nbsp;&nbsp;
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
                                                <td class="option">Free Consultation Recording <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Consultation can be recorded and stored on cloud. It can be accessed and download on demand.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button> </td>
                                                <td>5 Hours</td>
                                            </tr>
                                            <tr>
                                                <td class="option">No of Simultaneous Tele consulation Room <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Total number of Concurrent Consultation  can be happened on your account">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button> </td>
                                                    <td><select id="first" class="contactus price" data-qty='60' onChange="if (this.selectedIndex == 11) self.location = this.options[this.selectedIndex].value"></select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">No of Patients / Telemedicine Center <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Total number of maximum online Patients or Doctors allocated to your account.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button> </td>
                                                    <td><select class="contactus price" data-qty='60' id="above_selected" disabled="on" onChange="if (this.selectedIndex == 11) self.location = this.options[this.selectedIndex].value"></select></td>
                                            </tr>
                                            <tr><td class="plan">Recommended Add-Ons for this Plan</td></tr>
                                            <tr>
                                                <td class="option">Consulation Recording / Storage (In hours) <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Apart from free recording, Extra Consultation hours can be recorded and stored on cloud. It can be accessed and download on demand.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button> </td>
                                                <td><select class="contactus room price" id="consulation" data-qty='12' onChange="if (this.selectedIndex == 11) self.location = this.options[this.selectedIndex].value"></select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">CME Program <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Continuing Medical Education Program over Cloudline videoconferencing.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button> </td>
                                                <td><a href="{{ url('contactus') }}">Contact us</a></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Surgery Broadcasting <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Built-in cloudline broadcasting can be used for Surgery or CME program for better Video & Audio quality and better performance.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button> </td>
                                                <td><a href="{{ url('contactus') }}">Contact us</a></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Virtual ICU (Doctor to Patient, Patient to Relatives) <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Doctor to Patient & Patient to Relatives">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button> </td>
                                                <td><a href="{{ url('contactus') }}">Contact us</a></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Duration</td>
                                                <td>1 Year</td>
                                            </tr>
                                            <tr>
                                                <td class="option">Currency</td>
                                                <td><select name="select5" class="currency"></select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Total Amount</td>
                                                <td id="total"> ? </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p> <a href="{{ url('contactus') }}" class="btn btn1 buynow-btn">Buy Now </a> </p>
                            <p> <a href="{{ url('medical_device_accessories') }}" class="btn  btn1  buy-acc">Buy Medical Device Accessories </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@include('layouts.partials.cloudplan_scripts')
