@extends('layouts.site')

@section('content')
<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Partners Dashboard</h1>
            </div>
        </div>
    </div>
</section>
<div class="innerpage-cont">    
    <section class="home-part1 partners-page-cont my-login-page">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><?php echo $breadcrumbs; ?></li>
            </ol>
        </nav>
        <div class="container">            
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 offset-md-1 offset-lg-1 offset-xl-1 partner-login-form">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <div class="flash-message">
                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close"></a></p>
                                @endif
                                @endforeach
                            </div>
                            @if($Customer->status == 1)
                            <h5>Registered User Details</h5>
                            @elseif($Customer->status == 2)
                            <h5>Customer Details</h5>
                            @endif
                            <div class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">
                                        <strong>Name:</strong>
                                    </div>
                                    <div class="col-sm-10">
                                        {{ $Customer->name }}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">
                                        <strong>Email:</strong>
                                    </div>
                                    <div class="col-sm-10">
                                        {{ $Customer->email }}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">
                                        <strong>Company Name:</strong>
                                    </div>
                                    <div class="col-sm-10">
                                        {{ $Customer->company_name }}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">
                                        <strong>Phone:</strong>
                                    </div>
                                    <div class="col-sm-10">
                                        {{ $Customer->phone }}
                                    </div>
                                </div>

                                <!--Demo Request form-->

                                @if($Demoform)
                                <hr>
                                <h5>Demo Request Form</h5>
                                @foreach($Demos as $Demo)

                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">
                                        <strong>Location:</strong>
                                    </div>
                                    <div class="col-sm-10">
                                        {{ $Demo->location }}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">
                                        <strong>Preferred Date:</strong>
                                    </div>
                                    <div class="col-sm-10">
                                        {{ $Demo->preferred_date }}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">
                                        <strong>Alternate Date:</strong>
                                    </div>
                                    <div class="col-sm-10">
                                        {{ $Demo->alternate_date }}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">
                                        <strong>Schedule Time:</strong>
                                    </div>
                                    <div class="col-sm-10">
                                        {{ $Demo->schedule_time }}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">
                                        <strong>Person Incharge:</strong>
                                    </div>
                                    <div class="col-sm-10">
                                        {{ $Demo->person_incharge }}
                                    </div>
                                </div>

                                @endforeach                          


                                @endif

                                <hr> 

                                <!--Upgrade to Customer details-->

                                @if($Customer->status == 2)
                                <h5>Customer Plan Information</h5>

                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">
                                        <strong>Plan Name:</strong>
                                    </div>
                                    <div class="col-sm-10">
                                        {{ $Customer->plan_name }}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">
                                        <strong>Price:</strong>
                                    </div>
                                    <div class="col-sm-10">
                                        {{ $Customer->plan_price }}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">
                                        <strong>Service Start Date:</strong>
                                    </div>
                                    <div class="col-sm-10">
                                        {{ $Customer->start_date }}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2 control-label">
                                        <strong>Service End Date:</strong>
                                    </div>
                                    <div class="col-sm-10">
                                        {{ $Customer->end_date }}
                                    </div>
                                </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
