<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventlizer::user booking</title>
<style>
  td,th{
    padding: 10px;
  }
  table{
    border-radius:10px;
  }
</style>
</head>

<body>
<?php
include("../Assets/Connection/connection.php");
include("HeaderO.php");
ob_start();
if(isset($_GET["aid"]))
{
	$accept="update tbl_booking set booking_status=1 where booking_id='".$_GET["aid"]."'";
	if($con->query($accept))
	{
			header("Location:ViewUserBooking.php");
			
	}
}
if(isset($_GET["rid"]))
{
	$reject="update tbl_booking set booking_status=2 where booking_id='".$_GET["rid"]."'";
	if($con->query($reject))
	{
			header("Location:ViewUserBooking.php");
			
	}
}


?>

<form id="form1" name="form1" method="post" action="" style="margin:20px 10px">
  <table width="200" border="1"  align="center">
    <tr>
      <th>Sl.No</th>
      <th>For Date</th>
      <th>For Time</th>
      <th>Details</th>
      <th>District</th>
      <th>Place</th>
      <th>Category</th>
      <th>Sub Category</th>
      <th>User Name</th>
      <th>Contact</th>
      <th>Booked Date</th>
      <th>Status</th>
    </tr>
    
<?php

$i=0;
$selQry = "select * from tbl_booking b inner join tbl_place p on b.place_id=p.place_id
 inner join tbl_district d on p.district_id=d.district_id 
 inner join tbl_package w on b.package_id=w.package_id 
 INNER JOIN tbl_eventorganiser o on w.organiser_id=o.organiser_id 
 
 INNER JOIN tbl_eventtype sc on s.eventtype_id=sc.eventtype_id 
 INNER JOIN tbl_user u on b.user_id=u.user_id where w.organiser_id=".$_SESSIOn['oid'];
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
         <td><?php echo $data["scategory_name"]?></td>
         <td><?php echo $data["subcategory_name"]?></td>
         <td><?php echo $data["user_name"]?></td>
         <td><?php echo $data["user_contact"]?></td> 
         <td><?php echo $data["booking_date"]?></td>
         <td><?php
         if($data['booking_status']==0)
         {
          ?>
          <a href="ViewUserBooking.php?aid=<?php echo $data["booking_id"]?>">Accept</a>||<a href="ViewUserBooking.php?rid=<?php echo $data["booking_id"]?>">Reject</a>
          <?php
         }
         else if($data['booking_status']==1)
         {
          ?>
          <a href="AddAmount.php?eid=<?php echo $data["booking_id"]?>">Add Amount</a>
          <?php
         }
         else if($data['booking_status']==3)
         {
          echo $data["booking_amount"]. "rs to pay";
         }
         else if($data['booking_status']==2)
         {
          echo "Rejected";
         }

         ?></td>
      </tr>
   <?php
   }
   ?>

  </table>
</form>
</body>
<br><br><br><br>><br><br><br><br><br><br><br><br><br><br><br><br>><br><br><br><br>
<?php
    include("FooterO.php");
    ob_flush();
?>

</html>