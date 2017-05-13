/**
 * Created by Леся on 10.05.2017.
 */

(function ($) {
    "use strict";

    $('#add').click(function () {
        var value = parseInt($('.qty').text(), 10) + 1;
        $('.qty').text(value);
    });

    $('#delete').click(function () {
        var value = parseInt($('.qty').text(), 10) - 1;
        if (value > 0) {
            $('.qty').text(value);
        }
        else {
            SEMICOLON.widget.notifications(this);
            return false;
        }
    });

    $("#input-13").on("rating.change", function (event, value, caption) {

        if (value < 2) {
            var level_junior = value = "junior";
        } else if ( value >= 2 && value <= 3.5){
            var level_middle = value = "middle";
        } else var level_senior = value = "senior";



        $('#rating-notification-message').attr('data-notify-msg', 'You chose: ' + value );
        SEMICOLON.widget.notifications(jQuery('#rating-notification-message'));
    });

    console.log(rating.change.value);
$.getJSON('ajax/calc.json', function (data) {
    console.log(rating.change.value);
    $.each(data, function (key, val) {
        var junior = val.junior;
        var middle = val.middle;
        var senior = val.senior;



        // if ( ==
        $("#calc-spec")
            .append($("<option>"+key+"</option>"))
            .text(middle.val);
    });

});

    // function count() {
    //     $("#")
    //     console.log("sdd");
    // }


})(jQuery);

