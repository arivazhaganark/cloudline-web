@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Partner - View
    </h1>
    <ol class="breadcrumb">
        <a href="#"><?php echo $breadcrumbs ?></a>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3>Basic Details</h3>
                    <div class="box-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Name:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $User->name }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Partner Type:</strong>
                                </div>
                                <div class="col-sm-10">
                                    @if($Model->partner_type == "S")                                    
                                    {{ "Sliver" }}                                    
                                    @elseif($Model->partner_type == "G")
                                    {{ "Gold" }}
                                    @else 
                                    {{ "Express" }}
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Email:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $User->email }}
                                </div>
                            </div>                            

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Phone:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Model->phone }}
                                </div>
                            </div>   

                            <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    <strong>Company Name:</strong>
                                </div>
                                <div class="col-sm-10">
                                    {{ $Model->company_name }}
                                </div>
                            </div>                            

                        </div>    

                        @if($reseller)

                        <hr>                        
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
                                                <div class="col-sm-2 control-label">
                                                    <strong>Firm Name:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->firm_name }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Address:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->address }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>City:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->city }}
                                                </div>
                                            </div>                            

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Phone:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->phone }}
                                                </div>
                                            </div>   

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Email:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->email }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>State:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->state }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Fax:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->fax }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Mobile:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->mobile }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Type:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    @if($reseller->type == "sole_proprietor")                                    
                                                    {{ "Sole Proprietor" }}                                    
                                                    @elseif($reseller->type == "partnership_firm")
                                                    {{ "Partnership Firm" }}
                                                    @elseif($reseller->type == "private_limited_company")
                                                    {{ "Private Limited Company" }}
                                                    @else
                                                    {{ "Public Limited Company" }}
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Year of Incorporation:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->years_corp }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>No. of Employees:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->employees_count }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Equity/Capital:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->capital }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Total Sales Turnover Last Year:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->sales_turnover }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>ROC Reg. No.:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->roc_no }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>GST Reg. no:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->gst_no }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>I.T.PAN No./SIN No:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->pan_no }}
                                                </div>
                                            </div> 
                                            @if(@$ResellerFiles['roc'])
                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>ROC File:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    <a href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url(@$ResellerFiles['roc'][0]['file_path']) }}" target="_blank">{{ @$ResellerFiles['roc'][0]['file_name'] }}</a>
                                                </div>
                                            </div> 
                                            @endif
                                            @if(@$ResellerFiles['gst'])
                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>GST File:</strong>
                                                </div>
                                                <div class="col-sm-10">                                                    
                                                    <a href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url(@$ResellerFiles['roc'][0]['file_path']) }}" target="_blank">{{ @$ResellerFiles['gst'][0]['file_name'] }}</a>
                                                </div>
                                            </div> 
                                            @endif
                                            @if(@$ResellerFiles['pan'])
                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>PAN File:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    <a href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url(@$ResellerFiles['roc'][0]['file_path']) }}" target="_blank">{{ @$ResellerFiles['pan'][0]['file_name'] }}</a>
                                                </div>
                                            </div> 
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                                <div class="col-sm-2 control-label">
                                                    <strong>Proprietor Name:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerContact['proprietor'][0]['name'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Proprietor Address:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerContact['proprietor'][0]['address'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Proprietor City:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerContact['proprietor'][0]['city'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Proprietor Mobile:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerContact['proprietor'][0]['mobile'] }}
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Partner Name:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerContact['partner'][0]['name'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Partner Address:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerContact['partner'][0]['address'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Partner City:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerContact['partner'][0]['city'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Partner Mobile:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerContact['partner'][0]['mobile'] }}
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Director Name:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerContact['director'][0]['name'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Director Address:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerContact['director'][0]['address'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Director City:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerContact['director'][0]['city'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Director Mobile:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerContact['director'][0]['mobile'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                                <div class="col-sm-2 control-label">
                                                    <strong>Sales Name:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['sales'][0]['name'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Sales Contact Number:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['sales'][0]['contact_no'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Sales Email:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['sales'][0]['email'] }}
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Accounts Name:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['accounts'][0]['name'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Accounts Contact Number:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['accounts'][0]['contact_no'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Accounts Email:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['accounts'][0]['email'] }}
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Logistics Name:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['logistics'][0]['name'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Logistics Contact Number:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['logistics'][0]['contact_no'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Logistics Email:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['logistics'][0]['email'] }}
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Technical Name:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['tech'][0]['name'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Technical Contact Number:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['tech'][0]['contact_no'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Technical Email:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['tech'][0]['email'] }}
                                                </div>
                                            </div>                                            
                                            <hr>
                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Support Name:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['support'][0]['name'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Support Contact Number:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['support'][0]['contact_no'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Support Email:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerOffice['support'][0]['email'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                                <div class="col-sm-2 control-label">
                                                    <strong>Bank Name:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerBankDetail['bank_name'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Contact Number:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerBankDetail['contact_no'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>IFSC Code/MICR Code/SWIFT Code:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerBankDetail['ifsc_code'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Address:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerBankDetail['address'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Phone:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerBankDetail['phone'] }}
                                                </div>
                                            </div>

                                            @if(@$ResellerFiles['bank_check'])
                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Cancelled Cheque:</strong>
                                                </div>
                                                <div class="col-sm-10">                                                    
                                                    <a href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url(@$ResellerFiles['bank_check'][0]['file_path']) }}" target="_blank">{{ @$ResellerFiles['bank_check'][0]['file_name'] }}</a>
                                                </div>
                                            </div> 
                                            @endif

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Credit Limit:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerBankDetail['credit_limit'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>A/C. No Name:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerBankDetail['ac_no'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Type:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    @if(@$ResellerBankDetail->type == "no")                                    
                                                    {{ "No" }}                                    
                                                    @else
                                                    {{ "Yes" }}
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Amount:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerBankDetail['amount'] }}
                                                </div>
                                            </div>                                                                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                            Trade Reference #1
                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Firm Name:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerTrade['trade_ref1'][0]['firm_name'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Address:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerTrade['trade_ref1'][0]['address'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>City:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerTrade['trade_ref1'][0]['city'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Phone:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerTrade['trade_ref1'][0]['phone'] }}
                                                </div>
                                            </div>                                            

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>State:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerTrade['trade_ref1'][0]['state'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Fax:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerTrade['trade_ref1'][0]['fax_no'] }}
                                                </div>
                                            </div>
                                            @if(@$ResellerTrade['trade_ref2'])  
                                            <hr>
                                            Trade Reference #2
                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Firm Name:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerTrade['trade_ref2'][0]['firm_name'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Address:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerTrade['trade_ref2'][0]['address'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>City:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerTrade['trade_ref2'][0]['city'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Phone:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerTrade['trade_ref2'][0]['phone'] }}
                                                </div>
                                            </div>                                            

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>State:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerTrade['trade_ref2'][0]['state'] }}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Fax:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ @$ResellerTrade['trade_ref2'][0]['fax_no'] }}
                                                </div>
                                            </div> 
                                            @endif
                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Date:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->trade_date }}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Place:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    {{ $reseller->place }}
                                                </div>
                                            </div>

                                            @if(@$ResellerFiles['sign'])
                                            <div class="form-group">
                                                <div class="col-sm-2 control-label">
                                                    <strong>Signature with Seal:</strong>
                                                </div>
                                                <div class="col-sm-10">
                                                    <a href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url(@$ResellerFiles['sign'][0]['file_path']) }}" target="_blank">{{ @$ResellerFiles['sign'][0]['file_name'] }}</a>
                                                </div>
                                            </div> 
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

</section>

@endsection

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
