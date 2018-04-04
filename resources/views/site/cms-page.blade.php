@extends('layouts.site')

@section('content')
<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>{!! $Page->title !!}</h1>
            </div>
        </div>
    </div>
</section>
<div class="innerpage-cont">
    {!! $Page->content !!}
</div>