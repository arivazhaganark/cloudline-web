<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
{!! NoCaptcha::renderJs() !!}
<script src="'https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script> 
<script src="{{ asset('js/popper.min.js') }}"  crossorigin="anonymous"></script> 
<script src="{{ asset('js/bootstrap.min.js') }}"  crossorigin="anonymous"></script> 
<script>
    $(document).on("scroll", function () {
        if
                ($(document).scrollTop() > 100) {
            $("header").addClass("shrink");
        } else
        {
            $("header").removeClass("shrink");
        }


    });


</script>