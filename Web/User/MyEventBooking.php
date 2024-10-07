<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventlizer::View Bookings</title>
<style>
  td{
    padding: 10px;
  }
  table{
    border-radius:10px;
  }
  input, select, textarea{
    border-radius:5px;
  } 
  input[type=file]::file-selector-button {
  border: none;
  padding: .2em .4em;
  border-radius: .2em;
  background-color: #88b44e;
  transition: 1s;
}

input[type=file]::file-selector-button:hover {
  background-color: #558418;
}
</style>
</head>

<body>
<?php

include("../Assets/Connection/connection.php");
include('Header.php');
ob_start();
if(isset($_GET["did"]))
{
	$delqry="delete from tbl_booking where booking_id='".$_GET["did"]."'";
	if($con -> query($delqry))
	{
		header("Location:MyBandBooking.php");
	}
}
?>

<form id="form1" name="form1" method="post" action="" style="margin:167px 10px">
  <table width="200" border="1" align="center">
    <tr>
      <th>Sl.No</th>
      <th>For Date</th>
      <th>For Time</th>
      <th>Details</th>
      <th>District</th>
      <th>Place</th>
      <th>EventType</th>
     
      <th>Organiser Name</th>
      <th>Booked Date</th>
      <th>Status</th>
    </tr>
    
<?php

$i=0;
$selQry = "select * from tbl_booking b inner join tbl_place p on b.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id inner join tbl_workdetails w on b.details_id=w.details_id INNER JOIN tbl_eventorganiser o on w.organiser_id=o.organiser_id INNER JOIN tbl_subcategory s on w.subcategory_id=s.subcategory_id INNER JOIN tbl_servicecategory sc on s.scategory_id=sc.scategory_id where user_id='".$_SESSION['uid']."'";
$row = $con->query($selQry);
   while($data=$row->fetch_assoc())
   {	
   $i++;
?>
      <tr>
   		 <td><?php echo $i?></td>
         <td><?php echo $data["booking_fordate"]?></td>
  	 	 <td><?php echo $data["booking_fortime"]?></td>
         <td><?php echo $data["booking_details"]?></td>
         <td><?php echo $data["district_name"]?></td>
         <td><?php echo $data["place_name"]?></td>
         <td><?php echo $data["eventtype_name"]?></td>
        
         <td><?php echo $data["organiser_name"]?></td>
         <td><?php echo $data["booking_date"]?></td>
         <td><?php 
		 if($data["booking_status"]==0 )
		 {
			 echo "Booking not verified";
			  ?>
             <a href="MyEventBooking.php?did=<?php echo $data["booking_id"]?>">Cancel</a>
             <?php
		 }
		  else  if($data["booking_status"]==1 && $data["booking_amount"]==0)
		 {
			 echo "Accepted ";
			
		 } 
		 else  if($data["booking_status"]==1   && $data["booking_amount"]!=0)
		 {
			 echo "Accepted & Pay Rs.". $data["booking_amount"];
			 ?>
             <a href="Payment.php?bid=<?php echo $data["booking_id"]?>&&bamount=<?php echo $data["booking_amount"]?>">Pay Now</a>
             <?php
		 } 
		 else  if($data["booking_status"]==3)
		 {
			 echo "Payment Completed ";
			
		 }
		 else{
			echo "Booking Got Rejected"; 
		 }
		 
		 
		 ?></td>
      </tr>
   <?php
   }
   ?>

  </table>
</form>
</body>
<?php
    include("Footer.php");
    ob_flush();
?>
</html>