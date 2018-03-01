Hi Admin, <br>

    You received a message from : {{ $input['company_name'] }}

<p>
Company Name: {{ $input['company_name'] }}
</p>

<p>
Started Date: {{ $input['started_on'] }}
</p>

@if($input['specify_other'])
<p>
Other Options: {{ $input['specify_other'] }}
</p>
@else
<p>
Sector: {{ $input['sector'] }}
</p>
@endif

@if($input['comments'])
<p>
Comments: {{ $input['comments'] }}
</p>
@endif

