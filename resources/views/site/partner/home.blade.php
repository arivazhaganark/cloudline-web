@extends('layouts.site')

@section('content');
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
        <div class="container">
            <div class="row">
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close"></a></p>
                    @endif
                    @endforeach
                </div>                
                <div class="table-responsive">
                    <div class="panel-body">
                        {!! $dataTable->table(['class' => 'table table-striped table-bordered', 'id' => 'datatable-buttons'],['width' => '100%']) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<!--<div class="modal fade bs-example-modal-lg" id="demoModal"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="padding-top: 60px">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Demo Request Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" style="overflow: hidden;">
                
            </div>
        </div>
    </div>
</div>-->


@endsection
@include('site.partials.datatable_scripts')