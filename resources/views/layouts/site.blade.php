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
        
        @include('layouts.partials.js_scripts')
        @include('layouts.partials.videocall')
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });           
        </script>

        @stack('scripts')
    </body>
</html>