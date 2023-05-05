<?php
require_once 'config.php';
// In the beginning of dashboard.php or any protected page
session_start();

// Check if user is not logged in (session is not started)
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html"); // Redirect to login page
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section style="background-color: #eee; margin-top:5rem">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html?"> <b>Tour</b><b style="color: red;">Dibo</b>
                 </a>
    
                <div class="" id="">
                    <ul class="d-flex list-unstyled">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="index.html" style="color: rgb(43, 69, 60);">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Tour.html"style="color:green">Plan</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="Contact.php"style="color:green">
                                Contact
    
                            </a>  </li>
    
                            
    
                        <li class="nav-item">
                            <a class="nav-link btn btn-block btn-success"
                                href="login.html">
                                Logout</a>
                        </li>
                    </ul>
    
                </div>
            </div>
        </nav>
    <main>
      </section>
      <section style="background-color: #eee;" class="mt-5">
          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <h5 class="my-3"><?php echo $username; ?></h5>
                  <p class="text-muted mb-1">Tourist</p>
                  <p class="text-muted mb-4">Dhaka, Bangladesh </p>
                  <div class="d-flex justify-content-center mb-2">
    
                    <button type="button" class="btn btn-outline-primary ms-1"> <a href="update.php">Update</a> </button>
                  </div>
                </div>
              </div>
            
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $username; ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo $email; ?></p>
                    </div>
                  </div>
                
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Mobile</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">01356788799</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Dhaka,Bangladesh</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-success "><a href="Contact.php" class="text-white">Book Now</a></button>
                    <button class="btn btn-success"><a href="Contact.php" class="text-white">Give Feedback</a></button>
                    <button class="btn btn-success"><a href="Contact.php" class="text-white">Request For A Ture Guide</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
</body>
</html>