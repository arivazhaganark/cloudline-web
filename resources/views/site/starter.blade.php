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
                                                <td class="w-75 option">Video Conferencing Features   <button type="button" class=" " data-toggle="tooltip"  data-placement="right" data-html="true" title="Shedule Unlimited Meetings, Host Meetings, Manage Meetings, Control Participants, Discussion Mode, Desktop, Laptop, WebRTC, Mobile, Dfferent Layouts, Audio&Video Mute, Invitation via mail client, Change Camera, Mic&Speaker on the fly, Auto Bandwidth Optimization, Auto echo cancellation, Participant List, Active Speaker View, Ban/Unban participants, Hold/Unhold Participants, Standard/Compact&Fullscreen Mode, Conference Information Link for sharing, AES 128 Enabled.">
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
                                                <td class="option">No of Simultaneous Meeting room </td>
                                                <td><select name="select2" id="select2">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                    </select>
                                                    </i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Total no of max participants</td>
                                                <td>5</i></td>
                                            </tr>
                                            <tr>
                                                <td class="option">Duration</td>
                                                <td>Upto 3 years </td>
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
                            <p> <a href="#" class="btn  btn1  buy-acc">Avail it for Free</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection