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
                                                            <li>Desktop, Laptop</li>
                                                            <li>WebRTC, Mobile </li>
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
                                                <td class="option">Live Webcasting to third party <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Your Meeting can be streamed to third parties like Youtube, Dcast, Ncast & Etc.,">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button> </td>
                                                <td><i class="fa fa-check"></i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">No of Simultaneous Meeting room  <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Total number of Concurrent Meetings can be happened on your account">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button></td>
                                                <td><select class="contactus no_sim price selectedprice" data-qty='60' onChange="if (this.selectedIndex == 10) self.location = this.options[this.selectedIndex].value"></select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Total no of max participants  <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Total number of Maximum participants allocated to your account">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button></td>
                                                <td><select class="contactus price selectedprice" data-qty='12' id="max_participants" onChange="if (this.selectedIndex == 10) self.location = this.options[this.selectedIndex].value"></select></td>
                                            </tr>
                                            <tr><td class="plan" style="padding-left:75px;">Recommended Add-Ons for this Plan</td></tr>
                                            <tr>
                                                <td class="option">Board room devices  <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Incorporate Legacy Video Conferencing Hardware Devices like Polycom, Avaya, Lifesize, Aver & Etc., in the meeting room.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button> </td>
                                                <td><select class="contactus room_devices price" data-qty='588' onChange="if (this.selectedIndex == 6) self.location = this.options[this.selectedIndex].value"></select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Recording / Storage (In hours)  <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Meeting can be recorded and stored on cloud. Can be accessed and download on demand.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button></td>
                                                <td><select class="contactus room price" id="recording" data-qty='12' onChange="if (this.selectedIndex == 11) self.location = this.options[this.selectedIndex].value"></select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Cloudline Broadcasting (In hours)  <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Built-in cloudline broadcasting for better Video & Audio quality for better experience.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button></td>
                                                <td><select class="contactus casting price" data-qty='600' onChange="if (this.selectedIndex == 11) self.location = this.options[this.selectedIndex].value"></select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Branding  <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="You can have your own domain and brand name instead of our domain and brand.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button></td>
                                                <td><a href="{{ url('contactus') }}">Contact us</a></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Skype For Business <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Incorporate Skype for business users in the meeting room.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button> </td>
                                                <td><select class="contactus casting price" id="recording" data-qty='588' onChange="if (this.selectedIndex == 11) self.location = this.options[this.selectedIndex].value"></select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Webinar  <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="A seminar conducted over the meeting room.">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </button></td>
                                                <td><select name="select2" class="contactus price" data-qty='24' id="max_stud" onChange="if (this.selectedIndex == 6) self.location = this.options[this.selectedIndex].value">
                                                        <option>0</option>
                                                        <option>5</option>
                                                        <option>25</option>
                                                        <option>50</option>
                                                        <option>100</option>
                                                        <option>250</option>
                                                        <option>500</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Currency</td>
                                                <td><select name="select5" class="currency"></select></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Duration</td>
                                                <td>1 Year</td>
                                            </tr>
                                            <tr>
                                                <td class="option">Total Amount</td>
                                                <td id="total">  </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p> <a href="{{ url('contactus') }}" class="btn btn1 buynow-btn">Buy Now </a> </p>
                            <p> <a href="{{ url('board_room_accessories') }}" class="btn  btn1  buy-acc">Buy  Boardroom Accessories </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@include('layouts.partials.cloudplan_scripts')
