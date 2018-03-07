@extends('layouts.site')

@section('content')
<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Products</h1>
            </div>
        </div>
    </div>
</section>
<div class="innerpage-cont">
    <section class="home-part1 partners-page-cont my-login-page">
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4">   <h2> Cloudline  video conferencing Platform </h2>  </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 products-txt1"> <img src="images/product-img.jpg" alt="">Cloudline delivers video conferencing solutions to improve the way people communicate and collaborate in all walks of life. Cloudline delivers practical and engaging solutions to Large, medium and Small enterprises, Banking, Financial Services, Pharma & Insurance companies , educational institutions, health care providers, Central & State Government agencies, and IT, ITES & technology companies  across the world. The applications and real-world benefits of Cloudline are boundless. </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 product-txt2">
                    <h5> <strong class="cloudline">Cloud<span>line</span></strong> includes everything you need to deploy
                        HD video collaboration to everyone in your organization </h5>
                    <ul>
                        <li> Group video/audio conferencing within the company employees </li>
                        <li> Conference with participants from multiple organizations</li>
                        <li> Video Collaboration Platform (content sharing, whiteboard, session recording, chat, moderation, online surveys & polls)</li>
                        <li> On Premise Deployment, VCaaS – Video Conferencing as a Service on Cloud or Hybrid offering</li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5  offset-lg-1 offset-xl-1  product-txt2">
                    <h5> Performance and Scalability </h5>
                    <ul>
                        <li> Full HD quality of video & audio calls </li>
                        <li>100 interactive video users in conference & Scalable </li>
                        <li>1000 video ports on standard PC server </li>
                        <li>Control & security </li>
                        <li>SIP telephony integration </li>
                        <li> Cascade Multiple Servers </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 product-txt2 product-txt4">
                    <h5> Interoperability </h5>
                    <ul>
                        <li> РС, Mac, iOS, Android</li>
                        <li> Any web browser + desktop application</li>
                        <li> SIP/H.323 legacy video conferencing devices</li>
                        <li> Integration with Skype for Business (MS Lync)</li>
                        <li> WebRTC support </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5 product-txt2"> <img class="pro_image" src="images/cloudline-support.jpg"  alt=""></div>
            </div>
        </div>
    </section>

    <section class="pro-section2"> 


        <div class="container"> 


            <div class="row"> 


                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">   <h4> Cloudline - Platform as a Service <br/>  <span> Cloudline Client-Server Software - Enhance your Product/Service Offering:          </span></h4>  </div>


                <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 product-txt2">  


                    <ul>  

                        <li><strong>Government agencies</strong>  can deploy on Premise to servers to scale across multiple departments </li>
                        <li><strong>Service Providers and Cloud Computing Service providers</strong> can build their own Video Conferencing services and provide them to their subscribers in SaaS model</li>
                        <li><strong>Application Developers </strong> can add the video Conferencing feature to corporate IT Systems they develop (Workflow and docflow automation, CRM, Intranet Portals, e-Learning platforms, etc)</li>
                        <li><strong>Telemedicine & Tele-education</strong> service providers can integrate their applications and use Cloudline for Video Communication</li>
                        <li><strong>Technology innovators</strong> can incorporate Cloudline in applications like Robotics, AR/VR,etc.</li>
                        <li><strong>Artificial Intelligence</strong> using Cloudline Video Recordings can be used in several areas for predictive decision making. </li>



                    </ul>


                </div>



                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5 mt-5"> 

                    <img src="images/pro-img2.jpg"  alt=""></div>


            </div>




        </div>



    </section>



    <section class="price-plans-cont pro-section3"> 


        <div class="container">

            <div class="row"> 


                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">   <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">   <h4> Cloudline Cloud Service - Simple, Affordable   <br>  <span> The first Video conferencing Cloud service with Custom Plans </span></h4>  </div>  </div>



                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">   


                    <div class="pro-cate-thumb pro-cate-thumb2"> 


                        <p> <img src="images/icon4.png"  alt=""></p>

                        <h6> Starter   </h6>

                        <p class="product-thumb-txt">
                            Startups can use this plan FREE for a period of upto 3 years
                        </p>

                        <a href="{{ url('cloudplans') }}" class="btn btn1 "> Know More <i class="fas fa-arrow-right"></i></a>



                    </div>


                </div>                               


                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">   


                    <div class="pro-cate-thumb"> 


                        <p> <img src="images/icon2.png"  alt=""></p>

                        <h6> Wellness   </h6>

                        <p class="product-thumb-txt"> For Multi Specialty Hospitals, Clinics, Specialist Doctors  </p>

                        <a href="{{ url('cloudplans') }}" class="btn btn1 "> Know More <i class="fas fa-arrow-right"></i></a>



                    </div>


                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">   


                    <div class="pro-cate-thumb pro-cate-thumb2"> 


                        <p> <img src="images/icon3.png"  alt=""></p>

                        <h6> Edu   </h6>

                        <p class="product-thumb-txt">For Schools, Colleges, universities, Training institutes, Medical Colleges, Ivy League institutions, and Corporate Training  </p>

                        <a href="{{ url('cloudplans') }}" class="btn btn1 "> Know More <i class="fas fa-arrow-right"></i></a>



                    </div>


                </div>


                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">   


                    <div class="pro-cate-thumb"> 


                        <p> <img src="images/icon1.png"  alt=""></p>

                        <h6> Enterprise  </h6>

                        <p class="product-thumb-txt"> For Industries, BFSI Enterprise, MSMEs, SOHO, Retail </p>

                        <a href="{{ url('cloudplans') }}" class="btn btn1 "> Know More <i class="fas fa-arrow-right"></i></a>



                    </div>


                </div>




            </div>


        </div>






    </section>




</div>
@endsection