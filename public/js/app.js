$(document).ready(function () {
    $('.date').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    });
    $('.timepicker').datetimepicker({
        format: 'HH:mm:ss',
    });
});