@component('mail::message')
    Dear Admin, <br />
    You have a new enquiry for your 'STARTER PLAN'! <br/>
    Company Name : {{ $starterdatas['company_name'] }} <br/>
    Started On : {{ $starterdatas['started_on'] }} <br/>
    @php
        if($starterdatas['sector'] == 'other') {
            @$sector = $starterdatas["specify_other"];
        }else {
            @$sector = $starterdatas["sector"];
        }
    @endphp
    Sector: {{ $sector }} <br/>
    Start Date : {{ $starterdatas['start_date'] }} <br/>
    Capital : {{ $starterdatas['capital'] }} <br/>
    Website : {{ $starterdatas['website'] }} <br/>
    Comments : {{ $starterdatas['comments'] }} <br/>
@endcomponent