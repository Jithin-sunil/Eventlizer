<!doctype html>
<html lang="en">
  <head>
  	<title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../Assets/Template/Login/css/style.css">
       
	 <style>
		.input100 {
          border-radius: 19px;
        } 
	 </style>
	</head>
	<body class="img js-fullheight" style="background-image: url(../Assets/Template/Login/images/wedds2.jpg);">
	<?php
session_start();
include("../Assets/Connection/connection.php");

if(isset($_POST["btn_save"]))
{
	$Email = $_POST["txt_email"];
	$Password = $_POST["txt_pass"];
	
	$selUser = "select * from tbl_user where user_email='".$Email."' and user_password='".$Password."'";
	$rowUser = $con->query($selUser);
	
	 $selAdmin = "select * from tbl_adminreg where admin_email='".$Email."' and admin_password='".$Password."'";
	$rowAdmin = $con->query($selAdmin);
	
	 $selEvent = "select * from tbl_eventorganiser where organiser_email='".$Email."' and organiser_password='".$Password."' and 	organiser_vstatus=1";
	$rowEvent = $con->query($selEvent);
	
	
	
	
	if($dataUser=$rowUser->fetch_assoc())
	{
		$_SESSION["uid"]=$dataUser["user_id"];	
		$_SESSION["uname"]=$dataUser["user_name"];
		header("Location:../User/HomePage.php");
	}
	
	else if($dataEvent=$rowEvent->fetch_assoc())
	{
		$_SESSION["oid"]=$dataEvent["organiser_id"];	
		$_SESSION["oname"]=$dataEvent["organiser_name"];
	    header("Location:../EventOrganiser/HomePage1.php");
	}
	
	
	else if($dataAdmin=$rowAdmin->fetch_assoc())
	{
		$_SESSION["aid"]=$dataAdmin["admin_id"];	
		$_SESSION["aname"]=$dataAdmin["admin_name"];
	    header("Location:../Admin/Index.php");
	}
	else
	{
		?>
        <script>
		alert("Invalid Credentials!!");
		window.location="Login.php";
		</script>
        <?php	
	}
}

?>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="#" method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="email" class="form-control" placeholder="Email" name="txt_email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" name="txt_pass" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="btn_save" class="form-control btn btn-primary submit px-3">Log In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	
								</div>
								<div class="w-50 text-md-right">
									
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash;Do you Haven't an account &mdash;</p><p class="w-100 text-center">Register Now</p>
	          <div class="social d-flex text-center">
	          	<a href="User.php" class="input100"><span class="ion-logo-facebook mr-2"></span> User</a>&nbsp;
	          	<a href="EventOrganiser.php" class="input100"><span class="ion-logo-twitter mr-2"></span> EventOrganiser</a>&nbsp;
				  <a href="MusicBand.php" class="input100"><span class="ion-logo-twitter mr-2"></span> MusicBand</a>&nbsp;
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<!-- JS -->
    <script src="../Assets/Template/Login/js/jquery.min.js"></script>
    <script src="../Assets/Template/Login/js/main.js"></script>

	</body>
</html>

