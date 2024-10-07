<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Organiser Verification</title>
<style>
    .table-container {
      width: 100%; /* Set the desired width for your container */
      overflow-x: auto; /* Enable horizontal scrolling */
    }
    .h1-heading {
    font-size: 47px;
    font-family: "Rockville Solid Regular";
    color: #000000;
    margin-bottom: 20px;
    margin-top: 30px;
   }
  </style>
</head>

<body>
<?php
include("../Assets/Connection/connection.php");
include('Head.php');
if(isset($_GET["aid"]))
{
	$accept="update tbl_eventorganiser set organiser_vstatus=1 where organiser_id='".$_GET["aid"]."'";
	if($con->query($accept))
	{
			header("Location:Organiserverification.php");
			
	}
}
if(isset($_GET["rid"]))
{
	$reject="update tbl_eventorganiser set organiser_vstatus=2 where organiser_id='".$_GET["rid"]."'";
	if($con->query($reject))
	{
			header("Location:Organiserverification.php");
			
	}
}


?>
<h1 class="h1-heading">Verification</h1>
<div class="table-container">
  <table width="200" border="1">
    <tr>
      <td>Sl.No</td>
      <td>Name</td>
      <td>Address</td>
      <td>Contact</td>
      <td>Email</td>
      <td>District</td>
      <td>Place</td>
      <td>Photo</td>
      <td>License</td>
      <td>Proof</td>
      <td>Details</td>
     
      <td>Vstatus</td>
    </tr>
    
<?php

$i=0;
$selQry = "select * from tbl_eventorganiser e inner join tbl_place p on e.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id where organiser_vstatus=0";
$row = $con->query($selQry);
   while($data=$row->fetch_assoc())
   {	
   $i++;
?>
<tr>
   		 <td><?php echo $i?></td>
         <td><?php echo $data["organiser_name"]?></td>
  	 	 <td><?php echo $data["organiser_address"]?></td>
         <td><?php echo $data["organiser_contact"]?></td>
         <td><?php echo $data["organiser_email"]?></td>
         <td><?php echo $data["district_name"]?></td>
         <td><?php echo $data["place_name"]?></td>
         <td><?php echo $data["organiser_photo"]?></td>
         <td><?php echo $data["organiser_license"]?></td>
          <td><?php echo $data["organiser_proof"]?></td>
         <td><?php echo $data["organiser_details"]?></td>
        
         <td><a href="Organiserverification.php?aid=<?php echo $data["organiser_id"]?>">Accept</a>||<a href="Organiserverification.php?rid=<?php echo $data["organiser_id"]?>">Reject</a></td>
      </tr>
   <?php
   }
   ?>

  </table>
  </div>
</body>
<?php
include('foot.php');
?>
</html>