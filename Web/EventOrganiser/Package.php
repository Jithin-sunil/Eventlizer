<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventlizer::Service</title>
</head>

<body>
<?php
include("../Assets/Connection/connection.php");
session_start();
if(isset($_POST["btn_submit"]))
{
	$name=$_POST["txt_name"];
	$type=$_POST["sel_event"];
	$details=$_POST["txt_details"];
	
	$insQry="insert into tbl_package(package_name,eventtype_id,package_details,organizer_id)values('".$name."','".$type."','".$details."','".$_SESSION['oid']."')";
	  if($con -> query($insQry))
	  {
		 ?>
		 <script>
		 alert("Data inserted");
		 windows.location="Package.php";
		 </script>
		 <?php
	  }
	}

if(isset($_GET["did"]))
{
	$delqry="delete from tbl_package where package_id='".$_GET["did"]."'";
	if($con -> query($delqry))
	{
		header("Location:Package.php");
	}
}


?>


<form method="post">
<table border="1" align="center">
	<tr>
		<td>Name</td>
		<td><input type="text" name="txt_name" id=""></td>
	</tr>
<tr>
<td>EventType</td>
<td><select name="sel_event" id="">
	<option value="">--Select--</option>

	<?php
	$selQry1="select * from tbl_eventtype";
	$result=$con->query($selQry1);
	while($rows=$result->fetch_assoc())
	{
    ?>
    <option value="<?php echo ($rows['eventtype_id']);?>"><?php echo ($rows['eventtype_name']);?></option>
    <?php
    }
	?>
</select>
</td>
</tr>
<tr>
<td>Details</td>
<td><textarea name="txt_details" id=""></textarea>
</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="btn_submit" value="save" />
<input type="reset" name="btn_reset" value="cancel" />
</td>
</tr>
</table>
<br /><br />
<table width="200" border="1" align="center">

  <tr>
    <td>Sl No.</td>
    <td>Name</td>
    <td>Event Type</td>
    <td>Details</td>
    <td>Action</td>
  </tr>
  <?php
  $i = 0;
  $selQry = "select * from tbl_package where organizer_id=" .$_SESSION['oid'];
  $row = $con->query($selQry);
  while($data=$row->fetch_assoc())
  {
	  $i++;
  
  ?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $data["package_name"]?></td>
    <td><?php echo $data["event_type"]?></td>
    <td><?php echo $data["package_details"]?></td>
    <td><a href="Package.php?did=<?php echo $data["package_id"]?>">Delete</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</form>
</body>
</html>