Hi Admin, <br>

Following fields were edited by Partner ({{ $data['partner_name'] }}) <br/>

@if($data['resellers'])
<h3>General Information:</h3> 
@foreach ($data['resellers'] as $key=>$reseller)
<p>
    {{ ucwords(str_replace("_", " ",$key)) }}: {{ $reseller }}
</p>
@endforeach
@endif

@if($data['contacts']['proprietor'] || $data['contacts']['partner'] || $data['contacts']['director'])
<h3>Contact Information:</h3>

@foreach ($data['contacts'] as $key=>$contacts)
@if($contacts)
<h3> {{ ucwords($key)}} </h3>
@endif
@if (is_array($contacts) || is_object($contacts))
@foreach ($contacts as $key=>$contact)
<p>
    {{ ucwords(str_replace("_", " ",$key)) }}: {{ $contact }}
</p>
@endforeach
@endif
@endforeach
@endif

@if($data['office_details']['sales'] || $data['office_details']['accounts'] ||$data['office_details']['logistics'] ||$data['office_details']['tech'] || $data['office_details']['support'])
<h3>Office Details:</h3>

@foreach ($data['office_details'] as $key=>$office_details)
@if($office_details)
<h3> {{ ucwords($key)}} </h3>
@endif
@if (is_array($office_details) || is_object($office_details))
@foreach ($office_details as $key=>$office_detail)
<p>
    {{ ucwords(str_replace("_", " ",$key)) }}: {{ $office_detail }}
</p>
@endforeach
@endif
@endforeach
@endif

@if($data['bank_ref'])
<h3>Bank Reference</h3>
@foreach ($data['bank_ref'] as $key=>$bank_ref)
<p>
    {{ ucwords(str_replace("_", " ",$key)) }}: {{ $bank_ref }}
</p>
@endforeach
@endif

@if(@$data['trade_ref'][trade_ref1] || @$data['trade_ref'][trade_ref2])
<h3>Trade References:</h3>

@foreach ($data['trade_ref'] as $key=>$trade_refs)
@if($trade_refs)
<h3> {{ ucwords($key)}} </h3>
@endif
@if (is_array($trade_refs) || is_object($trade_refs))
@foreach ($trade_refs as $key=>$trade_ref)
<p>
    {{ ucwords(str_replace("_", " ",$key)) }}: {{ $trade_ref }}
</p>
@endforeach
@endif
@endforeach
@endif

