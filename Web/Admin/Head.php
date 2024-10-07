
<?php
include('SessionValidator.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Admin Home Page</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="../Assets/Template/Admin/images/fevicon.png" type="image/png" />
   <!-- bootstrap css -->
   <link rel="stylesheet" href="../Assets/Template/Admin/css/bootstrap.min.css" />
   <!-- site css -->
   <link rel="stylesheet" href="../Assets/Template/Admin/style.css" />
   <link rel="stylesheet" href="../Assets/Template/form.css" />
   <!-- responsive css -->
   <link rel="stylesheet" href="../Assets/Template/Admin/css/responsive.css" />
   <!-- color css -->
   <link rel="stylesheet" href="../Assets/Template/Admin/css/colors.css" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="../Assets/Template/Admin/css/bootstrap-select.css" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="../Assets/Template/Admin/css/perfect-scrollbar.css" />
   <!-- custom css -->
   <link rel="stylesheet" href="../Assets/Template/Admin/css/custom.css" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div class="sidebar_blog_1">
               <div class="sidebar-header">
                  <div class="logo_section">
                     <a href="index.html"><img class="logo_icon img-responsive" src="../Assets/Template/Admin/images/logo/logo_icon.png"
                           alt="#" /></a>
                  </div>
               </div>
               <div class="sidebar_user_info">
                  <div class="icon_setting"></div>
                  <div class="user_profle_side">
                     <div class="user_img"><img class="img-responsive" src="../Assets/Template/Admin/images/layout_img/user_img.jpg" alt="#" />
                     </div>
                     <div class="user_info">
                        <h6><?php echo $_SESSION["aname"]?></h6>
                        <p><span class="online_animation"></span> Online</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="sidebar_blog_2">
               <h4>General</h4>
               <ul class="list-unstyled components">
                  <li class="active">
                     <a href="Index.php"><i
                           class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a> 
                  </li>
                  <li>
                  <a href="#location" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                           class="fa fa-map-marker purple_color2"></i> <span>Location</span></a>
                     <ul class="collapse list-unstyled" id="location">
                        <li>
                           <a href="District.php">> <span>District</span></a>
                        </li>
                        <li>
                           <a href="Place.php">> <span>Place</span></a>
                        </li>
                     </ul>
                  </li>
                  <li>
                  <a href="#verification" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                           class="fa fa-group red_color"></i> <span>Verifications</span></a>
                     <ul class="collapse list-unstyled" id="verification">
                        <li>
                           <a href="Organiserverification.php">> <span>Event Organizers</span></a>
                        </li>
                        <li>
                           <a href="MusicBandverification.php">> <span>Music Bands</span></a>
                        </li>
                     </ul>
                  </li>
                  <li>
                  <a href="#acc" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                           class="fa fa-tasks orange_color"></i> <span>Accepted & Rejected</span></a>
                     <ul class="collapse list-unstyled" id="acc">
                        <li>
                           <a href="AcceptedOrganiser.php">> <span>Event Organizers(Accepted)</span></a>
                        </li>
                        <li>
                           <a href="AcceptedMusicBand.php">> <span>Music Bands(Accepted)</span></a>
                        </li>
                        <li>
                           <a href="RejectedOrganiser.php">> <span>Event Organizers(Rejected)</span></a>
                        </li>
                        <li>
                           <a href="RejectedMusicBand.php">> <span>Music Bands(Rejected)</span></a>
                        </li>
                     </ul>
                  </li>
                  <li>
                  <a href="#category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                           class="fa fa-group red_color"></i> <span>Category</span></a>
                     <ul class="collapse list-unstyled" id="category">
                        <li>
                           <a href="ServiceCategory.php">> <span>Category</span></a>
                        </li>
                        <li>
                           <a href="Subcategory.php">> <span>Sub Category</span></a>
                        </li>
                        <li>
                           <a href="MusicbandType.php">> <span>Types of Music Bands</span></a>
                        </li>
                     </ul>
                  </li>
                  <li><a href="ViewuserComplaint.php"><i class="fa fa-pencil-square-o green_color"></i> <span>User Complaint</span></a></li>
                  <li><a href="ViewuserFeedback.php"> <i class="fa fa-comments-o yellow_color"></i><span>User Feedback</span></a></li>

                  <li>
                  <a href="#report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                           class="fa fa-tasks orange_color"></i> <span>Reports</span></a>
                     <ul class="collapse list-unstyled" id="report">
                        <li>
                           <a href="OrganizerBookingReport.php">> <span>Event Organizers</span></a>
                        </li>
                        <li>
                           <a href="EventBookingReport.php">> <span>Booked Events </span></a>
                        </li>
                        <li>
                           <a href="MusicBandBookingReport.php">> <span>Music Bands</span></a>
                        </li>
                        <li>
                           <a href="BandBookingReport.php">> <span>Booked Bands</span></a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">
            <!-- topbar -->
            <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                           class="fa fa-bars"></i></button>
                     <div class="logo_section">
                        <a href="index.html">
                           <!--<img class="img-responsive" src="../Assets/Template/Admin/images/logo/" alt="" />--></a>
                     </div>
                     <div class="right_topbar">
                        <div class="icon_info">
                           
                           <ul class="user_profile_dd">
                              <li>
                                 <a class="dropdown-toggle" data-toggle="dropdown"><img
                                       class="img-responsive rounded-circle" src="../Assets/Template/Admin/images/layout_img/user_img.jpg"
                                       alt="#" /><span class="name_user"><?php echo $_SESSION["aname"]?></span></a>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="Logout.php"><span>Log Out</span> <i
                                          class="fa fa-sign-out"></i></a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
            <!-- end topbar -->
            <!-- dashboard inner -->
            <div class="midde_cont">
               <div class="container-fluid">
                <div id="tab" align="center">