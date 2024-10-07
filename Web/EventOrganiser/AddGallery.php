<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventlizer::Add Gallery</title>
<style>
    td,th{
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
include("HeaderO.php");
ob_start();
$_SESSION['eid']=$_GET['eid'];
if(isset($_POST["btn_save"]))
{
	$caption = $_POST["txtcap"];
	
	$photo=$_FILES["filephoto"]["name"];
	$temp=$_FILES["filephoto"]["tmp_name"];
	
	move_uploaded_file($temp,"../Assets/Files/User/".$photo);
	
	$insQry="insert into tbl_gallery(gallery_image,gallery_caption,organiser_id)values('".$photo."','".$caption."','".$_SESSION['oid']."')";
		if($con->query($insQry))
		{
			?>
			<script>
			alert("Data inserted");
			windows.location="AddGallery.php";
			</script>
			<?php
		}
}
if(isset($_GET["gid"]))
{
	$delqry="delete from tbl_gallery where gallery_id='".$_GET["gid"]."'";
	if($con -> query($delqry))
	{
		header("Location:AddGallery.php");
	}
}
?>

<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <table width="200" border="1" align="center">
    <tr>
      <td>Image</td>
      <td><input type="file" name="filephoto" /></td>
    </tr>
    <tr>
      <td>Caption</td>
      <td><input type="text" name="txtcap" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_save" value="Save" /><input type="reset" name="btn_cancel" value="Cancel" /></td>
      
    </tr>
  </table>
  <br /><br />
  <table width="200" border="1" align="center">
  <tr>
    <td>SL NO</td>
    <td>Image</td> 
    <td>Caption</td>
    <td>Action</td>
  </tr>
  <?php
	  $i = 0;
	  $selQry = "select * from tbl_gallery  where organiser_id='".$_SESSION['oid']."' ";
	  $row = $con->query($selQry);
	  while($data=$row->fetch_assoc())
	  {
		  $i++;
	  
	  ?>
  		<tr>
   		 <td><?php echo $i?></td>
          
  	 	 <td><img src="../Assets/Files/Events/<?php echo $data["gallery_image"]?>" alt="<?php echo $data["gallery_image"]?>" width="120px" height="120px" /></td>
         
        <td><?php echo $data["gallery_caption"]?></td>
  	     <td><a href="AddGallery.php?gid=<?php echo $data['gallery_id']?>">Delete</a></td>
    
  		</tr>
      <?php
     }
      ?>
</table>
</form>
</body></br></br>
<?php
    include("FooterO.php");
    ob_flush();
?>
</html>