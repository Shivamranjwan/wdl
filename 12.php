<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Array Example</title>
</head>
<body>

    <h2>Student Names</h2>

    <?php
        // Creating an array
        $students = array("Shivam", "Rahul", "Amit", "Neha");

        // Displaying array values using loop
        echo "<ul>";
        foreach ($students as $name) {
            echo "<li>" . $name . "</li>";
        }
        echo "</ul>";
    ?>

</body>
</html>