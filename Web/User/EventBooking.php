<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventlizer::Event Booking</title>
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
if(isset($_POST["btn_save"]))
{
	$date=$_POST["txt_date"];
	$time=$_POST["txt_time"];
	$place=$_POST["sel_place"];
	$details=$_POST["txt_det"];
	$id=$_POST["txt_id"];
	
    $insQry="insert into tbl_booking(booking_fordate,booking_fortime,place_id,booking_details,user_id,package_id,booking_date)values('".$date."','".$time."','".$place."','".$details."','".$_SESSION["uid"]."','".$_GET["pid"]."',curdate())";
		if($con->query($insQry))
		{
			?>
			<script>
			alert("Data inserted");
			windows.location="EventBooking.php";
			</script>
			<?php
		}
	
}
?>

<form id="form1" name="form1" method="post" action="" style="margin:79px 10px">
<table width="200" border="1" align="center">
  <tr>
    <td>For Date</td>
    <td><input type="date" name="txt_date" id="txtfor" />
        <input type="hidden" name="txt_id" />
    </td>
  </tr>
  <tr>
    <td>For Time</td>
    <td><input type="time" name="txt_time" id="txt_time" /></td>
  </tr>
  <tr>
    <td>Details</td>
    <td><textarea name="txt_det" id="txt_det" cols="20" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>District:</td>
    <td>
       <select name="sel_district" id="sel_district" style="width:170px" onchange="getplace(this.value)">
			<option>select</option>
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
     </td>
   </tr>
   <tr>
      <td>Place:</td>
      <td>
        <select name="sel_place" id="sel_place" style="width:170px">
			<option>select</option>
			
	    </select>
      </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" class="btn btn-success" name="btn_save" value="Save" />&nbsp;<input type="reset" class="btn btn-danger" name="btn_cancel" value="Cancel" /></td>
  </tr>
</table>
</form>
</body>
<?php
    include("Footer.php");
    ob_flush();
?>
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
</script>
</html>

</body>
</html>