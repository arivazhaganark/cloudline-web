@extends('layouts.site')

@section('content')


<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Medical Device Accessories</h1>
            </div>
        </div>
    </div>
</section>
<div class="innerpage-cont">
    <section class="home-part1  price-plan-cont products-cont">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 products-tab-cont">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cameras</a> </li>
                        <li class="nav-item"> <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Microphones</a> </li>
                        <li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Other Accessories</a> </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row row-eq-height">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 pro">
                                    <div class="product-thumb">
                                        <p> <img src="images/board-pro1.jpg" alt=""></p>
                                        <h4> Roomy </h4>
                                        <p class="pro-subname"> <span> Board room / integration Camera </span> </p>
                                        <div class="product-desciption text-center eq-h1"> Resolution up to 1920x1080, output frame rate up to 60 frames/sec. Variety of optical zoom lens: with 12x, 20x, 30x. Lens has 72.5° without distoration wide viewing angle. Interfaces-DVI(HDMI), SDI, USB, wired LAN. </div>
                                        <p> <a href="{{ url('contactus') }}" class="btn btn1 "> Buy now <i class="fas fa-arrow-right"></i></a></p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 pro">
                                    <div class="product-thumb">
                                        <p> <img src="images/board-pro2.jpg" alt=""></p>
                                        <h4> Klick </h4>
                                        <p class="pro-subname"> <span> Huddle Small conference room Camera</span> </p>
                                        <div class="product-desciption text-center eq-h1"> Resolution is up to 1920x1080 with frame rate up to 60fps and 5x/10x optical zoom lens is with 83.7" wide view angle without distortion, supports HDMI, SDI, HD BaseT, USB and LAN. </div>
                                        <p> <a href="{{ url('contactus') }}" class="btn btn1 "> Buy now <i class="fas fa-arrow-right"></i></a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row row-eq-height">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 pro">
                                    <div class="product-thumb">
                                        <p> <img src="images/board-pro4.jpg" alt=""></p>
                                        <h4> Voice Tracker I </h4>
                                        <div class="product-desciption text-center product-desciption2"> The Voice Tracker Array Microphone was the original implementation of our patented, automatically and electronically steering, "listening beam" technology. It has an analog audio output at mic level, and is powered by a wall power converter so there is no risk of loss of performance as batteries run out. A USB adapter is an available option for use with MACs, and laptops with low performance sound cards. It has built in ceiling mount capability, which removes the clutter of mics on the conference table. It can be used in conventional and VoIP conferencing systems that need the AEC built into the microphone itself. </div>

                                        <p> <a href="{{ url('contactus') }}" class="btn btn1 "> Buy now <i class="fas fa-arrow-right"></i></a></p>


                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 pro">
                                    <div class="product-thumb">
                                        <p> <img src="images/board-pro5.jpg" alt=""></p>
                                        <h4> Voice Tracker 2 </h4>
                                        <div class="product-desciption product-desciption2 text-center"> The Voice Tracker II starts with Acoustic Magic's unique, customer proven, patented scanning beam array microphone technology, which spatially filters undesired sounds and noise over a 360 field of view. But it has been designed to enhance its applicability for video and audio conferencing, while retaining its attributes for meetings and lecture recording, speech recognition, voice control, and security monitoring. </div>
                                        <p> <a href="{{ url('contactus') }}" class="btn btn1 "> Buy now <i class="fas fa-arrow-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row row-eq-height">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 pro">
                                    <div class="product-thumb">
                                        <p> <img src="images/medical-pro1.jpg" alt=""></p>
                                        <h4> VOTIS </h4>

                                        <div class="product-desciption product-desciption2 text-center"> With increasing specialisations and super-specialisations in the field of medical practice, it has become essential for students to get practical and live exposure to operations and other procedures conducted by expert Surgeons. But such experts are few and the students are many.
                                            With VOTIS it is now possible to record and transmit live, high resolution videos of a surgery along with patient parameters and instructions given by the surgeon while the surgery is being performed.</div>
                                        <p> <a href="{{ url('contactus') }}" class="btn btn1 "> Buy now <i class="fas fa-arrow-right"></i></a></p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 pro">
                                    <div class="product-thumb">
                                        <p> <img src="images/board-pro7.jpg" alt=""></p>
                                        <h4> VIDA </h4>

                                        <div class="product-desciption product-desciption2 text-center"> Professional Seamless video switcher & scaler with multiple analog/Digital interfaces. </div>
                                        <p> <a href="{{ url('contactus') }}" class="btn btn1 "> Buy now <i class="fas fa-arrow-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection