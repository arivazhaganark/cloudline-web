@extends('layouts.site')

@section('content')

<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Enterprise</h1>
                <p class="text-center"><span> For Industries, BFSI Enterprise, MSMEs, SOHO, Retail</span> </p>
            </div>
        </div>
    </div>
</section>
<div class="innerpage-cont">
    <section class="home-part1  price-plan-cont">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 plan-quote"> Cloudline <strong>Enterprise </strong> is the ultimate multi participant, multi site business meeting tool you will ever need.   </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 priceplan-img"><img src="{{ asset('images/business-plan-img.png') }}"  alt=""> </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 priceplan-txt">
                    <h3> Why Enterprise Plan ? </h3>
                    <ul>
                        <li> Apart from Video meetings, today's Business meetings need seamless 
                            collaboration from Boardroom, desktop, laptops, Mobile and smart watches, connecting from anywhere anytime on a single click.</li>
                        <li>While you do video meetings, you could as well share your laptop screens or share only an application like Word, excel or any. You may wish to 
                            collaborate using a whiteboard where all participants in the meeting can comment, edit and save or you may wish to message to the group or specific participant in private. </li>
                        <li> All these collaboration tools will enable quick decision over meetings thereby 
                            increasing the productivity and efficiency. You can also webcast the meeting or Chairmans address live on to youtube or your own streaming server or through our inbuilt broadcasting feature. </li>
                        <li>Cloudline give full flexibility to their clients to choose their own realistic plan instead of traditional offering by other cloud videoconferencing vendors.</li>
                        <li> For large enterprises with their own servers or data center, we offer an affordable on premises software installation or Private Cloud hosting as well. </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="price-plan-cont1 price-plan-cont">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h4> Enterprise  Plan Pricing</h4>
                </div>
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3  col-xl-6 offset-xl-3 pricing-cont ">
                    <div class="card">
                        <div class="card-header  bg-primary">
                            <h3 class="card-title">Enterprise </h3>
                        </div>
                        <div class="card-body">
                            <div class="the-price"> <span class="text-center"> <a href="{{ url('registerusers') }}" class="btn btn1 btn2 boder1"> Click Here for Demo </a> </span> </div>
                            <div class="">
                                <div class="table-responsve">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="w-75 option">Video Conferencing Features <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Shedule Unlimited Meetings, Host Meetings, Manage Meetings, Control Participants, Discussion Mode, Desktop, Laptop, WebRTC, Mobile, Dfferent Layouts, Audio&Video Mute, Invitation via mail client, Change Camera, Mic&Speaker on the fly, Auto Bandwidth Optimization, Auto echo cancellation, Participant List, Active Speaker View, Ban/Unban participants, Hold/Unhold Participants, Standard/Compact&Fullscreen Mode, Conference Information Link for sharing, AES 128 Enabled.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button></td>
                                                <td><i class="fa fa-check"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Collaboration <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="WhiteBoard Collaboration, Desktop Sharing, App sharing, Presentation Sharing, File Sharing, Poll/QA Session, Private/Group Chat.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button></td>
                                                <td><i class="fa fa-check"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Live Webcasting to third party</td>
                                                <td><i class="fa fa-check"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">No of Simultaneous Meeting room</td>
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
                                                <td class="option">Total no of max participants</td>
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
                                                <td class="option">Board room devices </td>
                                                <td><select name="select2" id="select2">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Recording / Storage (In hours)</td>
                                                <td><select name="select2" id="select2">
                                                        <option>10</option>
                                                        <option>20</option>
                                                        <option>30</option>
                                                        <option>40</option>
                                                        <option>50</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Cloudline Broadcasting (In hours)</td>
                                                <td><select name="select2" id="select2">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Branding</td>
                                                <td><select name="select3" id="select3">
                                                        <option>No</option>
                                                        <option>Yes</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Skype For Business </td>
                                                <td><select name="select4" id="select4">
                                                        <option>No</option>
                                                        <option>Yes</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Webinar</td>
                                                <td>Contact us</td>
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
                                                        <option>1 Month </option>
                                                        <option>3 Month</option>
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
                            <p> <a href="#" class="btn  btn1  buy-acc">Buy  Boardroom Accessories </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection