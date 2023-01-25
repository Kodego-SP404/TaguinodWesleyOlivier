<?php
    // Connection settings
    $host = "localhost";
    $username = "feedback";
    $password = "123456";
    $dbname = "feedback";

    // Create connection
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the form data
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_SPECIAL_CHARS);
    $time = date("Y-m-d H:i:s");

    // Validate the form data
    if (empty($name) || empty($email) || empty($body)) {
        die("Please fill all the fields.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    // Insert data into the database
    $sql = "INSERT INTO feedback (name, email, body, timestamp) VALUES ('$name', '$email', '$body','$time')";

    if (mysqli_query($conn, $sql)) {
        header("Location: feedback.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);