$(document).ready(function () {
//    $('#startdate').datepicker({
//        format: 'yyyy-mm-dd',
//        autoclose: true,
//        startDate: '+0d'
//    });
//     $('#enddate').datepicker({
//        format: 'yyyy-mm-dd',
//        autoclose: true,
//    });

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
});

$(function () {
    $('#timepicker').datetimepicker({
        format: 'HH:mm:ss'
    });
});