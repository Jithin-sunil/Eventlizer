<?php
include("Assets/Connection/connection.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventlizer</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="Assets/Template/Main/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Assets/Template/Main/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="Assets/Template/Main/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="Assets/Template/Main/css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="Assets/Template/Main/css/rockville.css" type="text/css">
    <link rel="stylesheet" href="Assets/Template/Main/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="Assets/Template/Main/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="Assets/Template/Main/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="Assets/Template/Main/css/style.css" type="text/css">

<style>
    .row-about{
    width:90%;
    margin-bottom: 30px;
    display:flex;
    align-items: center;
    justify-content: center;
   }
   .img-about{
    border: 0px solid;
    border-radius: 19%;
   }
   .h1-a {
	margin: 0;
	color: #e7f117;
	font-weight: 400;
	font-family: "Rajdhani", sans-serif;
    font-size: 40px;
   }
   .span{
    color: #ffffff;
    font-family: "Rajdhani", sans-serif;
    font-size: 35px;
   }
</style>    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <h2 class="h1-a"><span class="span">Event</span>Lizer</h2>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#events">Events</a></li>
                                
                                <li><a href="#">Registration</a>
                                    <ul class="dropdown">
                                        <li><a href="Guest/EventOrganiser.php">EventOrganiser</a></li>
                                        <li><a href="Guest/MusicBand.php">MusicBand</a></li>
                                        <li><a href="Guest/User.php">User</a></li>
                                    </ul>
                                </li>
                                <li><a href="Guest/Login.php">Login</a></li>
                            </ul>
                        </nav>
                        <div class="header__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="https://instagram.com/_event_lizer"><i class="fa fa-instagram"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="Assets/Template/Main/img/bg1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <span>Eventilizer</span><br><br>
                        <h1 style="color:#fffff">Nothing is Beautiful than Memory</h1><br /><br /><br /><br />
                     <br><h2 style="color:#50504f"><i><u>Let's Make your Moments Memorable with Us.</u></i></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="linear__icon">
            <i class="fa fa-angle-double-down"></i>
        </div>
    </section>
    <!-- Hero Section End -->
    
    <!-- About Section Begin -->
    <section class="about spad" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"></br></br><br />
                    <div class="row-about">
                        <img class="img-about" src="Assets/Template/Main/img/logoevent.jpg" alt=""  width="250px" height="250px">
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                           <h1>About Us</h1>
                        </div></br>
                        <div class="section-title">
                            <h2>Eventlizer</h2>
                        </div>
                        <p>Wedding Planners</p>
                        <a href="#" class="primary-btn">CONTACT ME</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->
    
    <!-- Event Section Begin -->
    <section class="event spad" style="background-image: url(Assets/Template/Main/img/bg5.jpg);">
        <div class="container" id="events">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 style="color:#0c0c0c">Event Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event__slider owl-carousel">
                  <?php
					
					$sel1="select * from tbl_eventorganiser where organiser_vstatus=1";
					$row1=$con->query($sel1);
					while($data1=$row1->fetch_assoc())
					{
					?>
                    <div class="col-lg-4">
                  
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="Assets/Files/Events/<?php echo $data1["organiser_photo"] ?>">
                               
                            </div>
                            <div class="event__item__text">
                                <h4><?php echo $data1["organiser_name"] ?></h4>
                                <p><?php  echo $data1["organiser_details"] ?></p>
                            </div>
                        </div>
                       
                    </div>
                     <?php
					}
						
						?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Event Section End -->

    <!-- Music Event Section Begin -->
    <section class="event spad" style="background-image: url(Assets/Template/Main/img/bg5.jpg);">
    <!-- gradient background colour code -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 style="color:#0c0c0c">Music Bands</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event__slider owl-carousel">
                  <?php
					
					$sel="select * from tbl_musicband where musicband_vstatus=1";
					$row=$con->query($sel);
					while($data=$row->fetch_assoc())
					{
					?>
                    <div class="col-lg-4">
                  
                        <div class="event__item">
                            <div class="event__item__pic" style="background-image: url('Assets/Files/Musicband/<?php echo $data["musicband_photo"] ?>');  background-size: cover; background-repeat: no-repeat;" >
                            
                          

                               
                            </div>
                            <div class="event__item__text">
                                <h4 style="color:#0c0c0c"><?php echo $data["musicband_name"] ?></h4>
                                <p style="color:#0c0c0c"><?php  echo $data["musicband_details"] ?></p>
                            </div>
                        </div>
                       
                    </div>
                     <?php
					}
						
						?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Music Event Section End -->
    
    <!-- Services Section Begin -->
    <!--<section class="services">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-6 p-0">
                    <div class="row services__list">
                        <div class="col-lg-6 p-0 order-lg-1 col-md-6 order-md-1">
                            <div class="service__item deep-bg">
                                <img src="Assets/Template/Main/img/services/service-1.png" alt="">
                                <h4>Wedding</h4>
                                <p>Weddings mark the start of a new new chapter in couple's life and celebrate their love and commitment to each other </p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-2 col-md-6 order-md-2">
                            <div class="service__item">
                                <img src="Assets/Template/Main/img/services/service-3.png" alt="">
                                <h4>Corporate Events</h4>
                                <p>Corporate event are important for building and strengthening relationships,promoting and celebrating a company's.. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-4 col-md-6 order-md-4">
                            <div class="service__item deep-bg">
                                <img src="Assets/Template/Main/img/services/service-1.png" alt="">
                                <h4>Intimate Weddings</h4>
                                <p>It is small in a way that feels comfortable or private:Weddings,Birtdays,Family events etc,.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-3 col-md-6 order-md-3">
                            <div class="service__item">
                                <img src="Assets/Template/Main/img/services/service-3.png" alt="">
                                <h4>Social Events</h4>
                                <p>Planned events which involve large groups of people,generally arranged such as Day events,Birthdays party etc..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="row services__list">
                        <div class="col-lg-6 p-0 order-lg-1 col-md-6 order-md-1">
                            <div class="service__item deep-bg">
                                <img src="Assets/Template/Main/img/services/service-4.png" alt="">
                                <h4>Traditional Instuments</h4>
                                <p>Instrumental most commonly used in Hindustani classical music are the sitar,sarod,tambura,tabla,chenda etc.,.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-2 col-md-6 order-md-2">
                            <div class="service__item">
                                <img src="Assets/Template/Main/img/services/service-4.png" alt="">
                                <h4>rock</h4>
                                <p>Enjoy with new gen musical vibes.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-4 col-md-6 order-md-4">
                            <div class="service__item deep-bg">
                                <img src="Assets/Template/Main/img/services/service-4.png" alt="">
                                <h4>DJ lessons</h4>
                                <p>Explore the day with DJ music and lights</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-3 col-md-6 order-md-3">
                            <div class="service__item">
                                <img src="Assets/Template/Main/img/services/service-2.png" alt="">
                                <h4>Metal Events</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Services Section End -->

   
   

    <!-- Countdown Section Begin -->
    <section class="countdown spad set-bg">
                   
    </section>
    <!-- Countdown Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad set-bg" data-setbg="Assets/Template/Main/img/foot3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p style="color:#fffff">Phone</p>
                                <h6 style="color:#fffff">+91-9856341234</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p style="color:#fffff">Email</p>
                                <h6 style="color:#fffff">Eventlizer123@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2 style="color:#fffff">Eventlizer</h2>
                        <div class="footer__social__links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="https://instagram.com/_event_lizer"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4 style="color:#fffff">Stay With me</h4>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="Assets/Template/Main/js/jquery-3.3.1.min.js"></script>
    <script src="Assets/Template/Main/js/bootstrap.min.js"></script>
    <script src="Assets/Template/Main/js/jquery.magnific-popup.min.js"></script>
    <script src="Assets/Template/Main/js/jquery.nicescroll.min.js"></script>
    <script src="Assets/Template/Main/js/jquery.barfiller.js"></script>
    <script src="Assets/Template/Main/js/jquery.countdown.min.js"></script>
    <script src="Assets/Template/Main/js/jquery.slicknav.js"></script>
    <script src="Assets/Template/Main/js/owl.carousel.min.js"></script>
    <script src="Assets/Template/Main/js/main.js"></script>

    <!-- Music Plugin -->
    <script src="Assets/Template/Main/js/jquery.jplayer.min.js"></script>
    <script src="Assets/Template/Main/js/jplayerInit.js"></script>
</body>

</html>