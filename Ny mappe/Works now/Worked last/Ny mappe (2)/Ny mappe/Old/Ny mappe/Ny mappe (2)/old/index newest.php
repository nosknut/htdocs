<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <script>
            function cf() {
                $.get("http://localhost:1234/index.php?server=35.187.40.176&user=nosk&password=1234&query=Select+*+FROM+Traverskran.Traverskran", function (data) {
                    $(".result").html(data);
                    alert(data);
                    var $returned = JSON.parse(data);
                });
            }
        </script>
        <button id="button" onclick="cf()">Set</button>
    </body>
</html>
    