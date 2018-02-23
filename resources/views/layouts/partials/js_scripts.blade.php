<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
{!! NoCaptcha::renderJs() !!}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script> 
<script src="{{ asset('js/popper.min.js') }}"  crossorigin="anonymous"></script> 
<script src="{{ asset('js/bootstrap.min.js') }}"  crossorigin="anonymous"></script> 

<!--datepicker-->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>  
<script>
    $(document).on("scroll", function () {
        if
                ($(document).scrollTop() > 100) {
            $("header").addClass("shrink");
        } else
        {
            $("header").removeClass("shrink");
        }

        $('[data-toggle="tooltip"]').tooltip()

    });

    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).parent('.option').find('.fa-minus').show();
        $(this).parent('.option').find('.fa-plus').hide();
    })
    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).parent('.option').find('.fa-minus').hide();
        $(this).parent('.option').find('.fa-plus').show();
    })

    function showpanel() {
        localStorage.setItem('show', 'true');
        $('#videocall').show();
    }

    $(document).ready(function () {
        var show = localStorage.getItem('show');
        if (show === 'true') {
            $('#videocall').show();
        } else {
            setTimeout(showpanel, 1 * 60 * 1000);
        }
    });

</script>
<script src="{{ asset('js/app.js?v=1.0.0') }}"></script>
