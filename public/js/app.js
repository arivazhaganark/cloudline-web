$(document).ready(function () {
    $('.date').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    });
});

$(function () {
    $('#timepicker').datetimepicker({
        format: 'HH:mm:ss'
    });
});