<!doctype html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.css_scripts')
    </head>
    <body>
        @include('layouts.partials.header')
        @yield('content')
        @include('layouts.partials.footer')

        <div class="videocall" id="videocall"> <a href="#"> <img src="{{ asset('images/videocall.png') }}"  alt=""> </a></div>

        @include('layouts.partials.js_scripts')
        @stack('scripts')
    </body>
</html>