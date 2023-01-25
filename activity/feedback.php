<?php 
  require_once 'inc/header.php';
?>

<div class="container d-flex flex-column align-items-center">
        <h2>Feedback</h2>

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

    // Select all feedbacks from the database
    $sql = "SELECT * FROM feedback";
    $result = mysqli_query($conn, $sql);

    // Check if there are any feedbacks
    if (mysqli_num_rows($result) > 0) {
        // Output the feedbacks
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card my-3">
                      <div class="card-body">
                        ' . $row["Body"] . '</p>
                        ' . $row["Name"] . ' on '. $row["Timestamp"] . '
                      </div>
                  </div>';
        }
    } else {
        echo "No feedbacks found.";
    }

    // Close the connection
    mysqli_close($conn);
?>
</div>
    </main>

<?php 
  require_once 'inc/footer.php';
?>
    

