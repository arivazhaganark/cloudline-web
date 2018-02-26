<div class="form-group{{ $errors->has('partner_type') ? ' has-error' : '' }}">
    {!! Form::label('partner_type','Partner Type*') !!}
    @foreach ($types as $id => $partner_type)
        <div class="form-check form-check-inline">
            {!! Form::radio('partner_type', $id, (old('partner_type')==$id),['id' => "partner_type_{$id}"]); !!}
            <label class="form-check-label" for="partner_type_{{$id}}"> {{$partner_type}} </label>
        </div>
    @endforeach
    @if ($errors->has('partner_type'))
    <span class="help-block">
        <strong>{{ $errors->first('partner_type') }}</strong>
    </span>
    @endif
</div>


<div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
    {{ Form::label('company_name','Company Name*') }}
    {!! Form::text('company_name', old('company_name'), array('class'=>'form-control')) !!}
    @if ($errors->has('company_name'))
    <span class="help-block">
        <strong>{{ $errors->first('company_name') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {{ Form::label('name','Name*') }}
    {!! Form::text('name', @$User->name,['class'=>'form-control']) !!}
    @if ($errors->has('name'))
    <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {{ Form::label('email','Email*') }}
    {!! Form::text('email', @$User->email,['class'=>'form-control']) !!}
    @if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
</div>


<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {{ Form::label('password','Password*') }}
    {!! Form::password('password',['class'=>'form-control']) !!}
    @if ($errors->has('password'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    {{ Form::label('phone','Phone*') }}
    {!! Form::text('phone', old('phone'),['class'=>'form-control']) !!}
    @if ($errors->has('phone'))
    <span class="help-block">
        <strong>{{ $errors->first('phone') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    {{ Form::label('address','Address*') }}
    {!! Form::text('address', old('address'),['class'=>'form-control']) !!}
    @if ($errors->has('address'))
    <span class="help-block">
        <strong>{{ $errors->first('address') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
    {{ Form::label('state','State*') }}
    {!! Form::text('state', old('state'),['class'=>'form-control']) !!}
    @if ($errors->has('state'))
    <span class="help-block">
        <strong>{{ $errors->first('state') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('years_business') ? ' has-error' : '' }}">
    {{ Form::label('years_business','Years in business*') }}
    {!! Form::text('years_business', old('years_business'),['class'=>'form-control']) !!}
    @if ($errors->has('years_business'))
    <span class="help-block">
        <strong>{{ $errors->first('years_business') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('no_of_sales') ? ' has-error' : '' }}">
    {{ Form::label('no_of_sales','No. of Sales Personnel*') }}
    {!! Form::text('no_of_sales', old('no_of_sales'),['class'=>'form-control']) !!}
    @if ($errors->has('no_of_sales'))
    <span class="help-block">
        <strong>{{ $errors->first('no_of_sales') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('no_of_technical') ? ' has-error' : '' }}">
    {{ Form::label('no_of_technical','No. of Technical Support Engineers*') }}
    {!! Form::text('no_of_technical', old('no_of_technical'),['class'=>'form-control']) !!}
    @if ($errors->has('no_of_technical'))
    <span class="help-block">
        <strong>{{ $errors->first('no_of_technical') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('annual_revenue') ? ' has-error' : '' }}">
    {{ Form::label('annual_revenue','Annual Revenue*') }}
    {!! Form::text('annual_revenue', old('annual_revenue'),['class'=>'form-control']) !!}
    @if ($errors->has('annual_revenue'))
    <span class="help-block">
        <strong>{{ $errors->first('annual_revenue') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('sales_territory') ? ' has-error' : '' }}">
    {{ Form::label('sales_territory','Sales Territories Covered*') }}
    {!! Form::text('sales_territory', old('sales_territory'),['class'=>'form-control']) !!}
    @if ($errors->has('sales_territory'))
    <span class="help-block">
        <strong>{{ $errors->first('sales_territory') }}</strong>
    </span>
    @endif
</div>


<div class="form-group{{ $errors->has('current_focus') ? ' has-error' : '' }}">
    {!! Form::label('current_focus','Current Focus Segment*') !!}
    @foreach ($focus as $id=>$current_focus)
    <label>{!! Form::checkbox('current_focus[]', $id, in_array($id, @$Model->current_focus?:[])); !!} {{$current_focus}}</label>
    @endforeach
    @if ($errors->has('current_focus'))
    <span class="help-block">
        <strong>{{ $errors->first('current_focus') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('products_offered') ? ' has-error' : '' }}">
    {{ Form::label('products_offered','Products/services offered*') }}
    {!! Form::text('products_offered', old('products_offered'),['class'=>'form-control']) !!}
    @if ($errors->has('products_offered'))
    <span class="help-block">
        <strong>{{ $errors->first('products_offered') }}</strong>
    </span>
    @endif
</div>

<div class="form-group{{ $errors->has('brands_deal') ? ' has-error' : '' }}">
    {{ Form::label('brands_deal','Brands Dealt With*') }}
    {!! Form::text('brands_deal', old('brands_deal'),['class'=>'form-control']) !!}
    @if ($errors->has('brands_deal'))
    <span class="help-block">
        <strong>{{ $errors->first('brands_deal') }}</strong>
    </span>
    @endif
</div>

<div class="form-group">
    {{ Form::label('captcha','Captcha*') }}
    {!! NoCaptcha::display() !!}
</div>
<div class="form-group no-margin">
    {!! Form::hidden('uid', @$User->id) !!}
    {!! Form::submit('Submit', array('class'=>'btn btn-sec btn-block')) !!}
</div>