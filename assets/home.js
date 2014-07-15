/**
 * Created by w7_64 on 14-7-15.
 */
console.log('this is home');
$(document).ready(function () {
        $('#start_time,#end_time').datetimepicker();
    }

);

function add_fight() {
    var data = $('#add_fight_form').serialize();
    console.log(data);
    $.ajax({
        type: "POST",
        url: $('#add_fight_form').attr('action'),
        data: data,// 你的formid
        async: false,
        error: function (request) {
            console.log(request);
        },
        success: function (data) {
            console.log(data);
        }
    });
    return false;
}