@extends('layouts.site')

@section('content')


<section class="slider-cont">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1> The World's First Video Conferencing Cloud Service With Custom Plans </h1>
                <p class="text-center"> <a href="{{ url('registerusers') }}" class="btn btn1 boder1"> Request a demo </a> </p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 laptop"> <img src="{{ asset('images/laptop.png') }}"  alt=""></div>
        </div>
    </div>
</section>
<section class="home-part1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2> Why Choose Us <br/>
                </h2>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 feature1">
                <p> <img src="{{ asset('images/feature1.png') }}"  alt=""> </p>
                <p> <span>On Prem / Cloud / Hybrid Deployment</span> </p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 feature1">
                <p> <img src="{{ asset('images/feature2.png') }}"  alt=""> </p>
                <p> <span>Custom Vertical Plans </span> </p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 feature1">
                <p> <img src="{{ asset('images/feature3.png') }}"  alt=""> </p>
                <p> <span>Adaptable Features</span> </p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 feature1">
                <p> <img src="{{ asset('images/feature4.png') }}"  alt=""> </p>
                <p> <span>Performance & Scalability</span> </p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-3 col-xl-3 offset-xl-3  feature1">
                <p> <img src="{{ asset('images/feature5.png') }}"  alt=""> </p>
                <p> <span>Interoperability</span> </p>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 feature1">
                <p> <img src="{{ asset('images/feature6.png') }}"  alt=""> </p>
                <p> <span>Transparent Plans</span> </p>
            </div>
        </div>
    </div>
</section>
<section class="home-part2 home-grey-bg1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 home-txt1">
                <h3> What Is <strong class="cloudline">Cloud<span>line</span></strong> </h3>
                <p> Cloudline delivers video conferencing solutions to improve the way people communicate and collaborate in all walks of life. Cloudline delivers practical and engaging solutions to Large, medium and Small enterprises, Banking, Financial Services, Pharma & Insurance companies , educational institutions, health care providers, Central & State Government agencies, and IT, ITES & technology companies  across the world. The applications and real-world benefits of Cloudline are boundless. </p>
                <p> <a href="#" class="btn btn1 "> Explore More <i class="fas fa-arrow-right"></i></a></p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-7 pro-img1"> <img src="{{ asset('images/pro-img1.png') }}" alt=""></div>
        </div>
    </div>
</section>
<section class="home-part2 home-grey-bg2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-7 pro-img1"> <img src="{{ asset('images/pro-img2.png') }}" alt=""> </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 home-txt1 home-txt2">
                <h3>Key Features </h3>
                <ul>
                    <li> <img src="images/why-choose-us1.png"  alt=""> <span>Audio / Video Conferencing </span> <br/>
                    </li>
                    <li> <img src="images/why-choose-us2.png"  alt=""> <span> Collaboration Tools </span> <br/>
                    </li>
                    <li> <img src="images/why-choose-us3.png"  alt=""> <span>Simple and Easy to use </span> <br/>
                    </li>
                    <li> <img src="images/why-choose-us4.png"  alt=""> <span> Customization</span> <br/>
                    </li>
                </ul>
                <br/>
                <p> <a href="#" class="btn btn1 ">Know More <i class="fas fa-arrow-right"></i></a></p>
            </div>
        </div>
    </div>
</section>
<section class="home-part3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h4> Take <strong class="cloudline">Cloud<span>line</span></strong> for a test drive </h4>
                <p> Sign up with your own email address to get <br/>
                    started. Once inside, we'll help your team get
                    set up with any email alias you like.</p>
                <p> <a href="#" class="btn btn1"> Free Trial <i class="fas fa-arrow-right"></i></a></p>
            </div>
        </div>
    </div>
</section>

@endsection

