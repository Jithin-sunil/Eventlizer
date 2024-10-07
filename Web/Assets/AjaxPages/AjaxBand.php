<tr>

<?php
session_start();
include("../Connection/connection.php");

$selQry = "select * from tbl_musicband m inner join tbl_place p on m.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id where m.place_id='".$_GET['bid']."'";
	   $row = $con->query($selQry);
	   $i=0;
	   while($data=$row->fetch_assoc())
	   {
		 $i++;  
?>

  <td align="left"><img src="../Assets/Files/Musicband/<?php echo $data["musicband_photo"]?>" alt="<?php echo $data["musicband_photo"]?>" width="120px" height="120px" /><br />
  
    Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
    <?php echo $data["musicband_name"]?><br />
 
    Address&nbsp;:
    <?php echo $data["musicband_address"]?><br />
 
    Contact&nbsp;&nbsp;:
    <?php echo $data["musicband_contact"]?><br />
    
    Email&nbsp;&nbsp;:
    <?php echo $data["musicband_email"]?><br />
  
    District &nbsp;&nbsp;:
    <?php echo $data["district_name"]?><br />
 
    Place&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
    <?php echo $data["place_name"]?><br />
    <a href="SearchProgram.php?eid=<?php echo $data["musicband_id"]?>">Search Event</a>
  </p></td>
   
<?php 
  		 if($i==3)
  		 {
	  		 echo "</tr><tr>";
			 $i=0;
			 
   		 }
	  }
?>