<?php include('dbConfig.php'); ?>
    <?php
    $nameErr =$emailErr=$contactErr =$instituteErr = $formError="";
    $name=$email=$contact=$institute="";
    if(isset($_POST['register']))
    {
        $name =$_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $institute = $_POST['institute'];
        $required="Required field";
        $sql = "INSERT INTO user" . "(name,email,contact,institute) 
        VALUES ('$name','$email','$contact','$institute')";
        #VALUES ('xyz','nk@iimshillong.ac.in','9876543210','iims')";
        if(!$name) {
            $nameErr=$required;
        } else{
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed"; 
            }
        }
        if(!$email) {
            $emailErr=$required;
        }else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email";
            }
        }
        if(!$contact) {
            $contactErr=$required;
        } else {
            if(!preg_match("/^(\+\d{1,3}[- ]?)?\d{10}$/", $contact)) {
                $contactErr = "Enter valid contact number";
            }
        }
        if(!$institute) {
            $instituteErr=$required;
        }
        
        if(!$emailErr && !$nameErr && !$contactErr && !$instituteErr) {
            echo $sql;
            $result = mysqli_query($conn,$sql);
            if(!$result) {
                echo "did not insert". mysql_error();
            }
            echo "inserted";
        } else {
            $formError= "Fill all the details correctly";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- ========== Title ========== -->
    <title> Khlurthma</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/et-line.css" rel="stylesheet">
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md">
    <div class="container">
        <a class="navbar-brand logo" href="#">
            <img src="assets/img/iimslogo.png" height=80px alt="Khlur-thma"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="speakers.html">Speakers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="events.html">Events</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link " href="register.php">Register</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact.html">Contact</a>
                </li>
                <li class="search_btn">
                    <a  href="#">
                        <i class="ion-ios-search"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!--header end here-->

<!--page title section-->
<section class="inner_cover parallax-window" data-parallax="scroll" data-image-src="assets/img/bg/bg-img.png">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                       Register Today
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="index.html">Home</a>  |   </li>
                <li><span>Registration</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->


<!--events section -->
<section class="pt100 pb100">
    <div class="container">

        <div class="col-md-6 col-12">
            <div class="contact_form">
                <span class="error"><?php echo $formError;?></span>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="form-group">
                <span class="error"><?php echo $nameErr;?></span>
                    <input type="text" name="name"  class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                <span class="error"><?php echo $emailErr;?></span>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                <span class="error"><?php echo $contactErr;?></span>
                    <input type="text" name="contact" class="form-control" placeholder="Contact">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="institute"  placeholder="Institute"></textarea>
                </div>
                <div class="form-group text-right">
                    <input type="submit" class="btn btn-rounded btn-primary" name="register" value="Register"></input>
                </div>
            </form>
            </div>
        </div> 
    </div>
</section>
<footer>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 col-12">
                <div class="footer_box">
                    <div class="footer_header">
                        <div class="footer_logo">
                            <img src="assets/img/iimslogo.png" height=80px alt="Khlur-thma">
                        </div>
                    </div>
                    <div class="footer_box_body">
                            <p>
                                    Khlur-thma is the annual Interschool business fest of IIM Shillong, register today to interact with the brightest minds of the country in one place. <br>Like share and subscribe.</p>
                                
                        <ul class="footer_social">
                            <li>
                                <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            instagram
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <ul class="instagram_list">
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c1.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c2.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c3.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c3.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c2.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c1.png" alt="instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- jquery -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="assets/js/main.js"></script>
</body>
</html>