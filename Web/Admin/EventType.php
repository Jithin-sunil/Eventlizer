<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Service eventtype</title>
<style>
	.h1-heading {
    font-size: 43px;
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
if(isset($_POST["btn_submit"]))
{
	$eventtype=$_POST["txttype"];
	$id=$_POST["txt_id"];
	if($id!="")
	{
		$upQry = "update tbl_eventtype set eventype_name='".$eventtype."' where eventtype_id='".$id."'";
		if($con->query($upQry))
		{
			header("Location:EventType.php");
			
		}
	}
	else
	{
	$insQry="insert into tbl_eventtype(eventype_name)values('".$eventtype."')";
	  if($con -> query($insQry))
	  {
		 ?>
		 <script>
		 alert("Data inserted");
		 windows.location="EventType.php";
		 </script>
		 <?php
	  }
	}
}
if(isset($_GET["did"]))
{
	$delqry="delete from tbl_eventtype where eventtype_id='".$_GET["did"]."'";
	if($con -> query($delqry))
	{
		header("Location:EventType.php");
	}
}
$typid = "";
$typname= "";
if(isset($_GET["eid"]))
{
	$selcat = "select * from tbl_eventtype where eventtype_id='".$_GET["eid"]."'";	
	$rowcat= $con->query($selcat);
	$datacat = $rowcat->fetch_assoc();
	
	$typid = $datacat["eventtype_id"];
	$typname = $datacat["eventype_name"];
	
}

?>

<!--<a href="HomePage.php">Home</a>-->
<h1 class="h1-heading">Add Categories</h1>
<form method="post">
<table border="1" align="center">
<tr>
<td>Service</td>
<td><input type="text" name="txttype" value="<?php echo $typname?>" />
    <input type="hidden" name="txt_id" value="<?php echo $typid?>" />
</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="btn_submit" value="save" />
<input type="reset" name="btn_reset" value="cancel" />
</td>
</tr>
</table>
<br /><br />
<h1 class="h1-heading">Categories of Event Planners</h1>
<table width="200" border="1" align="center">

  <tr>
    <td>SL NO</td>
    <td>Event Type</td>
    <td>ACTION</td>
  </tr>
  <?php
  $i = 0;
  $selQry = "select * from tbl_eventtype";
  $row = $con->query($selQry);
  while($data=$row->fetch_assoc())
  {
	  $i++;
  
  ?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $data["eventype_name"]?></td>
    <td><a href="EventType.php?did=<?php echo $data["eventtype_id"]?>">Delete</a>||<a href="EventType.php?eid=<?php echo $data["eventtype_id"]?>">Edit</a></td>
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