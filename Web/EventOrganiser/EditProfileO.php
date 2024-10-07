<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="../Assets/Template/EditForm/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/EditForm/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/EditForm/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/EditForm/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/EditForm/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Assets/Template/EditForm/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/EditForm/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/EditForm/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Assets/Template/EditForm/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/EditForm/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Assets/Template/EditForm/css/main.css">
<!--===============================================================================================-->
<style>
.input100{
  border-radius:10px;
 border:none;
}
.row-user-profile{
    width:90%;
    margin-bottom: 30px;
    display:flex;
    align-items: center;
    justify-content: center;
  }
  .img-user-profile{
    border: 1px solid;
    border-radius: 50%;
  }
</style>
</head>
<body>
<?php

include("../Assets/Connection/connection.php");
include("HeaderO.php");
ob_start();
if(isset($_POST["btn_update"]))
{
    $name = $_POST["txt_name"];
	$add = $_POST["txt_add"];
	$contact = $_POST["txt_cont"];
	$email = $_POST["txt_email"];
	$lic = $_POST["txt_lic"];
	$details = $_POST["txt_details"];
	
	$photo=$_FILES["filephoto"]["name"];
	$temp=$_FILES["filephoto"]["tmp_name"];
	$img=$_FILES["fileimg"]["name"];
	$temp1=$_FILES["fileimg"]["tmp_name"];

  move_uploaded_file($temp1,"../Assets/Files/Events/".$img);
  move_uploaded_file($temp,"../Assets/Files/Events/".$photo);
  
	
	$upQry="update tbl_eventorganiser set organiser_name='".$name."',organiser_address='".$add."',organiser_contact='".$contact."',organiser_email='".$email."',organiser_license='".$lic."',organiser_details='".$details."',organiser_username='".$username."',organiser_photo='".$photo."',organiser_img='".$img."' where organiser_id='".$_SESSION["oid"]."'";
	if($con->query($upQry))
	{
			
			?>
			<script>
			alert("Data updated");
			windows.location="MyProfileO.php";
			</script>
			<?php
			
	}
}
    $selQry = "select * from tbl_eventorganiser where organiser_id='".$_SESSION["oid"]."'";
	$row = $con->query($selQry);
	 if($data=$row->fetch_assoc())
	  {
?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" enctype="multipart/form-data">
					<span class="login100-form-title p-b-26">
				Edit Profile
					</span>
           <div class="row-user-profile">
					<div ><img class="img-user-profile" src="../Assets/Files/Events/<?php echo $data["organiser_photo"]?>" alt="<?php echo $data["organiser_photo"]?>" width="140px" height="140px" />
	  			 
					
    </div>
					</div>
          <input  class="input100" type="file" name="filephoto" >
					<div class="wrap-input100 validate-input">Name
						<input class="input100" type="text" name="txt_name" id="txt_name" value="<?php echo $data["organiser_name"]?>">
					
					</div>
          <div class="wrap-input100 validate-input">Address
						<input class="input100" type="text" name="txt_add" id="txt_add" value="<?php echo $data["organiser_address"]?>" style=" padding: 10px 5px;">
					
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">Email
						<input class="input100" type="email" name="txt_email" id="txt_email" value="<?php echo $data["organiser_email"]?>" >
					
					</div>
          <div class="wrap-input100 validate-input">
						Contact
						<input class="input100" type="text" name="txt_cont" id="txt_cont" value="<?php echo $data["organiser_contact"]?>">
						
					</div>
          <div class="wrap-input100 validate-input">
					License No.
						<input class="input100" type="text"name="txt_lic" id="txt_lic" value="<?php echo $data["organiser_license"]?>">
						
					</div>
          <div class="wrap-input100 validate-input">
					Details
						<input class="input100" type="text" name="txt_details" value="<?php echo $data["organiser_details"]?>">
						
					</div>
		  <div class="wrap-input100 validate-input">
					Add photo
					<input  class="input100" type="file" name="fileimg" >
						
					</div>
          
          

				

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button name="btn_update" value="Update" class="login100-form-btn">
								Update
							</button>
						</div>
					</div>

				
          <?php
	  }
 ?>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
<script src="../Assets/Template/EditForm/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/EditForm/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/EditForm/vendor/bootstrap/js/popper.js"></script>
	<script src="../Assets/Template/EditForm/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/EditForm/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/EditForm/vendor/daterangepicker/moment.min.js"></script>
	<script src="../Assets/Template/EditForm/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/EditForm/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/EditForm/js/main.js"></script>


</body>
<?php
    include("FooterO.php");
    ob_flush();
?>
</html>