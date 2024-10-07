<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Search Event page</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="../Assets/Template/Searcho/css/normalize.css">
        <link rel="stylesheet" href="../Assets/Template/Searcho/css/font-awesome.min.css">
        <link rel="stylesheet" href="../Assets/Template/Searcho/css/fontello.css">
        <link href="../Assets/Template/Searcho/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="../Assets/Template/Searcho/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="../Assets/Template/Searcho/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="../Assets/Template/Searcho/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="../Assets/Template/Searcho/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Assets/Template/Searcho/css/icheck.min_all.css">
        <link rel="stylesheet" href="../Assets/Template/Searcho/css/price-range.css">
        <link rel="stylesheet" href="../Assets/Template/Searcho/css/owl.carousel.css">  
        <link rel="stylesheet" href="../Assets/Template/Searcho/css/owl.theme.css">
        <link rel="stylesheet" href="../Assets/Template/Searcho/css/owl.transitions.css">
        <link rel="stylesheet" href="../Assets/Template/Searcho/css/style.css">
        <link rel="stylesheet" href="../Assets/Template/Searcho/css/responsive.css">

        <style>
            .form-ddl{
                width:240px;
                height: 40px;
                padding:5px;
                color: black;
                border: 1px solid #EAE9E9; 
            }
            .form-ddl:focus-visible {
                border:none;
            }
            </style>
    </head>
    <body>
	<?php 
    include("../Assets/Connection/connection.php");
    include('SessionValidatoru.php');
    ?>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="../Assets/Template/Searcho/img/" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    
                    <ul class="main-nav nav navbar-nav navbar-right">
                        
					    <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="SearchOrganiser.php">Home</a></li>
                        
                        <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="contact.html">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->
		    
		        
		
        <!-- property area -->
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Services</h2>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="proerty-th" id="result1">
					      <?php

							$selQry = "select * from tbl_package w  inner join tbl_eventtype e on w.eventype_id=e.eventtype_id inner join tbl_eventorganiser o on o.organiser_id=w.organiser_id
                            where w.organiser_id='".$_GET["eid"]."' ";
							$row = $con->query($selQry);
							$i=0;
							while($data=$row->fetch_assoc())
							{
							$i++;  
							?>
                            <div class="col-sm-6 col-md-3 p0">
                             <div class="box-two proerty-item" >

								<p align="left"><img src="../Assets/Files/User/<?php echo $data["details_image"]?>" alt="<?php echo $data["organiser_photo"]?>" width="120px" height="120px" /><br />

                                Package Name&nbsp;:
                                <?php echo $data["package_name"]?><br />

								EventType&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
								<?php echo $data["eventype_name"]?><br />

								Details&nbsp;:
								<?php echo $data["package_details"]?><br />

								
								
                                &nbsp;<a href="EventBooking.php?pid=<?php echo $data["package_id"]?>"><u>Book now</u></a>
								</p>
                              </div>
                            </div>
							  <?php
								
								}
							  ?>
                            

					</div>
                        
                </div>
            </div>
        </div>

        <!--Welcome area -->
        

        <!--TESTIMONIALS -->
        
        <!-- boy-sale area -->
        

        <!-- Footer area-->
        

        <script src="../Assets/Template/Searcho/js/modernizr-2.6.2.min.js"></script>

        <script src="../Assets/Template/Searcho/js/jquery-1.10.2.min.js"></script> 
        <script src="../Assets/Template/Searcho/bootstrap/js/bootstrap.min.js"></script>
        <script src="../Assets/Template/Searcho/js/bootstrap-select.min.js"></script>
        <script src="../Assets/Template/Searcho/js/bootstrap-hover-dropdown.js"></script>

        <script src="../Assets/Template/Searcho/js/easypiechart.min.js"></script>
        <script src="../Assets/Template/Searcho/js/jquery.easypiechart.min.js"></script>

        <script src="../Assets/Template/Searcho/js/owl.carousel.min.js"></script>
        <script src="../Assets/Template/Searcho/js/wow.js"></script>

        <script src="../Assets/Template/Searcho/js/icheck.min.js"></script>
        <script src="../Assets/Template/Searcho/js/price-range.js"></script>

        <script src="../Assets/Template/Searcho/js/main.js"></script>

    </body>
<script src="../Assets/JQuery/jQuery.js"></script>
 <script>
  function getsub(sid)
	{
		$.ajax({
			url: "../Assets/AjaxPages/AjaxCategory.php?sid=" + sid,
			success: function(html) {
			
				$("#sel_sub").html(html);
	
			}
		});
	}
	function getsearch(vid)
	{
		$.ajax({
			url: "../Assets/AjaxPages/AjaxEvent.php?vid=" + vid,
			success: function(html) {
			
				$("#result1").html(html);
	
			}
		});
	}
	
 </script>
</html>