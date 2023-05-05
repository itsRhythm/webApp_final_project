<?php
require_once 'config.php';
session_start(); // Start the session

// Check if user is not logged in (session is not started)
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page
    exit; // Stop further execution
}

// Retrieve logged-in user's data from session or database
$user_id = $_SESSION['user_id'];
// ... Retrieve user's data from database based on user_id ...

// Handle form submission
if (isset($_POST['update'])) {
    // Retrieve updated user data from form
    $updated_username = $_POST['username'];
    $updated_email = $_POST['email'];

    // Perform a MySQL query to update user data based on user_id
    $sql = "UPDATE users SET username='$updated_username', email='$updated_email' WHERE id = '$user_id'";
    // ... Perform update query ...

    if ($conn->query($sql) === TRUE) {
        echo "Profile updated successfully!";
        // Redirect to profile page
        header("Location: profile.php");
        exit; // Stop further execution
    } else {
        echo "Error updating profile: " . $conn->error;
        // ... Handle error or redirect to appropriate page ...
    }
}

// Retrieve user data from database based on user_id
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
    <title>Update Profile</title>
</head>
<body>
    <h1>Update Profile</h1>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $username; ?>" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>" required><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
