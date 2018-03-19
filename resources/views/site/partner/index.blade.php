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
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 plan-quote2"> The Portal is designed to engage with partners for transparent Operations & to support with all our value added services from training to onsite support. We hope this transparency will help in strengthening our channel relationship. </div>
                @guest
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
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="password">Password <a href="{{ route('password.request') }}" class="float-right"> Forgot Password? </a> </label>
                                        <input id="password" type="password" class="form-control" name="password" required data-eye>
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
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
                    <p>A &amp; T believes in long term business association for mutual   benefit. It has  always believed in offering value added services to   customers or partners by providing them designing services for   challenging solutions needed by the end users. Ethical business   practices with the right kind of solution offerings  are what matters   most to A &amp; T.</p>
                    <p><strong>Opportunity to enter the most high end of networking technology – the Video over IP market :</strong></p>
                    <p>Video Communication has gained tremendous technology breakthroughs   and is seeing the most explosive growth.  Usage of Video Communication   for homes and business alikes has gained importance in this current   world environment. Today Video Conferencing is gaining momentum as a   communication tool for a wide range of applications from Family reunions   to business meetings, interviews to telemedicine. Video conferencing   has revolutionized the way, we interact, the way we learn, communicate   and transact business.  A &amp; T Video Networks with its rich expertise   in the next generation IP technology is the leader today in  Video   conferencing  &amp; Video Streaming Technologies with over 19 years in   the industry. </p>
                    <p><strong>The Partner / Reseller</strong></p>
                    <p>A &amp; T is looking for Partners and resellers across the Country   for its range of Video communication products and solutions, so that   they are available to the local customers and at the same time the   Reseller enjoys the benefits and strengths of A &amp; T from its   expertise, experience and its International association. </p>
                    <p>We believe success of a venture comes from passion and commitment of   the participating partners. For the range of products and solutions we   offer, demos are crucial to win clients. Hence an investment in demo   units would make our relationship stronger. </p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <p><strong>Reseller Partner:</strong></p>
                    <p>Ideally you are already in reselling products and / or Systems   integration of AV and IT products.  We would be happy to have you on   board to leverage your strength in the market for the disruptive   products we offer. We can build up a strong go to market effort with   your commitment by investing in demo units. </p>
                    <p><strong>Referral Partner:</strong></p>
                    <p>You have strong client relations but do not want to invest in demo units or the projects OR </p>
                    <p>You already possess substantial experience in the Video network industry  OR </p>
                    <p>You are a specialist consultant in a specific industry  having strong   relationship with customers,                                                   </p>
                    <p>then we would like to have you refer your clients and we will do the rest. </p>
                    <p><strong>Teaming Partner:</strong></p>
                    <p>A &amp; T jointly works with strategic organisations on large projects on project basis under a teaming agreement. </p>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection