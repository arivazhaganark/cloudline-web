<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
{!! NoCaptcha::renderJs() !!}
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>--> 
<script src="https://code.jquery.com/jquery-3.1.0.min.js"  crossorigin="anonymous"></script> 
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

        $("data-toggle=tooltip").tooltip();

    });
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).parent('.option').find('.fa-minus').show();
        $(this).parent('.option').find('.fa-plus').hide();
    })
    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).parent('.option').find('.fa-minus').hide();
        $(this).parent('.option').find('.fa-plus').show();
    })

    function showvideocall() {
        localStorage.setItem('show', 'true');
        $('#videocall').show();
    }

    $(document).ready(function () {
        var show = localStorage.getItem('show');
        if (show === 'true') {
            $('#videocall').show();
        } else {
            setTimeout(showvideocall, 1 * 60 * 1000);
        }
    });

    $(document).ready(function () {
        $('.formComplete').hide();
    })

    $(document).ready(function () {        
        $("#first").change(function () {
            $("#above_selected").prop("disabled", false);
            if ($(this).val() == "contact_us") {
                $("#above_selected").val($(this).val());
            } else
                $("#above_selected").val($(this).val() * 2);
        });
    });

    $('body').on('submit', '#register', function (e) {
        e.preventDefault();
        var registerForm = $(this);
        var formData = new FormData($(this)[0]);
        $('#company_name-error').html("");
        $('#started_on-error').html("");
        $('#sector-error').html("");
        $('#specify_other-error').html("");
        $('#file_upload-error').html("");

        $.ajax({
            url: registerForm.attr('action'),
            type: registerForm.attr('method'),
            data: formData,
            processData: false,
            contentType: false,

            success: function (data) {
                console.log(data);
                if (data.errors) {
                    if (data.errors.company_name) {
                        $('#company_name-error').html(data.errors.company_name[0]);
                    }
                    if (data.errors.started_on) {
                        $('#started_on-error').html(data.errors.started_on[0]);
                    }
                    if (data.errors.sector) {
                        $('#sector-error').html(data.errors.sector[0]);
                    }
                    if (data.errors.specify_other) {
                        $('#specify_other-error').html(data.errors.specify_other[0]);
                    }
                    if (data.errors.file_upload) {
                        $('#file_upload-error').html(data.errors.file_upload[0]);
                    }

                }
                if (data.success) {
                    $("#register")[0].reset();
                    setTimeout(function () {
                        $('.formComplete').show();
                    }, 3000);
                    setTimeout(function () {
                        $('#myModal').modal('hide');
                    }, 6000);
                }
            },
        });
        return false;
    });

</script>
<script src="{{ asset('js/app.js?v=1.0.0') }}"></script>
