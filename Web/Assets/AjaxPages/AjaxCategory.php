<option>select</option>
<?php
include("../Connection/connection.php");

$sel="select * from tbl_subcategory where scategory_id='".$_GET["sid"]."'";
 $row = $con->query($sel);
	while($data=$row->fetch_assoc())
	{
		
		
		?>
      <option value="<?php echo $data["subcategory_id"] ?>"><?php echo $data["subcategory_name"] ?></option>
        <?php
	}
?>