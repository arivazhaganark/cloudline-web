var app_root = $('#app_url').val();
var app_url = $('#resel_form').val();
$(document).ready(function () {

    $('#resel_form').validate({
        onkeyup: false,
        errorClass: 'error',
        validClass: 'valid',
        focusInvalid: false,
        rules: {
            'resellers[firm_name]': {
                required: true
            },
            'resellers[address]': {
                required: true
            },
            'resellers[city]': {
                required: true
            },
            'resellers[phone]': {
                required: true
            },
            'resellers[email]': {
                required: true,
                email: true,
                remote:
                        {
                            type: 'POST',
                            url: app_url + "/partner/reseller/email_exists",
                            data: {_token: $('input[name=_token]').val(), id: $('#reseller_id').val()},
                            async: false
                        }
            },
            'resellers[state]': {
                required: true
            },
            'resellers[fax]': {
                required: true
            },
            'resellers[type]': {
                required: true
            },
            'resellers[mobile]': {
                required: true,
                number: true
            },
            'resellers[years_corp]': {
                required: true
            },
            'resellers[employees_count]': {
                required: true
            },
            'resellers[capital]': {
                required: true
            },
            'resellers[sales_turnover]': {
                required: true
            },
            'resellers[roc_no]': {
                required: true
            },
            'resellers[gst_no]': {
                required: true
            },
            'resellers[pan_no]': {
                required: true
            },
            'attachment[roc]': {
                required: false,
                accept: "pdf,xls,doc"
            },
            'attachment[gst]': {
                required: false,
                accept: "pdf,xls,doc"
            },
            'attachment[pan]': {
                required: false,
                accept: "pdf,xls,doc"
            },
            'attachment[bank_check]': {
                required: false,
                accept: "pdf,xls,doc"
            },
            'supportdocs[ltd][]': {
                required: false,
                accept: "pdf,xls,doc"
            },
            'supportdocs[partnership][]': {
                required: false,
                accept: "pdf,xls,doc"
            },
            'supportdocs[sole][]': {
                required: false,
                accept: "pdf,xls,doc"
            },
            'contacts[proprietor][name]': {
                required: true
            },
            'contacts[proprietor][address]': {
                required: true
            },
            'contacts[proprietor][city]': {
                required: true
            },
            'contacts[proprietor][mobile]': {
                required: true
            },
            'contacts[partner][name]': {
                required: true
            },
            'contacts[partner][address]': {
                required: true
            },
            'contacts[partner][city]': {
                required: true
            },
            'contacts[partner][mobile]': {
                required: true
            },
            'contacts[director][name]': {
                required: true
            },
            'contacts[director][address]': {
                required: true
            },
            'contacts[director][city]': {
                required: true
            },
            'contacts[director][mobile]': {
                required: true
            },
            'office_details[sales][name]': {
                required: true
            },
            'office_details[sales][contact_no]': {
                required: true
            },
            'office_details[sales][email]': {
                required: true,
                email: true
            },
            'office_details[accounts][name]': {
                required: true
            },
            'office_details[accounts][contact_no]': {
                required: true
            },
            'office_details[accounts][email]': {
                required: true,
                email: true
            },
            'office_details[logistics][name]': {
                required: true
            },
            'office_details[logistics][contact_no]': {
                required: true
            },
            'office_details[logistics][email]': {
                required: true,
                email: true
            },
            'office_details[tech][name]': {
                required: true
            },
            'office_details[tech][contact_no]': {
                required: true
            },
            'office_details[tech][email]': {
                required: true,
                email: true
            },
            'office_details[support][name]': {
                required: true
            },
            'office_details[support][contact_no]': {
                required: true
            },
            'office_details[support][email]': {
                required: true,
                email: true
            },
            'bank_ref[bank_name]': {
                required: true
            },
            'bank_ref[contact_no]': {
                required: true
            },
            'bank_ref[ifsc_code]': {
                required: true
            },
            'bank_ref[address]': {
                required: true
            },
            'bank_ref[phone]': {
                required: true
            },
            'bank_ref[credit_limit]': {
                required: true
            },
            'bank_ref[ac_no]': {
                required: true
            },
            'bank_ref[type]': {
                required: true
            },
            'bank_ref[collateral]': {
                required: true
            },
            'trade_ref[trade_ref1][firm_name]': {
                required: true
            },
            'trade_ref[trade_ref1][address]': {
                required: true
            },
            'trade_ref[trade_ref1][city]': {
                required: true
            },
            'trade_ref[trade_ref1][phone]': {
                required: true
            },
            'trade_ref[trade_ref1][state]': {
                required: true
            },
            'trade_ref[trade_ref1][fax_no]': {
                required: true
            },
            'resellers[trade_date]': {
                required: true
            },
            'resellers[place]': {
                required: true
            },
            'attachment[sign]': {
                required: function (element) {
                    if ($("#attachment[sign]").attr('src') !== '') {
                        return false;
                    } else {
                        return true;
                    }
                },
                accept: "pdf,xls,doc"
            },
        },
        messages: {
            'resellers[firm_name]': {
                required: 'Firmname is required'
            },
            'resellers[address]': {
                required: 'Address is required'
            },
            'resellers[city]': {
                required: 'Citypin is required'
            },
            'resellers[phone]': {
                required: 'Phone is required'
            },
            'resellers[email]': {
                required: 'Email is required',
                remote: 'Email id already exists.'
            },
            'resellers[state]': {
                required: 'State is required'
            },
            'resellers[fax]': {
                required: 'Fax is required'
            },
            'resellers[mobile]': {
                required: 'Mobile is required'
            },
            'resellers[type]': {
                required: 'Type is required',
            },
            'resellers[years_corp]': {
                required: 'Year of incorporation is required',
            },
            'resellers[employees_count]': {
                required: 'No. of employees is required',
            },
            'resellers[capital]': {
                required: 'Equity/capital is required',
            },
            'resellers[sales_turnover]': {
                required: 'Total sales turnover last year is required',
            },
            'resellers[roc_no]': {
                required: 'ROC No. is required',
            },
            'resellers[gst_no]': {
                required: 'GST Reg. no is required',
            },
            'resellers[pan_no]': {
                required: 'I.T.PAN No./SIN No. is required',
            },
            'attachment[roc]': {
                accept: "Only pdf,xls and doc files are allowed"
            },
            'attachment[gst]': {
                accept: "Only pdf,xls and doc files are allowed"
            },
            'attachment[pan]': {
                accept: "Only pdf,xls and doc files are allowed"
            },
            'attachment[bank_check]': {
                accept: "Only pdf,xls and doc files are allowed"
            },
            'supportdocs[ltd][]': {
                accept: "Only pdf,xls and doc files are allowed"
            },
            'supportdocs[partnership][]': {
                accept: "Only pdf,xls and doc files are allowed"
            },
            'supportdocs[sole][]': {
                accept: "Only pdf,xls and doc files are allowed"
            },
            'contacts[proprietor][name]': {
                required: 'Name is required'
            },
            'contacts[proprietor][address]': {
                required: 'Address is required'
            },
            'contacts[proprietor][city]': {
                required: 'City is required'
            },
            'contacts[proprietor][mobile]': {
                required: 'Mobile is required'
            },
            'contacts[partner][name]': {
                required: 'Name is required'
            },
            'contacts[partner][address]': {
                required: 'Address is required'
            },
            'contacts[partner][city]': {
                required: 'City is required'
            },
            'contacts[partner][mobile]': {
                required: 'Mobile is required'
            },
            'contacts[director][name]': {
                required: 'Name is required'
            },
            'contacts[director][address]': {
                required: 'Address is required'
            },
            'contacts[director][city]': {
                required: 'City is required'
            },
            'contacts[director][mobile]': {
                required: 'Mobile is required'
            },
            'office_details[sales][name]': {
                required: 'Name is required'
            },
            'office_details[sales][contact_no]': {
                required: 'Contact number is required'
            },
            'office_details[sales][email]': {
                required: 'Sales email is required'
            },
            'office_details[accounts][name]': {
                required: 'Accounts email is required'
            },
            'office_details[accounts][contact_no]': {
                required: 'Name is required'
            },
            'office_details[accounts][email]': {
                required: 'Contact number is required'
            },
            'office_details[logistics][name]': {
                required: 'Name is required'
            },
            'office_details[logistics][contact_no]': {
                required: 'Contact number is required'
            },
            'office_details[logistics][email]': {
                required: 'Logictics email is required'
            },
            'office_details[tech][name]': {
                required: 'Name is required'
            },
            'office_details[tech][contact_no]': {
                required: 'Contact number is required'
            },
            'office_details[tech][email]': {
                required: 'Technical email is required'
            },
            'office_details[support][name]': {
                required: 'Name is required'
            },
            'office_details[support][contact_no]': {
                required: 'Contact number is required'
            },
            'office_details[support][email]': {
                required: 'Support email is required'
            },
            'bank_ref[bank_name]': {
                required: 'Name is required'
            },
            'bank_ref[ifsc_code]': {
                required: 'IFSC code is required'
            },
            'bank_ref[contact_no]': {
                required: 'Bank contact is required'
            },
            'bank_ref[address]': {
                required: 'Bank address is required'
            },
            'bank_ref[phone]': {
                required: 'Bank phone is required'
            },
            'bank_ref[credit_limit]': {
                required: 'Your credit limit is required'
            },
            'bank_ref[ac_no]': {
                required: 'Account number is required'
            },
            'bank_ref[type]': {
                required: 'Type is required'
            },
            'bank_ref[collateral]': {
                required: 'Select Collateral'
            },
            'trade_ref[trade_ref1][firm_name]': {
                required: 'Firmname is required'
            },
            'trade_ref[trade_ref1][address]': {
                required: 'Address is required'
            },
            'trade_ref[trade_ref1][city]': {
                required: 'City/pin is required'
            },
            'trade_ref[trade_ref1][phone]': {
                required: 'Phone is required'
            },
            'trade_ref[trade_ref1][state]': {
                required: 'State is required'
            },
            'trade_ref[trade_ref1][fax_no]': {
                required: 'Fax is required'
            },
            'resellers[trade_date]': {
                required: 'Date is required'
            },
            'resellers[place]': {
                required: 'Place is required'
            },
            'attachment[sign]': {
                required: 'Signature with seal is required',
                accept: "Only pdf,xls and doc files are allowed"
            },
        },
        highlight: function (element) {
            $(element).closest('div').addClass("f_error");
        },
        unhighlight: function (element) {
            $(element).closest('div').removeClass("f_error");
        },
        errorPlacement: function (error, element) {
            $('.help-block').html('');
            $(element).closest('div').append(error);
        },
        invalidHandler: function (form, validator) {
            if (!validator.numberOfInvalids())
                return;
            $('html, body').animate({
                scrollTop: $(validator.errorList[0].element).offset().top
            }, 1000);
        }
    });
});
$("#button").click(function () {
    $('#resel_form').validate();
    var validated = $('#resel_form').valid();
    if (validated == true)
    {
        window.resel_form.submit();
    }
});
var dashCount = 0;
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 46 && charCode < 58)
    {
        return true;
    }
    return false;
}