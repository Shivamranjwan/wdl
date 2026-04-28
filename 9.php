<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Date and Time</title>
</head>
<body>

    <h2>
        <?php
            echo "Welcome to my web page!";
        ?>
    </h2>

    <p>
        <?php
            // Set timezone (change if needed)
            date_default_timezone_set("Asia/Kolkata");

            // Display current date
            echo "Current Date: " . date("d-m-Y") . "<br>";

            // Display current time
            echo "Current Time: " . date("h:i:s A");
        ?>
    </p>

</body>
</html>