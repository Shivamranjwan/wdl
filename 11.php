<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP String Manipulation</title>
</head>
<body>

    <h2>PHP String Manipulation</h2>

    <?php
        // Original string
        $str = "Hello Shivam";

        echo "<b>Original String:</b> " . $str . "<br><br>";

        // String length
        echo "<b>Length:</b> " . strlen($str) . "<br>";

        // Reverse string
        echo "<b>Reversed String:</b> " . strrev($str) . "<br>";

        // Substring (start from index 6, length 6)
        echo "<b>Substring:</b> " . substr($str, 6, 6) . "<br>";
    ?>

</body>
</html>