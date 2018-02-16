@extends('layouts.site')

@section('content')
<section class=" price-plan-cont price-plan-cont1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3  col-xl-6 offset-xl-3 pricing-cont ">
                <div class="card">
                    <div class="card-header  bg-primary">
                        <h3 class="card-title">Contact Us</h3>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['url' => 'contactus/store']) }}
                        <div class="">
                            <div class="table-responsve">
                                <table class="table table-striped table-hover">
                                    <tbody>  
                                        <tr>                                            
                                            <td>{!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Name*']) !!}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {!! Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Email*']) !!} 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {!! Form::text('phone',null,['class'=>'form-control', 'placeholder'=>'Phone*']) !!}  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {!! Form::textArea('message',null,['class'=>'form-control', 'placeholder'=>'Message*']) !!}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>{!! NoCaptcha::display() !!}</td>
                                        </tr>                                                                                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p>{!! Form::submit('Submit', array('class'=>'btn btn1 buynow-btn')) !!}</p>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
