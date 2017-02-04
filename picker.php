<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery UI Datepicker - Restrict date range</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script>
            function DisableMonday(date) {

                var day = date.getDay();
                // If day == 1 then it is MOnday
                if (day == 0) {

                    return [false];

                } else {

                    return [true];
                }

            }

            $(function () {
                $("#datepicker").datepicker({
                    beforeShowDay: DisableMonday
                });
            });
        </script>
    </head>
    <body>

        <p>Date: <input type="text" id="datepicker"></p>


    </body>
</html>