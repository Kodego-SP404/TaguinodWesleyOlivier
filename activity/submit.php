<?php
    // Connection settings
    $host = "localhost";
    $username = "feedback";
    $password = "123456";
    $dbname = "feedback";

    // Create connection
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['body'];
    $time = date("Y-m-d H:i:s");

    // Validate the form data
    if (empty($name) || empty($email) || empty($body)) {
        die("Please fill all the fields.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    // Insert data into the database
    $sql = "INSERT INTO feedback (name, email, body, timestamp) VALUES (:name, :email, :body, :time)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':body', $body);
    $stmt->bindParam(':time', $time);
    
    if($stmt->execute()){
        header("Location: feedback.php");
    } else {
        print_r($stmt->errorInfo());
    }

    // Close the connection
    $conn = null;