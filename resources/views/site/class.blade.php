@extends('layouts.site')

@section('content')

<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Edu Plan</h1>
                <p class="text-center"><span> For Schools, Colleges, universities, Training institutes, Medical Colleges, Ivy League institutions, and Corporate Training </span> </p>
            </div>
        </div>
    </div>
</section>
<div class="innerpage-cont">
    <section class="home-part1  price-plan-cont">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 plan-quote">  Cloudline <strong> Edu </strong> is a virtual classroom plan for the Education Training sectors including for corporate training in the Banking, Pharma, insurance & other Business Trainings.   </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 priceplan-img priceplan-img2"><img src="{{ asset('images/class.png') }}"  alt=""> </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 priceplan-txt">
                    <h3> Why Edu Plan ? </h3>
                    <ul>
                        <li> The faculty can virtually conduct a webinar based classroom from his scheduled classroom, a studio or his home to reach out to up to 500 students and more who can be in other classrooms or at home. </li>
                        <li> The faculty can share their laptop screen, open an application, collaborate using a whiteboard, conduct question and answer and polling sessions. </li>
                        <li> For large institutions needing in-campus collaboration, an on Premise installation would benefit with lower internet bandwidth costs. </li>
                        <li>Cloudline Edu supports all online education applications like eLearning, Distance education, webcasting, lecture recording </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=" price-plan-cont price-plan-cont1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h4>Edu Plan Pricing</h4>
                </div>
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3  col-xl-6 offset-xl-3 pricing-cont ">
                    <div class="card">
                        <div class="card-header  bg-primary">
                            <h3 class="card-title">Edu</h3>
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
                                                        &nbsp;&nbsp;Video Lecturing Features 
                                                    </a>
                                                    <div class="panel-collapse collapse" id="collapseExample">
                                                        <ul>
                                                            <li>Shedule Unlimited  Lectures</li>
                                                            <li> Host Lectures </li>
                                                            <li>Manage Lectures</li> 
                                                            <li>Control Participants</li>
                                                            <li>Discussion Mode</li>
                                                            <li>Desktop</li>
                                                            <li>Laptop</li>
                                                            <li>WebRTC</li>
                                                            <li>Mobile </li>
                                                            <li>Dfferent Layouts</li>
                                                            <li>Audio & Video Mute</li>
                                                            <li>Invitation via mail client</li>
                                                            <li>Change Camera, Mic & Speaker on the fly</li>
                                                            <li>Auto Bandwidth Optimization</li>
                                                            <li>Auto echo cancellation</li>
                                                            <li>Participant List</li>
                                                            <li>Active Speaker View</li>
                                                            <li>Ban/Unban participants</li>
                                                            <li>Hold/Unhold Participants</li>
                                                            <li>Standard,Compact & Fullscreen Mode</li>
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
                                                        &nbsp;&nbsp;Collaboration / Presentation 
                                                    </a>
                                                    <div class="panel-collapse collapse" id="collapseExample1">
                                                        <ul class="link">
                                                            <li>WhiteBoard Collaboration</li>
                                                            <li>Desktop Sharing</li>
                                                            <li>Application sharing</li>
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
                                                <td class="option">Webinar</td>
                                                <td><i class="fa fa-check"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Live Webcasting to Third Party</td>
                                                <td><i class="fa fa-check"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">No of Simultaneous online class room</td>
                                                <td><select name="select" id="select">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">No of Maximum students</td>
                                                <td><select name="select2" id="select2">
                                                        <option>5</option>
                                                        <option>25</option>
                                                        <option>50</option>
                                                        <option>100</option>
                                                        <option>250</option>
                                                        <option>500</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Virtual class room devices</td>
                                                <td><select name="select3" id="select3">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Lecture Recording / Storage (In hours)</td>
                                                <td><select name="select6" id="select6">
                                                        <option>0</option>
                                                        <option>10</option>
                                                        <option>20</option>
                                                        <option>30</option>
                                                        <option>40</option>
                                                        <option>50</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Cloudline Broadcasting (In Hours)</td>
                                                <td><select name="select7" id="select7">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Your Own Brand</td>
                                                <td><select name="select4" id="select4">
                                                        <option>No</option>
                                                        <option>Yes</option>
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
                                                <td class="option">Duration</td>
                                                <td><select name="select5" id="select5">
                                                        <option>1 Month</option>
                                                        <option>3 Months</option>
                                                        <option>1 Year</option>
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
                            <p> <a href="#" class="btn  btn1  buy-acc">Buy Virtual Class Room Accessories </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection