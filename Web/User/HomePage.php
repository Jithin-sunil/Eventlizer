<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>User Home Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../Assets/Template/User/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Assets/Template/User/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../Assets/Template/User/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Assets/Template/User/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../Assets/Template/User/css/style.css" rel="stylesheet">
</head>

<body>
    <?php 
    include("../Assets/Connection/connection.php");
    ?>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    
    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <img class="img-fluid" src="../Assets/Template/Main/img/logoE.png" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="../index.php" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="MyProfile.php" class="dropdown-item">My Profile</a>
                                <a href="EditProfile.php" class="dropdown-item">Edit Profile</a>
                                <a href="ChangePassword.php" class="dropdown-item">Change Password</a>
                
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Organizers</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">

                                <a href="SearchOrganiser.php" class="dropdown-item">Event Planners</a>
                                <a href="SearchBand.php" class="dropdown-item">Music Bands</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Booking</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">

                                <a href="MyEventBooking.php" class="dropdown-item">Booked Events</a>
                                <a href="MyBandBooking.php" class="dropdown-item">Booked Bands</a>
                            </div>
                        </div>
                        <a href="LogOutu.php" class="nav-item nav-link">Log Out</a>
                    </div>
                    
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 " src="../Assets/Template/User/img/wedding4.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong>Eventlizer</strong></p>
                                    <h1 class="display-1  mb-4 animated zoomIn" style="color:white;">Wedding Events</h1>
                                    <a href="SearchOrganiser.php" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../Assets/Template/User/img/wedding3.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong>Eventlizer</strong></p>
                                    <h1 class="display-1 mb-4 animated zoomIn"  style="color:white;">Intimate Weddings</h1>
                                    <a href="SearchOrganiser.php" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../Assets/Template/User/img/wedding2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong>Eventlizer</strong></p>
                                    <h1 class="display-1 mb-4 animated zoomIn"  style="color:white;">Corporate Events</h1>
                                    <a href="SearchOrganiser.php" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../Assets/Template/User/img/wedding5.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong >Eventlizer</strong></p>
                                    <h1 class="display-1 mb-4 animated zoomIn"  style="color:white;">Choose best Corporate Events</h1>
                                    <a href="SearchOrganiser.php" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../Assets/Template/User/img/wedding1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong>Eventlizer</strong></p>
                                    <h1 class="display-1 mb-4 animated zoomIn"  style="color:white;">Social Events</h1>
                                    <a href="SearchOrganiser.php" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
   
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="../Assets/Template/User/img/wedding4.jpg" alt="">
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="../Assets/Template/User/img/about1.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="../Assets/Template/User/img/about2.jpg" alt="">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="../Assets/Template/User/img/about4.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="../Assets/Template/User/img/about3.jpg" alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">About Us</p>
                        <h1 class="display-6">Sollution to Take Best Event Management Companies</h1>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="../Assets/Template/User/img/wedding4.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5>Make Your Memorable moment with us</h5>
                            <p class="mb-0">We are here to let you enjoy your piece of cake while we walk the extra mile for you and offers a “One stop Shoppe” for all your event management requirements.
Our humble beginnings have taught us that we are made by our client's happiness and day in and day out we strive to achieve the very best in quality and elegance for the client.</p>
                        </div>
                    </div>
                    <div class="border-top mb-4"></div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Products(events) Start -->
    <div class="container-fluid product py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic" style="color:#0c0c0c">Our Event Companies</p>
                <h1 class="display-6">The Best Events Change Your Life & Mind</h1>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
            <?php
					
					$sel1="select * from tbl_eventorganiser where organiser_vstatus=1";
					$row1=$con->query($sel1);
					while($data1=$row1->fetch_assoc())
					{
					?>
                <a href="SearchEvent.php?eid=<?php echo $data1["organiser_id"]  ?>" class="d-block product-item rounded">
                <div class='img-events'>
                <img src="../Assets/Files/Events/<?php echo $data1["organiser_photo"] ?>" alt="">
                </div>
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary"><?php echo $data1["organiser_name"] ?></h4>
                        <span class="text-body"><?php  echo $data1["organiser_details"] ?></span>
                    </div>
                </a>
                <?php
					}
						
						?>
            </div>
        </div>
    </div>
    <!-- Products End -->

    <!-- Products(musics) Start -->
    <div class="container-fluid product py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary" style="color:#0c0c0c">Our Music Bands</p>
                <h1 class="display-6">Change Your Mood</h1>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
            <?php
					
					$sel="select * from tbl_musicband where musicband_vstatus=1";
					$row=$con->query($sel);
					while($data=$row->fetch_assoc())
					{
					?>
                <a href="SearchProgram.php?eid=<?php  echo $data["musicband_id"] ?>" class="d-block product-item rounded">
                    <div class="img-events"><img src="../Assets/Files/Musicband/<?php echo $data["musicband_photo"] ?>" alt=""></div>
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary"><?php echo $data["musicband_name"] ?></h4>
                        <span class="text-body"><?php  echo $data["musicband_details"] ?></span>
                    </div>
                </a>
                <?php
					}
						
						?>
               
            </div>
        </div>
    </div>
    <!-- Products End -->


   

    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


   


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-white">Feedback about us</p>
                <h1 class="display-6">What our clients say about our Sevices</h1>
            </div>
           
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
            <?php

$selq="select * FROM tbl_feedback f inner join tbl_user u on u.user_id=f.user_id";
$datq=$con->query($selq);
while($rowq=$datq->fetch_assoc())
{
?>
                <div class="testimonial-item p-4 p-lg-5"><?php  echo $rowq['feedback_content'] ?></p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="../Assets/Files/User/<?php echo $rowq["user_photo"] ?>" alt="">
                        <div class="text-start ms-3">
                            <h5><?php  echo $rowq["user_name"] ?></h5>
                            <span class="text-primary"></span>
                        </div>
                    </div>
                </div>
                <?php
                    }
            ?>
                
            </div>
          
        </div>
    </div>
    <!-- Testimonial End -->


    

    <!-- Footer Start -->
   
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium" href="#">Eventlizer</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="fw-medium" href="https://htmlcodex.com"><a class="fw-medium" href="">Albin</a> & <a class="fw-medium" href="https://instagram.com/_.a_lbin_">Salmanul</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Assets/Template/User/lib/wow/wow.min.js"></script>
    <script src="../Assets/Template/User/lib/easing/easing.min.js"></script>
    <script src="../Assets/Template/User/lib/waypoints/waypoints.min.js"></script>
    <script src="../Assets/Template/User/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../Assets/Template/User/js/main.js"></script>
</body>

</html>