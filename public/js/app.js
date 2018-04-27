$(document).ready(function () {
    $("#startdate").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        startDate: '+0d'
    }).on('changeDate', function (selected) {
        var startDate = new Date(selected.date.valueOf());
        $('#enddate').datepicker('setStartDate', startDate);
    }).on('clearDate', function () {
        $('#enddate').datepicker('setStartDate', null);
    });

    $("#enddate").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        startDate: '+0d'
    }).on('changeDate', function (selected) {
        var endDate = new Date(selected.date.valueOf());
        $('#startdate').datepicker('setEndDate', endDate);
    }).on('clearDate', function () {
        $('#startdate').datepicker('setEndDate', null);
    });

    $('#timepicker').datetimepicker({
        format: 'HH:mm:ss'
    });

    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).parent('.option').find('.fa-minus').show();
        $(this).parent('.option').find('.fa-plus').hide();
    }).on('hide.bs.collapse', function () {
        $(this).parent('.option').find('.fa-minus').hide();
        $(this).parent('.option').find('.fa-plus').show();
    });

    $('[data-toggle="tooltip"]').tooltip({
        'container': 'body'
    });
//videocall popup
    if (videocallEnable = localStorage.getItem("videocallEnable")) {
        var timeremain = (videocallEnable != 'true') ? moment(videocallEnable).diff(moment(), 'seconds') : 0;
    } else {
        var timeremain = 60;
        localStorage.setItem("videocallEnable", moment().add(1, 'minutes').toString());
    }
    setTimeout(showvideocall, timeremain * 1000);

    function showvideocall() {
        localStorage.setItem('videocallEnable', 'true');
        $('#videocall').show();
    }

    $('.formComplete').hide();

    $("#first").change(function () {
        $("#above_selected").prop("disabled", false);
        if ($(this).val() == "contact_us") {
            $("#above_selected").val($(this).val());
        } else
            $("#above_selected").val($(this).val() * 2);
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
});

$(document).on("scroll", function () {
    if ($(document).scrollTop() > 100) {
        $("header").addClass("shrink");
    } else {
        $("header").removeClass("shrink");
    }
});
