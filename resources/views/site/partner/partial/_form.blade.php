<div class="form-group">
    {!! Form::label('partner_type','Partner Type*',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        @foreach ($types as $id=>$partner_type)
            <label>{!! Form::radio('partner_type', $id, (old('partner_type')==$id) ); !!} {{$partner_type}} </label>
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::label('company_name','Company Name*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('company_name', old('company_name'), array('class'=>'form-control')) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('name','Name*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('name', @$User->name,['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('email','Email*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('email', @$User->email,['class'=>'form-control']) !!}
    </div>
</div>


<div class="form-group">
    {{ Form::label('password','Password*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
</div>


<div class="form-group">
    {{ Form::label('phone','Phone*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('phone', old('phone'),['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('address','Address*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('address', old('address'),['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('state','State*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('state', old('state'),['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('years_business','Years in business*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('years_business', old('years_business'),['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('no_of_sales','No. of Sales Personnel*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('no_of_sales', old('no_of_sales'),['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('no_of_technical','No. of Technical Support Engineers*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('no_of_technical', old('no_of_technical'),['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('annual_revenue','Annual Revenue*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('annual_revenue', old('annual_revenue'),['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('sales_territory','Sales Territories Covered*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('sales_territory', old('sales_territory'),['class'=>'form-control']) !!}
    </div>
</div>


<div class="form-group">
    {!! Form::label('current_focus','Current Focus Segment*',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        @foreach ($focus as $id=>$current_focus)
            <label>{!! Form::checkbox('current_focus[]', $id, in_array($id, @$Model->current_focus?:[])); !!} {{$current_focus}}</label>
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::label('products_offered','Products/services offered*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('products_offered', old('products_offered'),['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('brands_deal','Brands Dealt With*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {!! Form::text('brands_deal', old('brands_deal'),['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {{ Form::label('captcha','Captcha*',['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-10">
       {!! NoCaptcha::display() !!}
    </div>
</div>

<div class="form-group">
    <div class="col-xs-offset-2 col-xs-6">
        {!! Form::hidden('uid', @$User->id) !!}
        {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
    </div>
</div>