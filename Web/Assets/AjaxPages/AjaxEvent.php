<tr>

<?php
session_start();
include("../Connection/connection.php");

 $selQry = "select * from tbl_workdetails w inner join tbl_eventorganiser o on o.organiser_id=w.organiser_id inner join tbl_subcategory s on s.subcategory_id=w.subcategory_id inner join tbl_servicecategory sc on sc.scategory_id=s.scategory_id   where w.organiser_id='".$_SESSION["eid"]."' and s.subcategory_id='".$_GET["vid"]."'  ";
	  
	   $row = $con->query($selQry);
	   $i=0;
	   while($data=$row->fetch_assoc())
	   {
		 $i++;  
?>

  <td align="left">  <p align="left"><img src="../Assets/Files/User/<?php echo $data["details_image"]?>" alt="<?php echo $data["organiser_photo"]?>" width="120px" height="120px" /><br />
  
    
    About&nbsp;&nbsp;&nbsp;&nbsp;:
    <?php echo $data["details_content"]?><br />
    
    Services:
    <?php echo $data["scategory_name"]?><br />

    Sub Category:
    <?php echo $data["subcategory_name"]?><br />
    <a href="ViewGallery.php?eid=<?php echo $data["details_id"]?>&oid=<?php echo $data["organiser_id"]?>">View Gallery</a>
  </p></td>
   
<?php 
  		 if($i==3)
  		 {
	  		 echo "</tr><tr>";
			 $i=0;
			 
   		 }
	  }
?>