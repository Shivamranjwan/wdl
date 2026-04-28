<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form using POST</title>
</head>
<body>

    <h2>User Form</h2>

    <!-- HTML Form -->
    <form method="POST" action="">
        <label>Name:</label><br>
        <input type="text" name="name"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <input type="submit" value="Submit">
    </form>

    <hr>

    <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $name = $_POST['name'];
            $email = $_POST['email'];

            // Display submitted data
            echo "<h3>Submitted Data:</h3>";
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
        }
    ?>

</body>
</html>