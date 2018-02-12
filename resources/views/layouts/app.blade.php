<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            @includeIf('layouts.partials.nav')
            <div class="container flash-container">
                @include('layouts.partials.alert')
            </div>
            @yield('content')
        </div>

        <!--Scripts--> 

        <script src="{{ asset('js/app.js') }}"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript">
                                               $.ajaxSetup({
                                                   headers: {
                                                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                   },
                                               });
        </script>
        @stack('scripts')
    </body>
</html>
