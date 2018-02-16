@extends('layouts.site')

@section('content')

<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Cloud Plans</h1>
            </div>
        </div>
    </div>
</section>
<div class="innerpage-cont">
    <section class="home-part1 price-plan-cont price-plans-cont">
        <div class="container">
            <div class="row">


                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h4> Absolutely Transparent - Pay only for features you use </h4>
                </div>

                <div class="col-12 col-md-6 col-lg-3 col-xl-3 pricing-cont ">
                    <div class="card">
                        <div class="card-header  bg-primary">
                            <h3 class="card-title">Enterprise</h3>
                        </div>
                        <div class="card-body">
                            <div class="the-price"> <span class="text-center"> <img src="{{ asset('images/icon1.png') }}"  alt=""></span> </div>
                            <div class="">
                                <div class="table-responsve">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="w-75 option">Video Conferencing Features </td>
                                            </tr>
                                            <tr>
                                                <td class="w-75 option">Collaboration</td>
                                            </tr>
                                            <tr>
                                                <td class="w-75 option">Live Webcasting to third party </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p> <a href="{{ url('enterprise') }}" class="btn btn1 btn2 boder1"> Get Started </a> </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 col-xl-3 pricing-cont ">
                    <div class="card">
                        <div class="card-header  bg-primary">
                            <h3 class="card-title">Wellness</h3>
                        </div>
                        <div class="card-body">
                            <div class="the-price"> <span class="text-center"> <img src="{{ asset ('images/icon2.png') }}"  alt=""></span> </div>
                            <div class="">
                                <div class="table-responsve">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="w-75 option">Patient Record Sharing </td>
                                            </tr>
                                            <tr>
                                                <td class="w-75 option">Video Consultation Features</td>
                                            </tr>
                                            <tr>
                                                <td class="w-75 option">Free Consultation Recording </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p> <a href="{{ url('wellness') }}" class="btn btn1 btn2 boder1"> Get Started </a> </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 col-xl-3 pricing-cont ">
                    <div class="card">
                        <div class="card-header  bg-primary">
                            <h3 class="card-title">Edu</h3>
                        </div>
                        <div class="card-body">
                            <div class="the-price"> <span class="text-center"> <img src="{{ asset('images/icon3.png') }}"  alt=""></span> </div>
                            <div class="">
                                <div class="table-responsve">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="w-75 option">Video Lecturing Features </td>
                                            </tr>
                                            <tr>
                                                <td class="w-75 option">Collaboration / Presentation</td>
                                            </tr>
                                            <tr>
                                                <td class="w-75 option">Webinar</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p> <a href="{{ url('class') }}" class="btn btn1 btn2 boder1"> Get Started </a> </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 col-xl-3 pricing-cont ">
                    <div class="card">
                        <div class="card-header  bg-primary">
                            <h3 class="card-title">Starter</h3>
                        </div>
                        <div class="card-body">
                            <div class="the-price"> <span class="text-center"> <img src="{{ asset('images/icon4.png') }}"  alt=""></span> </div>
                            <div class="">
                                <div class="table-responsve">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="w-75 option">Exclusively for Startups </td>
                                            </tr>
                                            <tr>
                                                <td class="w-75 option">Video Conferencing Features</td>
                                            </tr>
                                            <tr>
                                                <td class="w-75 option">Collaboration</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p> <a href="{{ url('starter') }}" class="btn btn1 btn2 boder1"> Get Started </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection