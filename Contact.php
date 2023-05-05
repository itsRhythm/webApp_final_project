<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"> <b>Tour</b><b style="color: red;">Dibo</b>
            </a>

            <div class="" id="">
                <ul class="d-flex list-unstyled">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="index.html" style="color:green;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Tour.html"style="color:green">Plan</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Contact.php"style="color: rgb(43, 69, 60)"> Contact</a>
                    </li>

                        
                    <li class="nav-item">
                        <a class="nav-link btn btn-block btn-success"
                            href="login.html">Login
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- <section>
        <div class="container-fluid bg-tour d-flex justify-content-center align-items-center">
            <div class="text-center p-5 my-5">
                <h1 class="text-light">BOOK A TOUR,
                    TAKE A BREAK</h1>
                <p class="text-light"> Escape the daily grind, explore new destinations, or simply take a breath of fresh air. Leave the planning and logistics to the experts and focus on enjoying your trip. There are plenty of options to choose from that cater to your specific needs and interests. So why wait? Book your tour today and take a well-deserved break from the stresses of everyday life.</p>
                
        
            </div>
        </div>
    </section> -->


    <div class="content">
        <div class="container" style="margin-top: 6%;">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                  <h2 class="mb-5 display-3 font-weight-bold">Fill the form. <br> It's easy.</h2>
                  <form class="border-right pr-5 mb-5" method="post" id="contactForm" name="contactForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                      </div>
                    </div>
    
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="submit" name= "submit" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
                      </div>
                    </div>
                  </form>
    
                  <?php
            // Include the config.php file
            require_once 'config.php';
    
            // Handle contact form submission
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
    
                // Perform a MySQL query to insert the contact details into the database
                $sql = "INSERT INTO contact_details (name, email, message) VALUES ('$name', '$email', '$message')";
                if ($conn->query($sql) === TRUE) {
                    echo "Contact details submitted successfully!";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
    
        // Close the database connection
        $conn->close();
        ?>
                  <div id="form-message-warning mt-4"></div> 
                  <div id="form-message-success">
                  </div>
    
                </div>
                <div class="col-lg-4 ml-auto bg-tour text-light " style="margin-top: 100px; padding:3%; border-radius:15px;">
                  <h3 class="mb-4">Let's talk about everything.</h3>
                  <p>Leave the planning and logistics to the experts and focus on enjoying your trip. So why wait? Book your tour today and take a well-deserved break from the stresses of everyday life.</p>
                  <p><a href="#">Read more</a></p>
                </div>
              </div>
            </div>  
            </div>
          </div>
      </div>
    
    <div class="d-flex container justify-content-center p-3"><h3>Contact </h3> </div>
<section class=" d-flex ">
    <div class="w-50 d-flex align-items-center justify-content-center h-100 w-100">

        <ul class="list-unstyled align-items-center d-flex">
            <li class="px-3">
                <a href="https://www.w3schools.com/html/" target="_blank"> <img src="facebook.png"
                        class="icon"></a>
            </li>
            <li class="px-3">
                <a href="https://www.w3schools.com/html/" target="_blank"> <img src="instagram.png"
                        class="icon"></a>
            </li>
            <li class="px-3">
                <a href="https://www.w3schools.com/html/" target="_blank"> <img src="twitter.png"
                        class="icon"></a>
            </li>
        </ul>
    </div>
</div>
</section>

</body>
</html>