<tr>

<?php
session_start();
include("../Connection/connection.php");
$selQry = "select * from tbl_banddetails d inner join tbl_bandtype b on d.type_id=b.type_id  where d.type_id='".$_GET["rid"]."' and d.musicband_id='".$_SESSION["eid"]."'";
	   $row = $con->query($selQry);
	   $i=0;
	   while($data=$row->fetch_assoc())
	   {
		 $i++;  
?>

  <td align="left">  <p align="left"><img src="../Assets/Files/Musicband/<?php echo $data["band_image"]?>" alt="<?php echo $data["band_image"]?>" width="120px" height="120px" /><br >
  
    
    Type&nbsp;&nbsp;&nbsp;&nbsp;:
    <?php echo $data["type_name"]?><br />
    
    About&nbsp;&nbsp;&nbsp;&nbsp;:
    <?php echo $data["band_details"]?><br />
    
   <a href="Mybandbooking.php?eid=<?php echo $data["band_id"]?>">Book now</a>&nbsp;&nbsp; <a href="Viewbandgallery.php?eid=<?php echo $data["band_id"]?>">View Gallery</a>
  </p></td>
   
<?php 
  		 if($i==3)
  		 {
	  		 echo "</tr><tr>";
			 $i=0;
			 
   		 }
	  }
?>