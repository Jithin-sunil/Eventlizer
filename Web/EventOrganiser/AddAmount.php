<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventlizer::Event Amount</title>
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
<?php
 include("../Assets/Connection/connection.php");
 include("HeaderO.php");
 ob_start();
?>
<br/><br/><br/>
<body>
<?php
if(isset($_POST["btn_save"]))
{
	    $amount=$_POST["txtamt"];
	
	    $upQry = "update tbl_booking set booking_amount='".$amount."', booking_status=1 where booking_id='".$_GET['eid']."'";
		if($con->query($upQry))
		{
			?>
			<script>
			alert("Amount");
			windows.location="AcceptBooking.php";
			</script>
			<?php
		}
}
?>
<form id="form1" name="form1" method="post" action="" style="margin:20px 10px">
  <table width="200" border="1" align="center">
    <tr>
      <td align="center">Add Amount</td>
    </tr>
    <tr>
      <td><input type="text" name="txtamt" id="txtamt" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" class="btn btn-success" name="btn_save" value="Save" />&nbsp;<input type="reset" class="btn btn-danger" name="btn_cancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
    include("FooterO.php");
    ob_flush();
?>
</html>