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
                        <li> Cloudline Healthy supports programs likes CME, Surgery recording & broadcasting, Virtual ICUs ( Doctor to Patient & Patient to Relatives) Patient Interactions & medical collaboration.</li>
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
                                                <td class="w-75 option">Video Consultation Features <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Shedule Unlimited Meetings, Host Meetings, Manage Meetings, Control Participants, Discussion Mode, Desktop, Laptop, WebRTC, Mobile, Dfferent Layouts, Audio&Video Mute, Invitation via mail client, Change Camera, Mic&Speaker on the fly, Auto Bandwidth Optimization, Auto echo cancellation, Participant List, Active Speaker View, Ban/Unban participants, Hold/Unhold Participants, Standard/Compact&Fullscreen Mode, Conference Information Link for sharing, AES 128 Enabled.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button></td>
                                                <td><i class="fa fa-check"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Patient Record Sharing <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="WhiteBoard Collaboration, Desktop Sharing, App sharing, Presentation Sharing, File Sharing, Poll/QA Session, Private/Group Chat.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button> </td>
                                                <td><i class="fa fa-check"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Free Consultation Recording</td>
                                                <td>5 Hours</td>
                                            </tr>
                                            <tr>
                                                <td class="option">No of Simultaneous Tele consulation Room</td>
                                                <td><select  name="select" id="select">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">No of Patients / Telemedicine Center</td>
                                                <td><select name="select" id="select">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
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