<tr>

<?php

include("../Connection/connection.php");
       $selQry = "select * from tbl_eventorganiser o inner join tbl_place p on o.place_id=p.place_id inner join  	  	                  tbl_district d on p.district_id=d.district_id where o.place_id='".$_GET["sid"]."'";
	   $row = $con->query($selQry);
	   $i=0;
	   while($data=$row->fetch_assoc())
	   {
		 $i++;  
?>

  <td>  <p align="center"><img src="../Assets/Files/User/<?php echo $data["organiser_photo"]?>" alt="<?php echo $data["organiser_photo"]?>" width="120px" height="120px" /><br />
  
    Name:
    <?php echo $data["organiser_name"]?><br />
 
    Address:
    <?php echo $data["organiser_address"]?><br />
 
    Contact:
    <?php echo $data["organiser_contact"]?><br />
  
    District:
    <?php echo $data["district_name"]?><br />
 
    Place:
    <?php echo $data["place_name"]?><br />
    <a href="SearchEvent.php?eid=<?php echo $data["organiser_id"]?>">View Event</a>
  </p></td>
   
<?php 
  		 if($i==3)
  		 {
	  		 echo "</tr><tr>";
			 $i=0;
			 
   		 }
	  }
?>