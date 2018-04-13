@extends('layouts.site')

@section('content')
<div class="innerpage-cont" id="joinvideocall">
    <section class="home-part1 partners-page-cont my-login-page">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 offset-md-1 offset-lg-1 offset-xl-1 partner-login-form">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title"> Join Video Call </h4>
                            <div align="center"> <button class="btn btn-primary" id="videocallbtn" type="button">Join Video Call</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="innerpage-cont" id="guideline">
    <section class="home-part1 partners-page-cont my-login-page">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 offset-md-1 offset-lg-1 offset-xl-1 partner-login-form">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title"> Guidelines </h4>
                            <div class="col-12 col-sm-12 col-md-12 priceplan-txt">
                                <p> Please Read below Guidelines before you joining the conference:- </p>
                                <ul>
                                    <li> You must have a Laptop / Desktop with Camera , Mic and decent internet bandwidth at your premises. (Recommended bandwidth is minimum of 1 Mbps Up & Down if it is leased line or 4Mbps if it is broadband line) </li>
                                    <li> After clicking on the conference link, You may see two options to join conference. Please select second option that is "Or continue without installing any additional software using built-in webrtc technology".  </li>
                                    <li> On the next page, Conference ID and Password must have filled automatically. (Conference ID - <strong>demo</strong>, Password - <strong>9688</strong>) Please fill your name and click "Join a conference".</li>
                                    <li> On the next page, it will ask permission to access your "Camera" and "Mic" . Please click Allow everytime when it asks you. You will get connected to the conference once you did all the above steps. </li>
                                    <li> If your internet goes down in-between the conference then you will get disconnected. Please try to login again when the internet comes up. </li>
                                </ul>
                            </div>
                            <div align="center"><a href="https://service.cloudline.video/service/wjoin/?confid=demo&confpass=9688" class="btn btn1 btn2">Click to Join Video Conference</a></div>
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

        $("#joinvideocall").show();

        $("#guideline").hide();

        $('#videocallbtn').click(function () {
            $('#joinvideocall').hide();
            $('#guideline').show();
        });

    });

</script>
@endpush