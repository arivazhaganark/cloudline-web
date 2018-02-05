@extends('layouts.app')

@section('content')
<div class="container">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div><br />
      @endif
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Partners Regsitration</div>

                <div class="panel-body">
                    {!! Form::open(array('url' => 'backend/partners', 'class' => 'form','method' => 'post')) !!}                  
                    {!! Form::label('Partner Type*') !!}
                    
                    <div class="form-group">
                        @foreach ($partner_types as $id=>$partner_type)
                        <label> 
                        {!! Form::radio('partner_type', $id, false); !!} {{$partner_type}} 
                        </label>
                        @endforeach
                    </div>
                    
                    <div class="form-group">
                        {{ Form::label('Company Name*') }}
                        {!! Form::text('company_name', null, 
                        array(
                        'class'=>'form-control', 
                        )) !!}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Name*') }}
                        {!! Form::text('name', null, 
                        array(
                        'class'=>'form-control', 
                        )) !!}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Email*') }}
                        {!! Form::text('email', null,
                        array(
                        'class'=>'form-control',
                        )) !!}
                    </div>
                    
                    
                    <div class="form-group">
                        {{ Form::label('Password*') }}
                        {!! Form::password('password',  
                        array(
                        'class'=>'form-control', 
                        )) !!}
                    </div>


                    <div class="form-group">
                        {{ Form::label('Phone*') }}
                        {!! Form::text('phone', null, 
                        array(
                        'class'=>'form-control', 
                        )) !!}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Address*') }}
                        {!! Form::text('address', null, 
                        array(
                        'class'=>'form-control', 
                        )) !!}
                    </div>

                    <div class="form-group">
                        {{ Form::label('State*') }}
                        {!! Form::text('state', null, 
                        array(
                        'class'=>'form-control', 
                        )) !!}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Years in business*') }}
                        {!! Form::text('years_business', null, 
                        array(
                        'class'=>'form-control', 
                        )) !!}
                    </div> 

                    <div class="form-group">
                        {{ Form::label('No. of Sales Personnel*') }}
                        {!! Form::text('no_of_sales', null, 
                        array(
                        'class'=>'form-control', 
                        )) !!}
                    </div> 

                    <div class="form-group">
                        {{ Form::label('No. of Technical Support Engineers*') }}
                        {!! Form::text('no_of_technical', null, 
                        array(
                        'class'=>'form-control', 
                        )) !!}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Annual Revenue*') }}
                        {!! Form::text('annual_revenue', null, 
                        array(
                        'class'=>'form-control', 
                        )) !!}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Sales Territories Covered*') }}
                        {!! Form::text('sales_territory', null, 
                        array(
                        'class'=>'form-control', 
                        )) !!}
                    </div>

                    {!! Form::label('Current Focus Segment*') !!}
                    
                    <div class="form-group">
                        @foreach ($current_focuses as $id=>$current_focus)
                        <label>
                        {!! Form::checkbox('current_focus[]', $id, false); !!} {{$current_focus}} 
                        </label>
                        @endforeach
                    </div>

                    <div class="form-group">
                        {{ Form::label('Products/services offered*') }}
                        {!! Form::text('products_offered', null, 
                        array(
                        'class'=>'form-control', 
                        )) !!}
                    </div>

                    <div class="form-group">
                        {{ Form::label('Brands Dealt With*') }}
                        {!! Form::text('brands_deal', null, 
                        array(
                        'class'=>'form-control', 
                        )) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Submit', 
                        array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
