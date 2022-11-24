<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>luka bread</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

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
                        <a href="team.php" class="nav-item nav-link active">Careers</a>
                        <a href="menu.php" class="nav-item nav-link">Purchase</a>
                        <a href="register.php" class="nav-item nav-link">Register</a>
                        
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Master Chef</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.html">Home</a>
                        <a href="">Careers</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- Team Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Join our team</p>
                    <h2>Onboarding registration form</h2>
                </div>
                <div class="row contact-form">
                    <div class="col-md-6">
                        <img src="img/team-2.jpg" >
                    </div>
                
                    <div class="col-md-6">
                        <div id="success"></div>
                        <form action="file_upload.php" method="POST"
            enctype="multipart/form-data" name="sentMessage" id="contactForm">
 

         
      <div class="control-group">
        <input type="text" class="form-control" id="name" name="name" placeholder="first name"/><br>
        </div>
        <div class="control-group">
        <input type="text" class="form-control" id="email"name="email" placeholder="email address"/><br>
        </div>
        <div class="control-group">
        <input type="text" class="form-control"id="telephone" name="telephone" placeholder="telephone"/><br>
        </div>
        <div class="control-group">
        <textarea  class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Work experience"></textarea><br/>
        </div>



             <p class="help-block text-danger">Select files to upload:</p>
             
            <!-- name of the input fields are going to
                be used in our php script-->
                <div>
            <input type="file" name="files[]" multiple><br>
            <input type="file" name="files[]" multiple>
            
            </div>
             <div>
            <button type="submit" class="btn custom-btn" id="sendMessageButton" name="submit" value="Upload" >upload</div>
        
 
    </form>
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
