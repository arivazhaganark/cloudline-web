@push('scripts')
<script type="text/javascript">

    $.each({inr: 'INR', dollar: 'US Dollar'}, function (val, text) {                        //currency dropdown
        $('.currency').append($('<option></option>').val(val).html(text));
    });

    $('#first,#above_selected').append($('<option value="select">Select</option>'));
    for (i = 1; i <= 10; i++)
    {
        $('#first').append($('<option>', {value: i, text: i}));
    }
    for (i = 2; i <= 20; i += 2)
    {
        $('#above_selected').append($('<option>', {value: i, text: i}));
    }
    for (i = 0; i <= 100; i += 10)
    {
        $('.room').append($('<option>', {value: i, text: i}));
    }
    for (i = 0; i <= 10; i++)
    {
        $('.casting').append($('<option>', {value: i, text: i}));
    }
    for (i = 1; i <= 10; i++)
    {
        $('.no_sim').append($('<option>', {value: i, text: i}));
    }
    for (i = 10; i <= 100; i += 10)
    {
        $('#max_participants').append($('<option>', {value: i, text: i}));
    }
    for (i = 0; i <= 5; i++)
    {
        $('.room_devices').append($('<option>', {value: i, text: i}));
    }

    $('.contactus').append($('<option value="contactus">Contact us</option>'));             //contact us dropdown

    $("#first").change(function () {                                                        // Dependent dropdown changes
        $("#above_selected").prop("disabled", false);
        if ($(this).val() == "contact_us") {
            $("#above_selected").val($(this).val());
        } else
            $("#above_selected").val($(this).val() * 2);
    });

    $(".price").change(function () {                                                        //Sum of value
        var total = 0;
        $('.price').each(function () {
            total += $(this).val() * $(this).data('qty');
        });
        currency_dropdown(total);
    })

    var total = 0;
    $('.selectedprice').each(function () {        
        total += $(this).val() * $(this).data('qty');
        currency_dropdown(total);
    });

    function currency_dropdown(total) {                                                     //Total price
        $(".currency").val() == "dollar" ? $("#total").html("<i class='fa fa-dollar'></i> " + total) : $("#total").html("<i class='fa fa-inr'></i> " + total * 72);
        $(".currency").change(function () {
            $(".currency").val() == "dollar" ? $("#total").html("<i class='fa fa-dollar'></i> " + total) : $("#total").html("<i class='fa fa-inr'></i> " + total * 72);
        });
    }
</script>
@endpush