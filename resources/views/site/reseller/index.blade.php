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
                            <h4 class="card-title"> Reseller Account Opening </h4>
                            @if($Reseller)
                            <div align="center"> <button class="btn btn-primary" type="button" onclick="window.location = '{{ url('partner/reseller/edit/'.$Reseller->id) }}'">Click here to Open Re-Seller Account</button></div>
                            @else
                            <div align="center"> <button class="btn btn-primary" type="button" onclick="window.location = '{{ url('partner/reseller/create') }}'">Click here to Open Re-Seller Account</button></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
