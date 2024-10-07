<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Place</title>
</head>

<body>
<?php
include("../Assets/Connection/connection.php");
include('Head.php');
if(isset($_POST["btn_save"]))
{
	$place=$_POST["txtplace"];
	$pincode=$_POST["txtpincode"];
	$district=$_POST["sel_district"];
	$id=$_POST["txt_id"];
	if($id!="")
	{
		$upQry = "update tbl_place set place_name='".$place."',place_pin='".$pincode."',district_id='".$district."' where place_id='".$id."'";
		if($con->query($upQry))
		{
			header("Location:Place.php");
			
		}
	}
	else
	{
		$insQry="insert into tbl_place(place_name,place_pin,district_id)values('".$place."','".$pincode."','".$district."')";
		if($con->query($insQry))
		{
			?>
			<script>
			alert("Data inserted");
			windows.location="Place.php";
			</script>
			<?php
		}
	}
}
if(isset($_GET["pid"]))
{
	$delqry="delete from tbl_place where place_id='".$_GET["pid"]."'";
	if($con -> query($delqry))
	{
		header("Location:Place.php");
	}
}

$placeid = "";
$placename= "";
$disid= "";
$placepin= "";
if(isset($_GET["eid"]))
{
	$selplace = "select * from tbl_place where place_id='".$_GET["eid"]."'";	
	$rowplace = $con->query($selplace);
	$dataplace = $rowplace->fetch_assoc();
	
	$placeid = $dataplace["place_id"];
	$placename = $dataplace["place_name"];
	$placepin = $dataplace["place_pin"];
	$disid = $dataplace["district_id"];
}
?>

<h1 class="h1-heading">Location</h1>
<form method="post">
<table border="1" align="center">
<tr>
<td>District</td>
<td>
<select name="sel_district" id="sel_district" required>
<option>select</option>
<?php
$selQry1="select * from tbl_district";
$result=$con->query($selQry1);
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
<td>Place</td>
<td><input type="text" name="txtplace" value="<?php echo $placename?>" />
    <input type="hidden" name="txt_id" value="<?php echo $placeid?>" />
</td>
    
</tr>
<tr>
<td>Pincode</td>
<td><input type="text" name="txtpincode" value="<?php echo $placepin?>" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="btn_save" value="Save" />&nbsp;&nbsp;<input type="reset" name="btn_cancel" value="Cancel" /></td>
</tr>
</table>
<table width="200" border="1" align="center">
  <tr>
    <th>SL NO</th>
    <th>DISTRICT</th>
    <th>PLACE</th>
    <th>PINCODE</th> 
    <th>ACTION</th>
  </tr>
  <?php
	  $i = 0;
	  $selQry = "select * from tbl_place p inner join tbl_district d on p.district_id=d.district_id";
	  $row = $con->query($selQry);
	  while($data=$row->fetch_assoc())
	  {
		  $i++;
	  
	  ?>
  		<tr>
   		 <td><?php echo $i?></td>
         <td><?php echo $data["district_name"]?></td>
  	 	 <td><?php echo $data["place_name"]?></td>
         <td><?php echo $data["place_pin"]?></td>
  	     <td><a href="Place.php?pid=<?php echo $data["place_id"]?>">Delete</a>||<a href="Place.php?eid=<?php echo $data["place_id"]?>">Edit</a></td>
    
  		</tr>
      <?php
     }
      ?>
</table>
</form>
</body>
<?php
include('foot.php');
?>
</html>