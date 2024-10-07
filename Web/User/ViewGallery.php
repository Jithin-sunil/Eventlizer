<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Gallery</title>
</head>

<body>
<?php
include("../Assets/Connection/connection.php");
include("Header.php");
ob_start();
      $i = 0;
	  $selQry = "select * from tbl_gallery where organiser_id='".$_GET['oid']."' ";
	  $row = $con->query($selQry);
	while($data=$row->fetch_assoc())
	{
		  $i++;
	  
?>
	<table width="200" border="1">
  		<tr>
   		 <td><img src="../Assets/Files/Events/<?php echo $data["gallery_image"]?>" alt="<?php echo $data["gallery_image"]?>" width="120px" height="120px" /></td>
    
 	    </tr>
  		<tr>
         <td><?php echo $data["gallery_caption"]?></td>
  		</tr>
<?php
	 }
?>
</table>
</body>
<?php
    include("Footer.php");
    ob_flush();
?>
</html>