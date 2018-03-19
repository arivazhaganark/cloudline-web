<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('admin.layouts.partials.meta')
        @include('admin.layouts.partials.css_scripts')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @includeIf('admin.layouts.partials.header')
            <!-- Left side column. contains the logo and sidebar -->
            @includeIf('admin.layouts.partials.aside')
            <div class="content-wrapper">
            <div class="container flash-container">
                @include('layouts.partials.alert')
            </div>            
            @yield('content')
            </div>
            @includeIf('admin.layouts.partials.footer')
            <div class="control-sidebar-bg"></div>
        </div>

        <!--Scripts--> 

        
        @include('admin.layouts.partials.js_scripts')
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>  
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });
        </script>         
        <script src="{{ asset('js/app.js?v=1.0.0') }}"></script>        
        @stack('scripts')
    </body>
</html>
