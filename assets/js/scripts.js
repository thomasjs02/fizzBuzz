$(document).ready(function ($) {
    $("#fizz_buzz_code_type").change(function (e) {
        e.preventDefault();
        var code_type = $(this).val();
        $(".code_container").hide();
        switch (code_type) {
            case 'php':
                $("#fizz_buzz_php_container").show();
                break;
            case 'api':
                $.ajax({
                    type: "POST",
                    url: 'api/fizzbuzz.php',
                    dataType: 'json',
                    success: function (response) {
                        $("#fizz_buzz_api_container").html('');
                        $.each(response, function (key, val) {
                            $("#fizz_buzz_api_container").append("<div class='col-md-3'>" + val + "</div>");

                        });
                        $("#fizz_buzz_api_container").show();
                    },
                });
                break;
            case 'javascript':
                $("#fizz_buzz_javascript_container").show();
                break;
        }
    });

    //javascript fizz buzz solution
    var data;
    for (var i = 1; i < 101; i++) {
        if (i % 15 == 0) data = "FizzBuzz";
        else if (i % 3 == 0) data = "Fizz";
        else if (i % 5 == 0) data = "Buzz";
        else data = i;
        $("#fizz_buzz_javascript_container").append("<div class='col-md-3'>" + data + "</div>");
    }
});
