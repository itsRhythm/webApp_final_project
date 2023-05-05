<?php
require_once 'config.php';
session_start(); // Start the session

// Check if user is not logged in (session is not started)
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page
    exit; // Stop further execution
}

// Retrieve user data from database based on user_id from session
// Perform a MySQL query to retrieve user data based on user_id
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $email = $row['email'];
    // ... retrieve other user data from the row ...
} else {
    echo "Error retrieving user data.";
    // ... handle error or redirect to appropriate page ...
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <p><strong>Username:</strong> <?php echo $username; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <!-- ... display other user data ... -->
    <h2>Update Profile</h2>
    <!-- Form to update user data -->
    <form action="update.php" method="post">
        <!-- ... input fields for user data to update ... -->
        <input type="submit" name="to_update" value="Update Profile">
    </form>

    <button><a href="dashboard.php">Back to dashboard</a></button>
</body>
</html>
