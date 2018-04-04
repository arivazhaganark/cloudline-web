@extends('layouts.site')

@section('content')

<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Partners</h1>
            </div>
        </div>
    </div>
</section>
<div class="innerpage-cont">
    <section class="home-part1 partners-page-cont my-login-page">
        <div class="container">
            <div class="row">
                @guest
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 plan-quote2"> The Portal is designed to engage with partners for transparent Operations & to support with all our value added services from training to onsite support. We hope this transparency will help in strengthening our channel relationship. </div>                
                <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6  offset-md-2  offset-lg-3 offset-xl-3 partner-login-form">
                    <div class="card-wrapper">
                        <div class="card fat">
                            <div class="card-body">
                                <h4 class="card-title"> Partner Login </h4>
                                <div class="flash-message">
                                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close"></a></p>
                                    @endif
                                    @endforeach
                                </div>
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                        @if ($errors->has('email'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="password">Password  </label>
                                        <input id="password" type="password" class="form-control" name="password" required data-eye>
                                        @if ($errors->has('password'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <a href="{{ route('password.request') }}" class="float-right"> Forgot Password? </a>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group no-margin">
                                        <input type="hidden" name="status" />
                                        @if ($errors->has('status'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                        @endif
                                        <button type="submit" class="btn btn-primary btn-block"> Login </button>
                                    </div>
                                    <div class="margin-top20 text-center"> Don't have an account? <a href="{{ url('partner/create') }}">Create One!</a> </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endguest
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">
                    <h4> Partnerships </h4>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <p>Cloudline believes in long term business association for mutual benefit. It has always believed in offering value added services to customers or partners by providing them designing services for challenging solutions needed by the end users. Ethical business practices with the right kind of solution offerings are what matters most to Cloudline.</p>
                    <p><strong>Opportunity to enter the most high end of Videoconferencing technology – the Video over IP market :</strong></p>
                    <p>Video Communication has gained tremendous technology breakthroughs and is seeing the most explosive growth.  Usage of Video Communication for homes and business alike has gained importance in this current world environment. Today Video Conferencing is gaining momentum as a communication tool for a wide range of applications from Family reunions to business meetings, interviews to telemedicine. Video conferencing has revolutionized the way, we interact, the way we learn, communicate and transact business. Cloudline which is the Sister concern of A&T Video Networks Pvt Ltd with its rich expertise in the next generation IP technology is the leader today in Video conferencing  & Video Streaming Technologies with over 19 years in the industry. </p>
                    <p><strong>The Partner</strong></p>
                    <p>Cloudline is looking for Partners across the Country for its range of Video communication solutions and Products, so that they are available to the local customers and at the same time the Partner enjoys the benefits and strengths of Cloudline from its expertise, experience and its International association. </p>
                    <p>We believe success of a venture comes from passion and commitment of the participating partners. For the range of products and solutions we offer, demos are crucial to win clients. Hence an investment in demo units would make our relationship stronger. </p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <p><strong>Partner Services:</strong></p>
                    <p>We have three types of partner services and it is categorized as Gold, Silver & Express Partner. You can choose your own category to become a partner with Cloudline to avail different offers and services. </p>
                    <p><strong>Gold Partner:</strong></p>
                    <p>Ideally you are already in reselling products and / or Systems integration of AV and IT products.  We would be happy to have you on board to leverage your strength in the market for the disruptive products we offer. We can build up a strong go to market effort with your commitment by investing in it. </p>                    
                    <p><strong>Silver Partner:</strong></p>
                    <p>You have strong client relations but do not want to invest in demo or the projects OR You already possess substantial experience in the Video network industry OR You are a specialist consultant in a specific industry  having strong relationship with customers, then we would like to have you refer your clients and we will do the rest. </p>
                    <p><strong>Express Partner:</strong></p>
                    <p>Cloudline jointly works with strategic organisations on large projects on project basis under a teaming agreement. </p>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection