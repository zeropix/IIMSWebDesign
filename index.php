<?php include('dbConfig.php'); ?>
    <?php
        $result = mysql_query("SELECT count(*) from justbidit;");
        
        // $result = mysql_query('SELECT COUNT(1) FROM `justbidit`');
        // $num_rows = mysql_result($result, 0, 0);
        // echo $num_rows
        // if($result) {
        //    echo $row[0];
        // } else {
        //     echo "error";
        // }
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- ========== Title ========== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
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
    <!--counter css-->
    	<!-- Stylesheets -->	
	<link rel="stylesheet" href="common-css/jquery.classycountdown.css" />
		
	<link href="01-comming-soon/css/styles.css" rel="stylesheet">
	
	<link href="01-comming-soon/css/responsive.css" rel="stylesheet">
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--header start here -->
<div id="include_header"></div>
<!--header end here-->

<!--cover section slider -->
<section id="home" class="home-cover">
    <div id ="home_carousel" data-ride="carousel">
    <div class="cover_slider owl-carousel owl-theme" >
        <div class="cover_item" style="background: url('assets/img/bg/slider.png');">
             <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                Prepare yourself for 
                            </h2>
                            <strong class="cover-xl-text">Khlur-thma</strong>
                            <p class="cover-date">
                                26th-27th October 2018  - IIM Shillong.
                            </p>
                            <p class="cover-date">
                                <?php echo mysql_result($result, 0); ?>
                            </p>
                            <a href="events.php" class=" btn btn-primary btn-rounded" >
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_item" style="background: url('assets/img/bg/slider3.png'); background-size: cover;">
            <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-left">
                            <h1 class="cover-title">
                                War of the stars is here....
                            </h1>
                            <!-- <strong class="cover-xl-text">Khlur-thma</strong>
                            <p class="cover-date">
                                26th-27th October 2018  - IIM Shillong.
                            </p> -->
                            <p><br></p>
                            <a href="events.php" class=" btn btn-primary btn-rounded" >
                                Events
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_item"  style="background: url('assets/img/bg/bg3.png');">                      
            <div class="slider_content">
                    <!-- <video loop muted autoplay src="assets/video/khlurthma17.mp4"> </video>     -->
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                <!-- Prepare yourself for -->
                            </h2>
                            <!-- <strong class="cover-xl-text">Khlur-thma</strong> -->
                            <p class="cover-date">
                                <!-- 26th-27th October 2018  - IIM Shillong -->
                            </p>
                            <!-- <a href="events.php" class=" btn btn-primary btn-rounded" >
                                    Register today
                            </a> -->
                            <div class="home-content__video">
                                    <a class="video-link" href="https://www.youtube.com/embed/eVaZyUhp-m0" data-lity>
                                        <span class="video-icon"></span>
                                        <span class="video-text">Play Video</span>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="cover_nav">
        <ol class="cover_dots">
            <li data-target="#home_carousel" class="active" data-slide-to="0"><span>1</span></li>
            <li  data-target="#home_carousel" data-slide-to="1"><span>2</span></li>
            <li  data-target="#home_carousel" data-slide-to="2"><span>3</span></li>
        </ol>
    </div>
</div>
</section>
<!--cover section slider end -->

<!--event info -->
<!-- <section class="pt100 pb100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-calendar-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            DATE
                        </h5>
                        <p>
                            26th-27th October 2018
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-location-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Location
                        </h5>
                        <p>
                            IIM Shillong
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-person-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Competitions
                        </h5>
                        <p>
                           
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--event info end -->

<!--about the event -->
<section class="pt100 pb100">
    <div class="container">
        <div class="section_title">
            <h3 class="title">
                About the event
            </h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <p>
                    'Khlurthma' in the local Khasi language of Meghalaya means "War of Stars" and true to its theme of 'vying for glory' it features the best of B school participants battling for the top spot. The annual Interschool business fest of IIM Shillong, it is held in the months of October- November. The event sees a confluence of participants with a flair and aptitude to solve real life business problems, fortified with a plethora of events catering to diverse fields of management.
                   <br> We host highly competitive events that challenge the inventiveness, ingenuity and business intelligence of the students and the event continues to be one of the most awaited B school fests across campuses in India. Khlurthma 2017 was inaugurated by the Director of the institute with a plantation drive, keeping in accordance with the emphasis the institute lays on sustainable development along with business practices. All the events feature multiple rounds of online and on campus evaluation, with the competitions being judged by the cream of industry professionals and academicians. The event attracts strong participation and endorsement from student and sponsors fraternity alike.
                
                </p>
            </div>
            <div class="col-12 col-md-6">
                <!-- <p>
                    Khlurthma hosts highly competitive events that challenge the inventiveness, ingenuity and business intelligence of the students and the event continues to be one of the most awaited B school fests across campuses in India. Khlurthma 2017 was inaugurated by the Director of the institute with a plantation drive, keeping in accordance with the emphasis the institute lays on sustainable development along with business practices. All the events feature multiple rounds of online and on campus evaluation, with the competitions being judged by the cream of industry professionals and academicians. The event attracts strong participation and endorsement from student and sponsors fraternity alike.
                </p> -->
                <article>
                    <div class="fb-page" data-href="https://www.facebook.com/khlurthma.iimshillong/" data-tabs="timeline" data-width="400" data-height="400"
                        data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/khlurthma.iimshillong/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/khlurthma.iimshillong/">Khlurthma- War of the stars</a></blockquote>
                    </div>
                    <!-- <footer>
                                    <a href="#" class="button special">More</a>
                                </footer> -->
                </article>
            </div>
        </div>

        <!--event features-->
        <div class="row justify-content-center mt30">
            <!-- <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-mic"></i>
                    <div class="content">
                        <h4>9 Speakers</h4>
                        <p>
                            Interact with several business professionals and get to know about their experiences and insights</p>
                        <a href="speakers.html">read more</a>
                    </div>
                </div>
            </div> -->

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-rocket"></i>
                    <div class="content">
                        <h4>8 Competitions</h4>
                        <p>
                            Compete with the best minds in the country from several other b-schools and prove your mettle</p>
                        <a href="events.php">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-bullhorn"></i>
                    <div class="content">
                        <h4>Cash prizes</h4>
                        <p>
                            Win lucrative cash prizes from various competitions throughout all the domains of management</p>
                        <a href="events.php">read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!--event features end-->
    </div>
</section>
<!--about the event end -->

<!--event countdown -->
<section class="bg-img pt70 pb70" style="background-image: url('assets/img/bg/slider.png');">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <h4 class="mb30 text-center color-light">Counter until the big event</h4>
                <div class="countdown-base"></div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray pt100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                khlurthma '17
            </h3>
        </div>
        <div>
            <iframe width="320" height="200" 
            src="https://www.youtube.com/embed/GT2faBdWvA0">
        </iframe>
        <div style="width: 60%; height:100%; float: right" class="brand_carousel owl-carousel">
                <div class="brand_item text-center">
                    <img src="assets/img/bg/slider2.png" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="assets/img/brands/brand2.png" alt="brand">
                </div>
    
                <div class="brand_item text-center">
                    <img src="assets/img/brands/brand3.png" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="assets/img/brands/brand4.png" alt="brand">
                </div>
                <div class="brand_item text-center">
                    <img src="assets/img/brands/brand5.png" alt="brand">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="bg-img pt70 pb70" height="150" style="background-color: black;">
    <div class="display-table center-text">
        <div class="display-table-cell">
            <div id="rounded-countdown">
                <div class="countdown" data-remaining-sec="416158"></div>
            </div>
            
        </div> display-table-cell
    </div> main-area
	</div>
</section> -->
<!--event count down end-->

<!--speaker section-->
<!-- <section class="pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
               our speakers
            </h3>
        </div>
    </div>
    <div class="row justify-content-center no-gutters">

        <h2>Coming soon...</h2>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s1.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Patricia Stone</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s2.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">James Oliver</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s3.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Carla Banks</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s4.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">William Smith</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s5.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Jessica Black</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s6.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Patricia Stone</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s7.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Duncan Stan</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>
        </div> 
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s8.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Patricia Stone</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!--brands section -->
<section class="bg-gray pt100 pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                previous associations
            </h3>
        </div>
        <h5>Coming soon....</h5>
        <div class="brand_carousel owl-carousel">
            <!-- <div class="brand_item text-center">
                <img src="assets/img/brands/b1.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="assets/img/brands/b2.png" alt="brand">
            </div>

            <div class="brand_item text-center">
                <img src="assets/img/brands/b3.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="assets/img/brands/b4.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="assets/img/brands/b5.png" alt="brand">
            </div> -->
            
        </div>
        
            <div  >
        <a style="color: #f50136;font-size: 12px !important;font-weight: 700 !important;" href="sponsor.php">Click here to associate with us</a></div>
   
    </div>
</section>
<!--brands section end-->
<!--footer start -->

<div id="include_footer"></div>
<!--footer end -->
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
<!-- counter js-->
<script src="common-js/jquery.classycountdown.js"></script>
<script src="common-js/jquery.knob.js"></script>
<script src="common-js/jquery.throttle.js"></script>
<script src="common-js/scripts.js"></script>
</body>
</html>