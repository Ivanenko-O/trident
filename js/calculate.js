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

    // $("#input-13").on("rating.change", function (event, value, caption) {
    //
    //     if (value < 2) {
    //         value = "junior";
    //
    //     } else if (value >= 2 && value <= 3.5) {
    //         value = "middle";
    //     } else  value = "senior";
    //
    //
    //     $('#rating-notification-message').attr('data-notify-msg', 'You chose: ' + value);
    //     SEMICOLON.widget.notifications(jQuery('#rating-notification-message'));
    // });

    var salaryStore;
    var members = [];


    $.getJSON('ajax/calc.json', function (data) {

        salaryStore = data;

        $.each(salaryStore, function fillSelectors(key, val) {

            $("#calc-spec")
                .append($("<option>" + key + "</option>"))
                .text(key.val);
        });


        $("#button_choose").on('click', function () {

            var spec = $("#calc-spec option:selected").text();
            var lvl = $('#spec_lvl option:selected').text();
            var amount = parseInt($('.qty').text());

            $("#log").append(amount + " " + "<span>" + spec + "</span>" + " specialist  " + "<span>" + lvl + "</span>" + " level." + "<br/>");

            members.push(salaryStore[spec][lvl] * amount);

        });


        $("#button_choose").one('click', function () {
            $("#contin_count").append("Select next specialist of your team");
        });


        $("#button_count").on('click', function () {
            sumSalary();
        });


        function updateSalaryValue() {
            $('#salary_value').attr("value", salaryStore[spec][lvl] + "<br/>");
        }


        function sumSalary() {
            var sum = 0;

            for (var i = 0; i < members.length; i++) {
                sum += members[i];
            }
            $("#funding").text("Full price of team you need is $" + (1.06 * sum + 450));
        }

        $("#button_clear").on('click', function () {
            $("#log").empty();
            $("#funding").text("");
            members.splice(0, members.length);
        })

    });




})(jQuery);


