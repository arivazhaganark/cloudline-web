@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">Partners</div>

                <nav class="navbar navbar-inverse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('backend/partners/create') }}">Partner Registration</a>
                        </li>
                    </ul>
                </nav>
                <div class="panel-body">
                    TEST
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
