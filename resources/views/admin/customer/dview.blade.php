@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Demo Request Form</div>

                <div class="panel-body">
                    <p>
                        <strong>Email:</strong> {{ $Customer->email }} <br>
                        <strong>Company Name:</strong> {{ $Customer->company_name }} <br>
                        <strong>Location:</strong> {{ $Demo->location }} <br>
                        <strong>Preferred Date:</strong> {{ $Demo->preferred_date }} <br>
                        <strong>Alternate Date:</strong> {{ $Demo->alternate_date }} <br>
                        <strong>Schedule Time:</strong> {{ $Demo->schedule_time }} <br>
                        <strong>Person Incharge:</strong> {{ $Demo->person_incharge }} <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
