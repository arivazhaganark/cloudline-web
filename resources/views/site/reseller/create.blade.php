@extends('layouts.site')

@section('content')
<section class="slider-cont innerpage-heading">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 slider-tagline">
                <h1>Reseller Account Opening Form</h1>
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
            <h4 class="card-title"> Reseller Registration </h4>
            <span><strong>(Instructions: Kindly fill this form by giving complete details. If a question does not apply to you mention “NA”)</strong></span>
            <br />
            <span class="text-danger"><strong>Note: Please upload file in .xls,.doc,pdf Format. All the documents need to be signed and sealed.</strong><br/><br/></span>
            <!--@include('site.partials.alert')-->            
            <div class="card-wrapper">
                <div class="card fat">
                    <div class="card-body">
                        {!! Form::hidden('reseller_id', '',['id'=>'reseller_id']) !!}
                        {{ Form::open(['url' => [ 'partner/reseller/store' ],'method' => 'POST','id'=>'resel_form','name'=>'resel_form', 'class' => 'form-horizontal','files'=>true]) }}
                        @include('site.reseller.partial._form')
                        {!! Form::close() !!}
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</div>
