<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary609 = $username = $password ="";
$name_err = $address_err = $salary609_err = $username_err =$password_err ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary609
    $input_salary609 = trim($_POST["salary609"]);
    if(empty($input_salary609)){
        $salary609_err = "Please enter the salary609 amount.";     
    } elseif(!ctype_digit($input_salary609)){
        $salary609_err = "Please enter a positive integer value.";
    } else{
        $salary609 = $input_salary609;
    }

    // Validate username
if(empty(trim($_POST["username"]))){
    $username_err = "Please enter a username.";
} elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
    $username_err = "Username can only contain letters, numbers, and underscores.";
} else{
    // Prepare a select statement
    $sql = "SELECT id FROM employees WHERE username = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        
        // Set parameters
        $param_username = trim($_POST["username"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            /* store result */
            mysqli_stmt_store_result($stmt);
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                $username_err = "This username is already taken.";
            } else{
                $username = trim($_POST["username"]);
            }
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
}

// Validate confirm password
if(empty(trim($_POST["password"]))){
    $password_err = "Please confirm password.";     
} else{
    $password = trim($_POST["password"]);
    if(empty($password_err) && ($password != $password)){
        $password_err = "Password did not match.";
    }
}
 
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary609_err)&& empty($username_err)&& empty($password_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, address, salary609, username, password) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssiss", $param_name, $param_address, $param_salary609, $param_username, $param_password);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary609 = $salary609;
            $param_username = $username;
            $param_password = $password;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: register2.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>luka bread</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">
        <script text="javascript" language="javascript" src="script.js"></script>

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Luca<span>bread</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="aboutus.html" class="nav-item nav-link">About us</a>
                        <a href="team.php" class="nav-item nav-link">Careers</a>
                        <a href="menu.php" class="nav-item nav-link">Purchase</a>
                        <a href="register.php" class="nav-item nav-link active">Register</a>
                        
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Register</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.html">Home</a>
                        <a href="">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- Booking Start -->
        <div class="booking">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p>Create a membership</p>
                                <h2>Bakery Lucca, delicious to add to life.</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                "There will be bread, everything will be fine." Now it seems that this sentence is not outdated, because it symbolizes people's yearning and expectation for a happy life.Lucca bread is made with the best baker's yeast to ensure the original taste and make you remember the beauty of life.
                                </p>
                                <p>
                                Bread is the key to start an active day in the morning with a glass of milk; It is a snack for a sunny afternoon to gather and chat with friends; It is also the comfort of hunger when there is no time to eat;Founded in 2010, Bakery Lucca has always been committed to making real bread with the finest organic ingredients ??? artisanal, dedicated and with the best care. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="booking-form">
                           
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label for="fname">Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label for="fname">Address</label>
                            <input type="text" name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $address; ?>">
                            <span class="invalid-feedback"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group">
                            <label for="fname">salary</label>
                            <input type="text" name="salary609" class="form-control <?php echo (!empty($salary609_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $salary609; ?>">
                            <span class="invalid-feedback"><?php echo $salary609_err;?></span>
                        </div>
                        <div class="form-group">
                            <label for="fname">Username</label>
                            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                            <span class="invalid-feedback"><?php echo $username_err;?></span>
                        </div>
                        <div class="form-group">
                            <label for="fname">Password</label>
                            <input type="text" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                            <span class="invalid-feedback"><?php echo $password_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
        
        
        <!-- Menu Start -->
       
        <!-- Menu End -->
        <div class="testimonial">
            <div class="container">
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="Image">
                        </div>
                        <p>
                        join us!
                        </p>
                        <h2>Lisa</h2>
                        <h3>mananger</h3>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" alt="Image">
                        </div>
                        <p>
                            join us!
                        </p>
                        <h2>john</h2>
                        <h3>team leader</h3>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" alt="Image">
                        </div>
                        <p>
                        join us!
                        </p>
                        <h2>Luca</h2>
                        <h3>boss</h3>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-4.jpg" alt="Image">
                        </div>
                        <p>
                        join us!
                        </p>
                        <h2>james</h2>
                        <h3>team mate</h3>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i> Xuefu Road, Ningbo, China</p>
                                    <p><i class="fa fa-phone-alt"></i>+0198963131</p>
                                    <p><i class="fa fa-envelope"></i>1715310539@qq.com</p>
                                    <div class="footer-social">
                                        
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Learn about</h2>
                                   
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <p>
                                This is luca bread
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">LUCA bread</a>, All Right Reserved.</p>
                    <p>Designed By IT20 BERG</p>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        
    </body>
</html>
