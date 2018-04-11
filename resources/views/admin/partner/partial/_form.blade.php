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
        @if(isset($User))
        {!! Form::text('email', @$User->email,['class'=>'form-control', 'readonly' => true]) !!}
        @else
        {!! Form::text('email',null,['class'=>'form-control']) !!}
        @endif
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

@if(@$reseller)
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-minus" style="display: none"></i>
                    General Information
                </a>
            </h4>                                        
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="form-horizontal">                                            
                    <div class="form-group">
                        {{ Form::label('resellers[firm_name]','Firm Name*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[firm_name]', @$reseller->firm_name, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[address]','Address*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[address]', @$reseller->address, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[city]','City*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[city]', @$reseller->city, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[phone]','Phone*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[phone]', @$reseller->phone, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[email]','Email*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[email]', @$reseller->email, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[state]','State*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[state]', @$reseller->state, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[fax]','Fax*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[fax]', @$reseller->fax, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[mobile]','Mobile*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[mobile]', @$reseller->mobile, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[reseller_type]','Type*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            @foreach ($reseller_types as $id => $type)
                            <label>{!! Form::radio('resellers[type]', $id, (@$reseller->type==$id) ); !!} {{$type}} </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[years_corp]','Years of Incorporation*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[years_corp]', @$reseller->years_corp, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[employees_count]','No. of Employees*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[employees_count]', @$reseller->employees_count, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[capital]','Equity/Capital*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[capital]', @$reseller->capital, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[sales_turnover]','Total Sales Turnover Last Year*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[sales_turnover]', @$reseller->sales_turnover, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[roc_no]','ROC Reg. No*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[roc_no]', @$reseller->roc_no, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[gst_no]','GST Reg. no*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[gst_no]', @$reseller->gst_no, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[pan_no]','I.T.PAN No./SIN No*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[pan_no]', @$reseller->pan_no, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('roc','ROC',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::file("attachment[roc]") !!}
                        </div>
                        {{ @$ResellerFiles['roc'][0]['file_name'] }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('gst','GST',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::file("attachment[gst]") !!}
                        </div>
                        {{ @$ResellerFiles['gst'][0]['file_name'] }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('pan','PAN',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::file("attachment[pan]") !!}
                        </div>
                        {{ @$ResellerFiles['pan'][0]['file_name'] }}
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
@endif

@if(@$ResellerContact)
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-minus" style="display: none"></i>
                    Contact Information
                </a>
            </h4>                                        
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="form-horizontal">                                            
                    <div class="form-group">
                        {{ Form::label('contacts[proprietor][name]','Proprietor Name*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('contacts[proprietor][name]', @$ResellerContact['proprietor'][0]['name'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contacts[proprietor][address]','Proprietor Address*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('contacts[proprietor][address]', @$ResellerContact['proprietor'][0]['address'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contacts[proprietor][city]','Proprietor City*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('contacts[proprietor][city]',@$ResellerContact['proprietor'][0]['city'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contacts[proprietor][mobile]','Proprietor Mobile*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('contacts[proprietor][mobile]',@$ResellerContact['proprietor'][0]['mobile'], array('class'=>'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('contacts[partner][name]','Partner Name*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('contacts[partner][name]', @$ResellerContact['partner'][0]['name'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contacts[partner][address]','Partner Address*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('contacts[partner][address]', @$ResellerContact['partner'][0]['address'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contacts[partner][city]','Partner City*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('contacts[partner][city]',@$ResellerContact['partner'][0]['city'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contacts[partner][mobile]','Partner Mobile*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('contacts[partner][mobile]',@$ResellerContact['partner'][0]['mobile'], array('class'=>'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('contacts[director][name]','Director Name*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('contacts[director][name]', @$ResellerContact['director'][0]['name'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contacts[director][address]','Director Address*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('contacts[director][address]', @$ResellerContact['director'][0]['address'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contacts[director][city]','Director City*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('contacts[director][city]',@$ResellerContact['director'][0]['city'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contacts[director][mobile]','Director Mobile*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('contacts[director][mobile]',@$ResellerContact['director'][0]['mobile'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
@endif

@if(@$ResellerOffice)
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-minus" style="display: none"></i>
                    Office Contact Details
                </a>
            </h4>                                        
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="form-horizontal">                                            
                    <div class="form-group">
                        {{ Form::label('office_details[sales][name]','Sales Name*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[sales][name]', @$ResellerOffice['sales'][0]['name'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('office_details[sales][contact_no]','Sales Contact*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[sales][contact_no]', @$ResellerOffice['sales'][0]['contact_no'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('office_details[sales][email]','Sales Email*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[sales][email]',@$ResellerOffice['sales'][0]['email'], array('class'=>'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('office_details[accounts][name]','Accounts Name*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[accounts][name]', @$ResellerOffice['accounts'][0]['name'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('office_details[accounts][contact_no]','Accounts Contact*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[accounts][contact_no]', @$ResellerOffice['accounts'][0]['contact_no'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('office_details[accounts][email]','Accounts Email*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[accounts][email]',@$ResellerOffice['accounts'][0]['email'], array('class'=>'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('office_details[logistics][name]','Logistics Name*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[logistics][name]', @$ResellerOffice['logistics'][0]['name'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('office_details[logistics][contact_no]','Logistics Contact*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[logistics][contact_no]', @$ResellerOffice['logistics'][0]['contact_no'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('office_details[logistics][email]','Logistics Email*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[logistics][email]',@$ResellerOffice['logistics'][0]['email'], array('class'=>'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('office_details[tech][name]','Technical Name*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[tech][name]', @$ResellerOffice['tech'][0]['name'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('office_details[tech][contact_no]','Technical Contact*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[tech][contact_no]', @$ResellerOffice['tech'][0]['contact_no'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('office_details[tech][email]','Technical Email*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[tech][email]',@$ResellerOffice['tech'][0]['email'], array('class'=>'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('office_details[support][name]','Support Name*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[support][name]', @$ResellerOffice['support'][0]['name'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('office_details[support][contact_no]','Support Contact*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[support][contact_no]', @$ResellerOffice['support'][0]['contact_no'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('office_details[support][email]','Support Email*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('office_details[support][email]',@$ResellerOffice['support'][0]['email'], array('class'=>'form-control')) !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>        
    </div>
</div>
@endif

@if(@$ResellerBankDetail)
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-minus" style="display: none"></i>
                    Bank Reference Details
                </a>
            </h4>                                        
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="form-horizontal">                                            
                    <div class="form-group">
                        {{ Form::label('bank_ref[bank_name]','Bank Name*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('bank_ref[bank_name]', @$ResellerBankDetail['bank_name'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('bank_ref[contact_no]','Contact Number*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('bank_ref[contact_no]', @$ResellerBankDetail['contact_no'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('bank_ref[ifsc_code]','IFSC Code/MICR Code/SWIFT Code*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('bank_ref[ifsc_code]', @$ResellerBankDetail['ifsc_code'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('bank_ref[address]','Address*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('bank_ref[address]', @$ResellerBankDetail['address'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('bank_ref[phone]','Phone*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('bank_ref[phone]', @$ResellerBankDetail['phone'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('bank_check','Cancelled Cheque',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::file("attachment[bank_check]") !!}
                        </div>
                        {{ @$ResellerFiles['bank_check'][0]['file_name'] }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('bank_ref[credit_limit]','Credit Limit*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('bank_ref[credit_limit]', @$ResellerBankDetail['credit_limit'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('bank_ref[ac_no]','A/C. No*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('bank_ref[ac_no]', @$ResellerBankDetail['ac_no'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('bank_ref[type]','Type*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('bank_ref[type]', @$ResellerBankDetail['type'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('bank_ref[amount]','Amount',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('bank_ref[amount]', @$ResellerBankDetail['amount'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('bank_ref[collaterals]','Collateral*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            @foreach ($collaterals as $id => $collateral)
                            <label>{!! Form::radio('bank_ref[collaterals]', $id, (@$ResellerBankDetail->collateral==$id) ); !!} {{$collateral}} </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if(@$ResellerTrade)
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-minus" style="display: none"></i>
                    Trade Reference Details
                </a>
            </h4>                                        
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="form-horizontal">  
                    {{ "Trade Reference #1" }}
                    <div class="form-group">
                        {{ Form::label('trade_ref[trade_ref1][firm_name]','Firm Name*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('trade_ref[trade_ref1][firm_name]', @$ResellerTrade['trade_ref1'][0]['firm_name'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('trade_ref[trade_ref1][address]','Address*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('trade_ref[trade_ref1][address]', @$ResellerTrade['trade_ref1'][0]['address'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('trade_ref[trade_ref1][city]','City*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('trade_ref[trade_ref1][city]', @$ResellerTrade['trade_ref1'][0]['city'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('trade_ref[trade_ref1][phone]','Phone*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('trade_ref[trade_ref1][phone]', @$ResellerTrade['trade_ref1'][0]['phone'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('trade_ref[trade_ref1][state]','State*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('trade_ref[trade_ref1][state]', @$ResellerTrade['trade_ref1'][0]['state'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('trade_ref[trade_ref1][fax_no]','Fax Number*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('trade_ref[trade_ref1][fax_no]', @$ResellerTrade['trade_ref1'][0]['fax_no'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    @if(@$ResellerTrade['trade_ref2'])
                    {{ "Trade Reference #2" }}
                    <div class="form-group">
                        {{ Form::label('trade_ref[trade_ref2][firm_name]','Firm Name*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('trade_ref[trade_ref2][firm_name]', @$ResellerTrade['trade_ref2'][0]['firm_name'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('trade_ref[trade_ref2][address]','Address*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('trade_ref[trade_ref2][address]', @$ResellerTrade['trade_ref2'][0]['address'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('trade_ref[trade_ref2][city]','City*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('trade_ref[trade_ref2][city]', @$ResellerTrade['trade_ref2'][0]['city'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('trade_ref[trade_ref2][phone]','Phone*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('trade_ref[trade_ref2][phone]', @$ResellerTrade['trade_ref2'][0]['phone'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('trade_ref[trade_ref2][state]','State*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('trade_ref[trade_ref2][state]', @$ResellerTrade['trade_ref2'][0]['state'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('trade_ref[trade_ref2][fax_no]','Fax Number*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('trade_ref[trade_ref2][fax_no]', @$ResellerTrade['trade_ref2'][0]['fax_no'], array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    @endif    
                    <div class="form-group">
                        {{ Form::label('resellers[trade_date]','Date*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[trade_date]', @$reseller->trade_date, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('resellers[place]','Place*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::text('resellers[place]', @$reseller->place, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('sign','Signature with Seal*',['class'=>'col-sm-2 control-label']) }}
                        <div class="col-sm-10">
                            {!! Form::file("attachment[sign]") !!}
                        </div>
                        {{ @$ResellerFiles['sign'][0]['file_name'] }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if(@$ResellerFiles['ltd'] || @$ResellerFiles['partnership'] || @$ResellerFiles['sole'])
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-minus" style="display: none"></i>
                    Supporting Documents
                </a>
            </h4>                                        
        </div>
        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="form-horizontal">   
                    {!! Form::file("supportdocs[ltd][]",['multiple']) !!}
                    @if(@$ResellerFiles['ltd'])
                    <div class="form-group">
                        <div class="col-sm-2 control-label">
                            <strong>Limited Company:</strong>
                        </div>
                        <div class="col-sm-10">
                            @foreach(@$ResellerFiles['ltd'] as $ltd)
                            <a href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($ltd['file_path']) }}" target="_blank">{{ $ltd['file_name'] }}</a> <br/>
                            @endforeach
                        </div>
                    </div> 
                    @endif

                    {!! Form::file("supportdocs[partnership][]",['multiple']) !!}
                    @if(@$ResellerFiles['partnership'])
                    <div class="form-group">
                        <div class="col-sm-2 control-label">
                            <strong>Partnership Firm:</strong>
                        </div>
                        <div class="col-sm-10">
                            @foreach(@$ResellerFiles['partnership'] as $partnership)
                            <a href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($partnership['file_path']) }}" target="_blank">{{ $partnership['file_name'] }}</a> <br/>
                            @endforeach
                        </div>
                    </div> 
                    @endif

                    {!! Form::file("supportdocs[sole][]",['multiple']) !!}
                    @if(@$ResellerFiles['sole'])
                    <div class="form-group">
                        <div class="col-sm-2 control-label">
                            <strong>Sole Proprietor:</strong>
                        </div>
                        <div class="col-sm-10">
                            @foreach(@$ResellerFiles['sole'] as $sole)
                            <a href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($sole['file_path']) }}" target="_blank">{{ $sole['file_name'] }}</a> <br/>
                            @endforeach
                        </div>
                    </div> 
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<div class="form-group">
    <div class="col-xs-offset-2 col-xs-6">
        {!! Form::hidden('uid', @$User->id) !!}
        {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
    </div>
</div>

@push('scripts')
<script>

    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).parent('.panel').find('.fa-minus').show();
        $(this).parent('.panel').find('.fa-plus').hide();
    })
    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).parent('.panel').find('.fa-minus').hide();
        $(this).parent('.panel').find('.fa-plus').show();
    })
</script>
@endpush