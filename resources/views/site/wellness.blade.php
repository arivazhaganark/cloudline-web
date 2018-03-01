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
                                                </td>
                                                <td><i class="fa fa-check"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Free Consultation Recording</td>
                                                <td>5 Hours</td>
                                            </tr>
                                            <tr>
                                                <td class="option">No of Simultaneous Tele consulation Room</td>
                                                <td><select  name="select" id="first">
                                                        <option value="">Select</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="contact_us">Contact us</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">No of Patients / Telemedicine Center</td>
                                                <td><select name="select" id="above_selected">
                                                        <option value="" disabled selected>Select</option>
                                                        <option value="2">2</option>
                                                        <option value="4">4</option>
                                                        <option value="6">6</option>
                                                        <option value="8">8</option>
                                                        <option value="10">10</option>
                                                        <option value="12">12</option>
                                                        <option value="14">14</option>
                                                        <option value="16">16</option>
                                                        <option value="18">18</option>
                                                        <option value="20">20</option>
                                                        <option value="contact_us">Contact us</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Consulation Recording / Storage (In hours)</td>
                                                <td><select name="select2" id="select2">
                                                        <option>0</option>
                                                        <option>10</option>
                                                        <option>20</option>
                                                        <option>30</option>
                                                        <option>40</option>
                                                        <option>50</option>
                                                        <option>60</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">CME Program</td>
                                                <td>Contact us</td>
                                            </tr>
                                            <tr>
                                                <td class="option">Surgery Broadcasting</td>
                                                <td>Contact us</td>
                                            </tr>
                                            <tr>
                                                <td class="option">Virtual ICU (Doctor to Patient, Patient to Relatives)</td>
                                                <td>Contact us</td>
                                            </tr>
                                            <tr>
                                                <td class="option">Duration</td>
                                                <td><select name="select4" id="select4">
                                                        <option>1 Month</option>
                                                        <option>3 Month</option>
                                                        <option>1 Year</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Currency</td>
                                                <td><select name="select5" id="select5">
                                                        <option>INR</option>
                                                        <option>US Dollar</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Total Amount</td>
                                                <td> ? </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p> <a href="#" class="btn btn1 buynow-btn">Buy Now </a> </p>
                            <p> <a href="#" class="btn  btn1  buy-acc">Buy Medical Device Accessories </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection