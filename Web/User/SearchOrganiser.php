<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Search Organiser page</title>
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
                border: none;   
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
                        
					    <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="HomePage.php">Home</a></li>
                        
                        <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="contact.html">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="../Assets/Template/Searcho/img/slide1/slider-image-1.jpg" alt="GTA V"></div>
                    <div class="item"><img src="../Assets/Template/Searcho/img/slide1/slider-image-2.jpg" alt="The Last of us"></div>
                    <div class="item"><img src="../Assets/Template/Searcho/img/slide1/slider-image-1.jpg" alt="GTA V"></div>

                </div>
            </div>
            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>The Event Planners</h2>
                        <p></p>
                        <div class="search-form wow pulse" data-wow-delay="0.8s">

                            <form action="" class=" form-inline">
                                <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>

                                
                                <div class="form-group">                                   
								<select name="sel_district" id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="District" onchange="getplace(this.value)">
								 
			                        
			                           <?php
			                             $selQry="select * from tbl_district";
			                             $result=$con->query($selQry);
			                             while($rows=$result->fetch_assoc())
			                             {
			                           ?>
			                        <option value="<?php echo ($rows['district_id']);?>"><?php echo ($rows['district_name']);?></option>
			                        <?php
			                        }
			                        ?>

                                 </select>
                                </div>
                                <div class="form-group">                                     
								<select name="sel_place" id="sel_place" title="Place" class="form-ddl" onchange="getsearch(this.value)" >
			                     <option>select</option>
			
	    						</select>
                                </div>
								<!--id="basic" class="selectpicker show-tick form-control"-->
                                <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>

                                <div style="display: none;" class="search-toggle">

                                    <div class="search-row">   

                                        <div class="form-group mar-r-20">
                                            <label for="price-range">Price range ($):</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[0,450]" id="price-range" ><br />
                                            <b class="pull-left color">2000$</b> 
                                            <b class="pull-right color">100000$</b>
                                        </div>
                                        <!-- End of  -->  

                                        <div class="form-group mar-l-20">
                                            <label for="property-geo">Property geo (m2) :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[50,450]" id="property-geo" ><br />
                                            <b class="pull-left color">40m</b> 
                                            <b class="pull-right color">12000m</b>
                                        </div>
                                        <!-- End of  --> 
                                    </div>

                                    <div class="search-row">

                                        <div class="form-group mar-r-20">
                                            <label for="price-range">Min baths :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[250,450]" id="min-baths" ><br />
                                            <b class="pull-left color">1</b> 
                                            <b class="pull-right color">120</b>
                                        </div>
                                        <!-- End of  --> 

                                        <div class="form-group mar-l-20">
                                            <label for="property-geo">Min bed :</label>
                                            <input type="text" class="span2" value="" data-slider-min="0" 
                                                   data-slider-max="600" data-slider-step="5" 
                                                   data-slider-value="[250,450]" id="min-bed" ><br />
                                            <b class="pull-left color">1</b> 
                                            <b class="pull-right color">120</b>
                                        </div>
                                        <!-- End of  --> 

                                    </div>
                                    <br>
                                    <div class="search-row">  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Fire Place(3100)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Dual Sinks(500)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Hurricane Shutters(99)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 
                                    </div>

                                    <div class="search-row">  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Swimming Pool(1190)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 2 Stories(4600)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Emergency Exit(200)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 
                                    </div>                                    

                                    <div class="search-row">  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Laundry Room(10073)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  -->  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Jog Path(1503)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 26' Ceilings(1200)
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of  --> 
                                        <br>
                                        <hr>
                                    </div>                             
                                    <button class="btn search-btn prop-btm-sheaerch" type="submit"><i class="fa fa-search"></i></button>  
                                </div>                    

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- property area -->
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Top Events Planners</h2>
                        <p>Whooo</p>
                    </div>
                </div>

                <div class="row">
                    <div class="proerty-th" id="result">
                        
							   <?php


								$selQry = "select * from tbl_eventorganiser o inner join tbl_place p on o.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id where organiser_vstaus=1";
								$row = $con->query($selQry);
								$i=0;
								while($data=$row->fetch_assoc())
								{
                                    
							 
								?>
                            <div class="col-sm-6 col-md-3 p0">
                             <div class="box-two proerty-item" >

								<p align="left"><img src="../Assets/Files/Events/<?php echo $data["organiser_photo"]?>" alt="<?php echo $data["organiser_photo"]?>" width="120px" height="120px" /><br />

								Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
								<?php echo $data["organiser_name"]?><br />

								Address&nbsp;:
								<?php echo $data["organiser_address"]?><br />

								Contact&nbsp;&nbsp;:
								<?php echo $data["organiser_contact"]?><br />

								District &nbsp;&nbsp;:
								<?php echo $data["district_name"]?><br />

								Place&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
								<?php echo $data["place_name"]?><br />
								<a href="ViewGallery.php?oid=<?php echo $data["organiser_id"]?>"><u>View Gallery</u></a>&nbsp;||

								<a href="ViewPackage.php?eid=<?php echo $data["organiser_id"]?>">View Event</a>
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
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>About us </h4>
                                <div class="footer-title-line"></div>
                                <p>To Make your event specially</p>
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i> 9089 your adress her</li>
                                    <li><i class="pe-7s-mail strong"> </i> eventlizer@gmail.com</li>
                                    <li><i class="pe-7s-call strong"> </i> +1 908 967 5906</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Quick links </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    
                                    <li><a href="contact.html">Contact us</a></li> 
                                    <li><a href="faq.html">fqa</a>  </li> 
                                    <li><a href="faq.html">Terms </a>  </li> 
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>Stay in touch</h4>
                                <div class="footer-title-line"></div>
                                <p></p>

                                <form>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="E-mail ... ">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary subscribe" type="button"><i class="pe-7s-paper-plane pe-2x"></i></button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form> 

                                <div class="social pull-right"> 
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="https://twitter.com/kimarotec"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/kimarotec" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://plus.google.com/kimarotec" data-wow-delay="0.3s"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.6s"><i class="fa fa-dribbble"></i></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

           
        </div>

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
  function getplace(did)
	{
		$.ajax({
			url: "../Assets/AjaxPages/Ajaxplace.php?did=" + did,
			success: function(html) {
			
				$("#sel_place").html(html);
	
			}
		});
	}
	function getsearch(sid)
	{
		$.ajax({
			url: "../Assets/AjaxPages/AjaxSearch.php?sid=" + sid,
			success: function(html) {
			
				$("#result").html(html);
	
			}
		});
	}
</script>
</html>