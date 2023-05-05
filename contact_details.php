<?php

// In the beginning of dashboard.php or any protected page
session_start();

// Check if user is not logged in (session is not started)
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page
    exit; // Stop further execution
}

?>


<!-- contact_details.php -->
<!-- contact_details.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Contact Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    // Include the config.php file
    require_once 'config.php';

    // Perform a MySQL query to fetch all contact details from the contact-details table
    $sql = "SELECT * FROM contact_details";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Start output buffering
        ob_start();
        ?>
        <table class="table container">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Message</th>
        </tr>
    </thead>
        <?php while ($row = $result->fetch_assoc()): ?>
                <tr >
                    <td>
                        <?= $row['id'] ?>
                    </td>
                    <td>
                        <?= $row['name'] ?>
                    </td>
                    <td>
                        <?= $row['email'] ?>
                    </td>
                    <td>
                        <?= $row['message'] ?>
                    </td>
                </tr>
        <?php endwhile; ?>
    </table>
        <?php
        // Capture the output buffer into a variable
        $table_html = ob_get_clean();

        // Output the captured HTML
        echo $table_html;
    } else {
        echo "No contact details found.";
    }

    // Close the database connection
    $conn->close();
    ?>
    <div class= "text-center mt-4">
        <a  class ="btn btn-primary"href="dashboard.php">Go back</a>
    </div>
    
</body>

</html>