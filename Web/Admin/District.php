<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventlizer::District</title>
<style>
	.h1-heading {
    font-size: 35px;
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
	$district=$_POST["txtdis"];
	$id=$_POST["txt_id"];
	if($id!="")
	{
		$upQry = "update tbl_district set district_name='".$district."' where district_id='".$id."'";
		if($con->query($upQry))
		{
			header("Location:District.php");
		}
	}
	else
	{
		$selqry="select * from tbl_district where district_name='".$district."' ";
		$row=$con->query($selqry);
		$data=$row->fetch_assoc();
		    if($data>0)
	        {
			    ?>
				  <script>
				  alert("Already Existed");
				  window.location="District.php";
				  </script>
				<?php
			}
			else
			{
				$insQry="insert into tbl_district(district_name)values('".$district."')";
			   if($con -> query($insQry))
			   {
				?>
				<script>
				alert("Data inserted");
				window.location="District.php";
				</script>
				<?php
			   }
			}
	}
}
if(isset($_GET["did"]))
{
	$delqry="delete from tbl_district where district_id='".$_GET["did"]."'";
	if($con -> query($delqry))
	{
		?>
				<script>
				
				window.location="District.php";
				</script>
				<?php
	}
}

$disid = "";
$disname= "";
if(isset($_GET["eid"]))
{
	$selDis = "select * from tbl_district where district_id='".$_GET["eid"]."'";	
	$rowDis = $con->query($selDis);
	$dataDis = $rowDis->fetch_assoc();
	
	$disid = $dataDis["district_id"];
	$disname = $dataDis["district_name"];
}
?>

<!-- <a href="HomePage.php">Home</a> -->
<h1 class="h1-heading">The District</h1>
<form method="post">
<table border="0" align="center">
    <tr>
        <td>District Name</td>
    </tr>
    <td><input type= "text" name="txtdis" value="<?php echo $disname?>"/>
        	<input type="hidden" name="txt_id" value="<?php echo $disid?>" /></td>
    <tr>
    	<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Save"/>&nbsp;&nbsp;<input type="reset" name="btn_reset" value="Cancel"/></td>
    </tr>
</table>
<br /><br />
<table border="0" align="center">
  <tr>
    <th>Sl No.</th>
    <th>District</th>
    <th>Action</th>
  </tr>
  <?php
  $i = 0;
  $selQry = "select * from tbl_district";
  $row = $con->query($selQry);
  while($data=$row->fetch_assoc())
  {
	  $i++;
  
  ?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $data["district_name"]?></td>
    <td><a href="District.php?did=<?php echo $data["district_id"]?>">Delete</a>||<a href="District.php?eid=<?php echo $data["district_id"]?>">Edit</a></td>
    
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