<?php include('dbConfig.php'); ?>
    <?php
    $nameErr =$emailErr=$contactErr =$instituteErr = "";
    $name=$email=$contact=$institute=$event="";
    $formError="";
    $query="";
    if($_GET['event']) {
        $query=$_GET['event'];
    }
    // if($_GET['event']=="justbidit") {
    //     $event="Just Bid It";
    // } else 
    if ($_GET['event']=="corona") {
        $event="Corona";
    } else if ($_GET['event']=="touchstone") {
        $event="Touch Stone";
    } else if ($_GET['event']=="delfinus") {
        $event="DelFINus";
    } else if($_GET['event']=="ecomania") {
        $event="Eco Mania";
    }
    if(isset($_POST['register']))
    {
        $name =$_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $institute = $_POST['institute'];
        $name2 =$_POST['name2'];
        $email2 = $_POST['email2'];
        $contact2 = $_POST['contact2'];
        $required="Required field";
        $sql = "INSERT INTO $query (name1,email1,contact1,name2,email2,contact2,institute) 
        VALUES ('$name','$email','$contact','$name2','$email2','$contact2','$institute')";

        #echo $sql;
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
            #echo $sql;
            $result = mysqli_query($conn,$sql);
            if(!$result) {
                #echo "did not insert". mysql_error();
            }
            $formError="You have registered successfully";
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

<script> 
        $(function(){
            $("#include_header").load("header.html");
            $("#include_footer").load("footer.html"); 
        });
</script>
<!--header start here -->
<div id=include_header></div>
<!--header end here-->

<!--page title section-->
<section class="inner_cover parallax-window" data-parallax="scroll" data-image-src="assets/img/bg/bg-img.png">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                    <?php echo $event;?>- Registration
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
                <span class="error" style="color:#f50136"><strong><?php echo $formError;?></strong></span>
                <form action="<?php $event= $query;?>" method="POST">
                <div class="form-group">
                <div class="form-group">
                    <input type="text" class="form-control" name="institute"  placeholder="Full name of the institute, city"></textarea>
                </div>
                <h4>Participant 1</h4>
                <span class="error" style="color:#f50136"><?php echo $nameErr;?></span>
                    <input type="text" name="name"  class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                <span class="error" style="color:#f50136"><?php echo $emailErr;?></span>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                <span class="error" style="color:#f50136"><?php echo $contactErr;?></span>
                    <input type="text" name="contact" class="form-control" placeholder="Contact">
                </div>
                <h4>Participant 2</h4>
                <span class="error" style="color:#f50136"><?php echo $nameErr;?></span>
                    <input type="text" name="name2"  class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                <span class="error" style="color:#f50136"><?php echo $emailErr;?></span>
                    <input type="text" name="email2" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                <span class="error" style="color:#f50136"><?php echo $contactErr;?></span>
                    <input type="text" name="contact2" class="form-control" placeholder="Contact">
                </div>
                <div class="form-group text-right">
                    <input type="submit" class="btn btn-rounded btn-primary" name="register" value="Register">
                </div>
            </form>
            </div>
        </div> 
    </div>
</section>

<div id="include_footer">
    
<div class="copyright_footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-12">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
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