<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Subcategory</title>
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
if(isset($_POST["btn_save"]))
{
	$subc=$_POST["txtsub"];
	$category=$_POST["sel_sub"];
	$id=$_POST["txt_id"];
	if($id!="")
	{
		$upQry = "update tbl_subcategory set subcategory_name='".$subc."',scategory_id='".$category."' where subcategory_id='".$id."'";
		if($con->query($upQry))
		{
			header("Location:Subcategory.php");
			
		}
	}
	else
	{
		$insQry="insert into tbl_subcategory(subcategory_name,scategory_id)values('".$subc."','".$category."')";
		if($con->query($insQry))
		{
			?>
			<script>
			alert("Data inserted");
			windows.location="Subcategory.php";
			</script>
			<?php
		}
	}
}
if(isset($_GET["sid"]))
{
	$delqry="delete from tbl_subcategory where subcategory_id='".$_GET["sid"]."'";
	if($con -> query($delqry))
	{
		header("Location:Subcategory.php");
	}
}

$subid = "";
$subname= "";
$catid= "";
if(isset($_GET["eid"]))
{
	$selsub = "select * from tbl_subcategory where subcategory_id='".$_GET["eid"]."'";	
	$rowsub= $con->query($selsub);
	$datasub = $rowsub->fetch_assoc();
	
	$subid = $datasub["subcategory_id"];
	$subname = $datasub["subcategory_name"];
	$catid = $datasub["scategory_id"];
}
?>
<!--<a href="HomePage.php">Home</a>-->
<h1 class="h1-heading">Sub Categories</h1>
<form method="post">
  <table border="1" align="center">
  <tr>
<td>Category</td>
<td>
<select name="sel_sub" id="sel_sub">
<option>select</option>
<?php
$selQry1="select * from tbl_servicecategory";
$result=$con->query($selQry1);
while($rows=$result->fetch_assoc())
{

?>
<option value="<?php echo ($rows['scategory_id']);?>"><?php echo ($rows['scategory_name']);?></option>
<?php
}
?>
</select>
</td>
</tr>
	<tr>
    <td>Subcategory</td>
    <td><input type="text" name="txtsub" value="<?php echo $subname?>" />
        <input type="hidden" name="txt_id" value="<?php echo $subid?>" />
    </td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" name="btn_save" value="Save" />&nbsp;&nbsp;<input type="reset" name="btn_cancel" value="Cancel" /></td>
</tr>
</table>
<br /><br />
<table width="250" border="1" align="center">
  <tr>
    <td>SL.NO</td>
    <td>CATEGORY</td>
    <td>SUBCATEGOR</td>
    <td>ACTION</td>
    
  </tr>
  <?php
	  $i = 0;
	  $selQry = "select * from tbl_subcategory p inner join tbl_servicecategory d on p.scategory_id=d.scategory_id";
	  $row = $con->query($selQry);
	  while($data=$row->fetch_assoc())
	  {
		  $i++;
	  
	  ?>
  		<tr>
   		 <td><?php echo $i?></td>
         <td><?php echo $data["scategory_name"]?></td>
  	 	 <td><?php echo $data["subcategory_name"]?></td>
  	     <td><a href="Subcategory.php?sid=<?php echo $data["subcategory_id"]?>">Delete</a>||<a href="Subcategory.php?eid=<?php echo $data["subcategory_id"]?>">Edit</a></td>
         </tr>
      <?php
     }
      ?>
</td>
</table>
</form>
</body>
<?php
include('foot.php');
?>
</html>