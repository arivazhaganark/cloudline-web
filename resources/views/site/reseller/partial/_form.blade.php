<h5>1. General Information</h5>
<div class="form-row">
    <div class="form-group col-md-3">
        {{ Form::label("resellers[firm_name]",'Firm Name*') }}
        {!! Form::text("resellers[firm_name]", @$Reseller->firm_name, array('class'=>'form-control')) !!}
        @if ($errors->has('resellers.firm_name'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.firm_name') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("resellers[address]",'Address*') }}
        {!! Form::text("resellers[address]", @$Reseller->address,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.address'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.address') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("resellers[city]",'City/Pin*') }}
        {!! Form::text("resellers[city]",  @$Reseller->city,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.city'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.city') }}</strong>
        </span>
        @endif
    </div>


    <div class="form-group col-md-3">
        {{ Form::label("resellers[phone]",'Phone*') }}
        {!! Form::text("resellers[phone]",@$Reseller->phone,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.phone'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.phone') }}</strong>
        </span>
        @endif
    </div>


    <div class="form-group col-md-3">
        {{ Form::label("resellers[email]",'Email*') }}
        {!! Form::text("resellers[email]", @$Reseller->email,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.email'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("resellers[state]",'State*') }}
        {!! Form::text("resellers[state]", @$Reseller->state,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.state'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.state') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("resellers[fax]",'Fax*') }}
        {!! Form::text("resellers[fax]", @$Reseller->fax,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.fax'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.fax') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("resellers[mobile]",'Mobile*') }}
        {!! Form::text("resellers[mobile]", @$Reseller->mobile,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.mobile'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.mobile') }}</strong>
        </span>
        @endif
    </div>        

    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
        {!! Form::label("resellers[type]",'Type*') !!}
        @foreach ($types as $id => $type)
        <div class="form-check form-check-inline">
            {!! Form::radio("resellers[type]", $id, (@$Reseller->type==$id),['id' => "type_{$id}"]); !!}
            <label class="form-check-label" for="type_{{$id}}"> {{$type}} </label>
        </div>
        @endforeach
        <br />
        @if ($errors->has('resellers.type'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.type') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("resellers[years_corp]",'Year of Incorporation*') }}
        {!! Form::text("resellers[years_corp]",@$Reseller->years_corp,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.years_corp'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.years_corp') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("resellers[employees_count]",'No. of Employees*') }}
        {!! Form::text("resellers[employees_count]", @$Reseller->employees_count,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.employees_count'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.employees_count') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("resellers[capital]",'Equity/Capital*') }}
        {!! Form::text("resellers[capital]", @$Reseller->capital,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.capital'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.capital') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("resellers[sales_turnover]",'Total Sales Turnover Last Year*') }}
        {!! Form::text("resellers[sales_turnover]", @$Reseller->sales_turnover,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.sales_turnover'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.sales_turnover') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label("resellers[roc_no]",'ROC Reg. No.( If Company)') }}
        {!! Form::text("resellers[roc_no]", @$Reseller->roc_no,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.roc_no'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.roc_no') }}</strong> 
        </span>
        @endif
    </div>        

    <div class="form-group col-md-4">
        {{ Form::label("resellers[gst_no]",'GST Reg. no.*') }}
        {!! Form::text("resellers[gst_no]", @$Reseller->gst_no,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.gst_no'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.gst_no') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label("resellers[pan_no]",'I.T.PAN No./SIN No.*') }}
        {!! Form::text("resellers[pan_no]", @$Reseller->pan_no,['class'=>'form-control']) !!}
        @if ($errors->has('resellers.pan_no'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.pan_no') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-4">
        {!! Form::file("attachment[roc]") !!}
        {{ $file_name = basename(@$file_roc['file_path']) }}
        @if ($errors->has('attachment.roc'))
        <span class="text-danger">
            <strong>{{ $errors->first('attachment.roc') }}</strong> 
        </span>
        @endif
    </div>

    <div class="form-group col-md-4">
        {!! Form::file("attachment[gst]") !!}
        {{ $file_name = basename(@$file_gst['file_path']) }}
        @if ($errors->has('attachment.gst'))
        <span class="text-danger">
            <strong>{{ $errors->first('attachment.gst') }}</strong> 
        </span>
        @endif
    </div>

    <div class="form-group col-md-4">
        {!! Form::file("attachment[pan]") !!}
        {{ $file_name = basename(@$file_pan['file_path']) }}
        @if ($errors->has('attachment.pan'))
        <span class="text-danger">
            <strong>{{ $errors->first('attachment.pan') }}</strong> 
        </span>
        @endif
    </div>

</div>

<h5>2. Contact Information</h5>
<span>(Name& Residential Address of Proprietor/Partner /Directors)</span>

<div class="form-row">
    <div class="form-group col-md-3">
        {{ Form::label("contacts[proprietor][name]",'Name*') }}
        {!! Form::text("contacts[proprietor][name]", @$prop->name, array('class'=>'form-control')) !!}
        @if ($errors->has('contacts.proprietor.name'))
        <span class="text-danger">
            <strong>{{ $errors->first('contacts.proprietor.name') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("contacts[proprietor][address]",'Address*') }}
        {!! Form::text("contacts[proprietor][address]", @$prop->address, array('class'=>'form-control')) !!}
        @if ($errors->has('contacts.proprietor.address'))
        <span class="text-danger">
            <strong>{{ $errors->first('contacts.proprietor.address') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("contacts[proprietor][city]",'City*') }}
        {!! Form::text("contacts[proprietor][city]", @$prop->city, array('class'=>'form-control')) !!}
        @if ($errors->has('contacts.proprietor.city'))
        <span class="text-danger">
            <strong>{{ $errors->first('contacts.proprietor.city') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("contacts[proprietor][mobile]",'Mobile*') }}
        {!! Form::text("contacts[proprietor][mobile]", @$prop->mobile, array('class'=>'form-control')) !!}
        @if ($errors->has('contacts.proprietor.mobile'))
        <span class="text-danger">
            <strong>{{ $errors->first('contacts.proprietor.mobile') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("contacts[partner][name]",'Name*') }}
        {!! Form::text("contacts[partner][name]", @$partner->name, array('class'=>'form-control')) !!}
        @if ($errors->has('contacts.partner.name'))
        <span class="text-danger">
            <strong>{{ $errors->first('contacts.partner.name') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("contacts[partner][address]",'Address*') }}
        {!! Form::text("contacts[partner][address]", @$partner->address, array('class'=>'form-control')) !!}
        @if ($errors->has('contacts.partner.address'))
        <span class="text-danger">
            <strong>{{ $errors->first('contacts.partner.address') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("contacts[partner][city]",'City*') }}
        {!! Form::text("contacts[partner][city]", @$partner->city, array('class'=>'form-control')) !!}
        @if ($errors->has('contacts.partner.city'))
        <span class="text-danger">
            <strong>{{ $errors->first('contacts.partner.city') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("contacts[partner][mobile]",'Mobile*') }}
        {!! Form::text("contacts[partner][mobile]", @$partner->mobile, array('class'=>'form-control')) !!}
        @if ($errors->has('contacts.partner.mobile'))
        <span class="text-danger">
            <strong>{{ $errors->first('contacts.partner.mobile') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("contacts[director][name]",'Name*') }}
        {!! Form::text("contacts[director][name]", @$director->name, array('class'=>'form-control')) !!}
        @if ($errors->has('contacts.director.name'))
        <span class="text-danger">
            <strong>{{ $errors->first('contacts.director.name') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("contacts[director][address]",'Address*') }}
        {!! Form::text("contacts[director][address]", @$director->address, array('class'=>'form-control')) !!}
        @if ($errors->has('contacts.director.address'))
        <span class="text-danger">
            <strong>{{ $errors->first('contacts.director.address') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("contacts[director][city]",'City*') }}
        {!! Form::text("contacts[director][city]", @$director->city, array('class'=>'form-control')) !!}
        @if ($errors->has('contacts.director.city'))
        <span class="text-danger">
            <strong>{{ $errors->first('contacts.director.city') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("contacts[director][mobile]",'Mobile*') }}
        {!! Form::text("contacts[director][mobile]", @$director->mobile, array('class'=>'form-control')) !!}
        @if ($errors->has('contacts.director.mobile'))
        <span class="text-danger">
            <strong>{{ $errors->first('contacts.director.mobile') }}</strong>
        </span>
        @endif
    </div>
</div>




<h5>2A: Office Contact Details</h5> 

<div class="form-row">
    <div class="form-group col-md-3">
        <h6>Department</h6>        
    </div>
    <div class="form-group col-md-3">
        <h6>Name</h6>        
    </div>
    <div class="form-group col-md-3">
        <h6>Contact No.</h6>        
    </div>
    <div class="form-group col-md-3">
        <h6>Mail ID</h6>        
    </div>
    <div class="form-group col-md-3">
        {{ Form::label('type','Sales*') }}
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[sales][name]", @$sales->name,['class'=>'form-control','placeholder'=>'Enter Sales Name']) !!}
        @if ($errors->has('office_details.sales.name'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.sales.name') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[sales][contact_no]", @$sales->contact_no,['class'=>'form-control','placeholder'=>'Enter Sales Contact']) !!}
        @if ($errors->has('office_details.sales.contact_no'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.sales.contact_no') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[sales][email]",@$sales->email,['class'=>'form-control','placeholder'=>'Enter Sales Email']) !!}
        @if ($errors->has('office_details.sales.email'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.sales.email') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {{ Form::label('type','Accounts *') }}
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[accounts][name]", @$accounts->name,['class'=>'form-control','placeholder'=>'Enter Accounts Name']) !!}
        @if ($errors->has('office_details.accounts.name'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.accounts.name') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[accounts][contact_no]", @$accounts->contact_no,['class'=>'form-control','placeholder'=>'Enter Accounts Contact']) !!}
        @if ($errors->has('office_details.accounts.contact_no'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.accounts.contact_no') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[accounts][email]", @$accounts->email,['class'=>'form-control','placeholder'=>'Enter Accounts Email']) !!}
        @if ($errors->has('office_details.accounts.email'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.accounts.email') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {{ Form::label('type','Logistics *') }}
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[logistics][name]", @$logistics->name,['class'=>'form-control','placeholder'=>'Enter Logistics Name']) !!}
        @if ($errors->has('office_details.logistics.name'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.logistics.name') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[logistics][contact_no]", @$logistics->contact_no,['class'=>'form-control','placeholder'=>'Enter Logistics Contact']) !!}
        @if ($errors->has('office_details.logistics.contact_no'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.logistics.contact_no') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[logistics][email]", @$logistics->email,['class'=>'form-control','placeholder'=>'Enter Logistics Email']) !!}
        @if ($errors->has('office_details.logistics.email'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.logistics.email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('type','Technical *') }}
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[tech][name]", @$tech->name,['class'=>'form-control','placeholder'=>'Enter Logistics Name']) !!}
        @if ($errors->has('office_details.tech.name'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.tech.name') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[tech][contact_no]", @$tech->contact_no,['class'=>'form-control','placeholder'=>'Enter Logistics Contact']) !!}
        @if ($errors->has('office_details.tech.contact_no'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.tech.contact_no') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[tech][email]", @$tech->email,['class'=>'form-control','placeholder'=>'Enter Logistics Email']) !!}
        @if ($errors->has('office_details.tech.email'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.tech.email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('type','Support *') }}
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[support][name]", @$support->name,['class'=>'form-control','placeholder'=>'Enter Logistics Name']) !!}
        @if ($errors->has('office_details.support.name'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.support.name') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[support][contact_no]", @$support->contact_no,['class'=>'form-control','placeholder'=>'Enter Logistics Contact']) !!}
        @if ($errors->has('office_details.support.contact_no'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.support.contact_no') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-3">
        {!! Form::text("office_details[support][email]", @$support->email,['class'=>'form-control','placeholder'=>'Enter Logistics Email']) !!}
        @if ($errors->has('office_details.support.email'))
        <span class="text-danger">
            <strong>{{ $errors->first('office_details.support.email') }}</strong>
        </span>
        @endif
    </div>
</div>
<h5>3. Bank Reference</h5>
<div class="form-row">
    <div class="form-group col-md-4">
        {{ Form::label("bank_ref[bank_name]",'Bank Name*') }}
        {!! Form::text("bank_ref[bank_name]", @$ResellerBankDetail->bank_name, array('class'=>'form-control')) !!}
        @if ($errors->has('bank_ref.bank_name'))
        <span class="text-danger">
            <strong>{{ $errors->first('bank_ref.bank_name') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label("bank_ref[contact_no]",'Contact*') }}
        {!! Form::text("bank_ref[contact_no]", @$ResellerBankDetail->contact_no, array('class'=>'form-control')) !!}
        @if ($errors->has('bank_ref.contact_no'))
        <span class="text-danger">
            <strong>{{ $errors->first('bank_ref.contact_no') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label("bank_ref[ifsc_code]",'IFSC Code/MICR Code/SWIFT Code*') }}
        {!! Form::text("bank_ref[ifsc_code]", @$ResellerBankDetail->ifsc_code, array('class'=>'form-control')) !!}
        @if ($errors->has('bank_ref.ifsc_code'))
        <span class="text-danger">
            <strong>{{ $errors->first('bank_ref.ifsc_code') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label("bank_ref[address]",'Address*') }}
        {!! Form::text("bank_ref[address]", @$ResellerBankDetail->address, array('class'=>'form-control')) !!}
        @if ($errors->has('bank_ref.address'))
        <span class="text-danger">
            <strong>{{ $errors->first('bank_ref.address') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label("bank_ref[phone]",'Phone*') }}
        {!! Form::text("bank_ref[phone]", @$ResellerBankDetail->phone, array('class'=>'form-control')) !!}
        @if ($errors->has('bank_ref.phone'))
        <span class="text-danger">
            <strong>{{ $errors->first('bank_ref.phone') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-4">
        {!! Form::file("attachment[bank_check]", old('file_path'), array('class'=>'form-control')) !!}
        <span class="font-12" style="font-size: 15px !important;">Cancelled Cheque (Scanned copy to be attached)</span>
        {{ $file_name = basename(@$file_bank_check['file_path']) }}
        @if ($errors->has('attachment.bank_check'))
        <span class="text-danger">
            <strong>{{ $errors->first('attachment.bank_check') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("bank_ref[credit_limit]",'Credit Limit *') }}
        {!! Form::text("bank_ref[credit_limit]", @$ResellerBankDetail->credit_limit, array('class'=>'form-control')) !!}
        @if ($errors->has('bank_ref.credit_limit'))
        <span class="text-danger">
            <strong>{{ $errors->first('bank_ref.credit_limit') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("bank_ref[ac_no]",'A/C. No*') }}
        {!! Form::text("bank_ref[ac_no]", @$ResellerBankDetail->ac_no, array('class'=>'form-control')) !!}
        @if ($errors->has('bank_ref.ac_no'))
        <span class="text-danger">
            <strong>{{ $errors->first('bank_ref.ac_no') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("bank_ref[type]",'Type*') }}
        {!! Form::text("bank_ref[type]", @$ResellerBankDetail->type, array('class'=>'form-control')) !!}
        @if ($errors->has('bank_ref.type'))
        <span class="text-danger">
            <strong>{{ $errors->first('bank_ref.type') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("bank_ref[amount]",'Amount') }}
        {!! Form::text("bank_ref[amount]", @$ResellerBankDetail->amount, array('class'=>'form-control')) !!}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("bank_ref[collateral]",'Collateral*') }}
        @foreach ($collaterals as $id => $collateral)
        <div class="form-check form-check-inline">
            {!! Form::radio("bank_ref[collateral]", $id, (@$ResellerBankDetail->collateral==$id),['id' => "collateral_{$id}"]); !!}
            <label class="form-check-label" for="collateral_{{$id}}"> {{$collateral}} </label>
        </div>
        @endforeach
        <br/>
        @if ($errors->has('bank_ref.collateral'))
        <span class="text-danger">
            <strong>{{ $errors->first('bank_ref.collateral') }}</strong>
        </span>
        @endif
    </div>

</div>

<h5>4.Trade Refereces</h5>
<span>Trade Referece #1</span>
<div class="form-row">
    <div class="form-group col-md-2">
        {{ Form::label("trade_ref[1][firm_name]",'Firm Name*') }}
        {!! Form::text("trade_ref[1][firm_name]",@$trade_ref1->firm_name, array('class'=>'form-control')) !!}
        @if ($errors->has('trade_ref.1.firm_name'))
        <span class="text-danger">
            <strong>{{ $errors->first('trade_ref.1.firm_name') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-2">
        {{ Form::label("trade_ref[1][address]",'Address*') }}
        {!! Form::text("trade_ref[1][address]", @$trade_ref1->address, array('class'=>'form-control')) !!}
        @if ($errors->has('trade_ref.1.address'))
        <span class="text-danger">
            <strong>{{ $errors->first('trade_ref.1.address') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-2">
        {{ Form::label("trade_ref[1][city]",'City*') }}
        {!! Form::text("trade_ref[1][city]",@$trade_ref1->city, array('class'=>'form-control')) !!}
        @if ($errors->has('trade_ref.1.city'))
        <span class="text-danger">
            <strong>{{ $errors->first('trade_ref.1.city') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-2">
        {{ Form::label("trade_ref[1][phone]",'Phone*') }}
        {!! Form::text("trade_ref[1][phone]", @$trade_ref1->phone, array('class'=>'form-control')) !!}
        @if ($errors->has('trade_ref.1.phone'))
        <span class="text-danger">
            <strong>{{ $errors->first('trade_ref.1.phone') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-2">
        {{ Form::label("trade_ref[1][state]",'State*') }}
        {!! Form::text("trade_ref[1][state]", @$trade_ref1->state, array('class'=>'form-control')) !!}
        @if ($errors->has('trade_ref.1.state'))
        <span class="text-danger">
            <strong>{{ $errors->first('trade_ref.1.state') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-2">
        {{ Form::label("trade_ref[1][fax_no]",'Fax*') }}
        {!! Form::text("trade_ref[1][fax_no]", @$trade_ref1->fax_no, array('class'=>'form-control')) !!}
        @if ($errors->has('trade_ref.1.fax_no'))
        <span class="text-danger">
            <strong>{{ $errors->first('trade_ref.1.fax_no') }}</strong>
        </span>
        @endif
    </div>
</div>
<span>Trade Referece #2(Optional)</span>
<div class="form-row">  
    <div class="form-group col-md-2">
        {{ Form::label("trade_ref[2][firm_name]",'Firm Name') }}
        {!! Form::text("trade_ref[2][firm_name]", @$trade_ref2->firm_name, array('class'=>'form-control')) !!}
    </div>

    <div class="form-group col-md-2">
        {{ Form::label("trade_ref[2][address]",'Address') }}
        {!! Form::text("trade_ref[2][address]", @$trade_ref2->address, array('class'=>'form-control')) !!}
    </div>

    <div class="form-group col-md-2">
        {{ Form::label("trade_ref[2][city]",'City') }}
        {!! Form::text("trade_ref[2][city]", @$trade_ref2->city, array('class'=>'form-control')) !!}
    </div>

    <div class="form-group col-md-2">
        {{ Form::label("trade_ref[2][phone]",'Phone') }}
        {!! Form::text("trade_ref[2][phone]", @$trade_ref2->phone, array('class'=>'form-control')) !!}
    </div>

    <div class="form-group col-md-2">
        {{ Form::label("trade_ref[2][state]",'State') }}
        {!! Form::text("trade_ref[2][state]", @$trade_ref2->state, array('class'=>'form-control')) !!}
    </div>

    <div class="form-group col-md-2">
        {{ Form::label("trade_ref[2][fax_no]",'Fax') }}
        {!! Form::text("trade_ref[2][fax_no]", @$trade_ref2->fax_no, array('class'=>'form-control')) !!}
    </div>

</div>
<span class="font-12" style="font-size: 15px !important;">THIS IS TO AUTHORISE YOU TO VERIFY OUR BANK/TRADE CREDENTIALS. APPLICANT'S SIGNATURE ATTESTS FINANCIAL RESPONSIBILITY, ABILITY AND WILLINGNESS TO PAY INVOICES IN ACCORDANCE WITH AGREED UPON TEFRMS.</span>

<div class="form-row">  
    <div class="form-group col-md-3">
        {{ Form::label("resellers[trade_date]",'Date*') }}
        {!! Form::text("resellers[trade_date]", @$Reseller->trade_date, array('class'=>'form-control','id'=>'startdate')) !!}
        @if ($errors->has('resellers.trade_date'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.trade_date') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("resellers[place]",'Place*') }}
        {!! Form::text("resellers[place]", @$Reseller->place, array('class'=>'form-control')) !!}
        @if ($errors->has('resellers.place'))
        <span class="text-danger">
            <strong>{{ $errors->first('resellers.place') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label("attachment[sign]",'Signature with Seal*') }}
        {!! Form::file("attachment[sign]") !!}
        {{ $file_name = basename(@$sign['file_path']) }}
        @if ($errors->has('attachment.sign'))
        <span class="text-danger">
            <strong>{{ $errors->first('attachment.sign') }}</strong>
        </span>
        @endif
    </div>

</div>
<h5>Supporting Documents Required</h5>
<strong style="font-size: 20px;">Limited Company</strong> <br/> 
<span class="font-12" style="font-size: 15px !important;">Memorandum of Association, Articles of Association, Building on Rental/Own, Certificate of Incorporation, Audited Balance sheet for 2 years Permanent address of Managing Director/Any two directors, sales tax registration certificate, IT PAN.,Copy of latest IT Return Acknowledgement, Copy of bank statement for last three months, Security cheque Two Nos.</span>

<div class="form-row">
    <div class="form-group col-md-3">
        {!! Form::file("supportdocs[ltd][]",['multiple']) !!}
    </div>
</div>

<strong style="font-size: 20px;">Partnership Firm</strong> <br/> 
<span class="font-12" style="font-size: 15px !important;">Copy of Partnership Deed, Certificate of Registration of registered firm, Building on Rental/Own, Audited balance sheet for 2 years, Permanent address of all partners, Sales Tax Registration Certificate, IT PAN, copy of latest IT Return acknowledgement, Bank Statement for last three moths. Security cheque Two Nos.</span>

<div class="form-row">
    <div class="form-group col-md-3">
        {!! Form::file("supportdocs[partnership][]",['multiple']) !!}
    </div>
</div>

<strong style="font-size: 20px;">Sole Proprietor</strong> <br/> 
<span class="font-12" style="font-size: 15px !important;">Permanent Residential address of proprietor, Proof of Residential Address, Building on Rental/Own, Sales Tax Registration Certificate, IT PAN, Copy of latest IT Return Acknowledgement, copy of bank statement for last three months, Security cheque Two Nos.</span>

<div class="form-row">
    <div class="form-group col-md-3">
        {!! Form::file("supportdocs[sole][]",['multiple']) !!}
    </div>
</div>

<strong>Note: Please upload file in .xls,.doc,pdf Format. All the documents need to be signed and sealed.</strong> <br/> <br/>

<div class="form-group" align="center">
    {!! Form::submit('Submit', array('class'=>'btn btn-sec')) !!}
</div>

