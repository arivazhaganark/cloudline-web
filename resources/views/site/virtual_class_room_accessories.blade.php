@extends('layouts.site')

@section('content')


<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Virtual Class room Accessories </h1>
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
                                        <!--<p> <a href="#" class="btn btn1 "> Buy now <i class="fas fa-arrow-right"></i></a></p>-->
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 pro">
                                    <div class="product-thumb">
                                        <p> <img src="images/board-pro2.jpg" alt=""></p>
                                        <h4> Klick </h4>
                                        <p class="pro-subname"> <span> Huddle Small conference room Camera</span> </p>
                                        <div class="product-desciption text-center eq-h1"> Resolution is up to 1920x1080 with frame rate up to 60fps and 5x/10x optical zoom lens is with 83.7" wide view angle without distortion, supports HDMI, SDI, HD BaseT, USB and LAN. </div>
                                        <!--<p> <a href="#" class="btn btn1 "> Buy now <i class="fas fa-arrow-right"></i></a></p>-->
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row row-eq-height">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 pro">
                                    <div class="product-thumb">
                                        <p> <img src="images/class-pro1.jpg" alt=""></p>
                                        <h4> Avermedia 313 </h4>
                                        <div class="product-desciption product-desciption2 text-center"> Light, stylish and wearable, the AW313 Wireless Teacher Microphone is the ideal solution for your daily teaching. With 2.4 GHz wireless technology, noise and speaker buzz reduction, this hands-free system not only gives you total freedom to interact with students, it also delivers your natural voice in great clarity and stability.</div>

                                        <!--<p> <a href="#" class="btn btn1 "> Buy now <i class="fas fa-arrow-right"></i></a></p>-->


                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 pro">
                                    <div class="product-thumb">
                                        <p> <img src="images/class-pro2.jpg" alt=""></p>
                                        <h4> Avermedia330</h4>
                                        <div class="product-desciption product-desciption2 text-center">The AW330 Wireless Classroom Audio System is a portable sound solution for voice and multimedia both inside and outside the classroom. By utilizing 2.4GHz Wireless radio band, the microphone and speaker are able to maintain a constant 360 degree communication with virtually no signal loss or channel interferences. Our exclusive Speaker Buzz Reduction Technology reduces noise feedbacks from speakers to ensure the best audio quality for learning. Compact and lightweight with a built-in lithium polymer battery, this 20-watt audio system is easy to carry and will provide natural and ample sounds for your day-to-day teaching. </div>
                                        <!--<p> <a href="#" class="btn btn1 "> Buy now <i class="fas fa-arrow-right"></i></a></p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row row-eq-height">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 pro">
                                    <div class="product-thumb">
                                        <p> <img src="images/class-pro3.jpg" alt=""></p>
                                        <h4> MX-1 </h4>

                                        <div class="product-desciption product-desciption3 text-center"> The First in True 4K. Present your lesson plan in spectacular 4K Ultra HD. The new MX-1 Visual Presenter is the world's first true 4K document camera. The SuperSpeed USB 3.0 port allows for viewing of video at full HD up to 60 fps. The optional expansion box adds connectivity options for HDMI and RGB based display.</div>
                                        <p> <a href="{{ url('contactus') }}" class="btn btn1 "> Buy now <i class="fas fa-arrow-right"></i></a></p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 pro">
                                    <div class="product-thumb">
                                        <p> <img src="images/class-pro4.jpg" alt=""></p>
                                        <h4>  L-12iD  </h4>

                                        <div class="product-desciption product-desciption3 text-center"> The L-12iD captures high quality full HD images from all directions. The solid camera arm stays in position and is easily operated by both left-and right-handed users. </div>
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