<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventlizer::Complaint Reply</title>
<style>
  .h1-heading {
    font-size: 40px;
    font-family: "Rockville Solid Regular";
    color: #000000;
    margin-bottom: 20px;
    margin-top: 30px;
   }
</style>
</head>

<body>
<?php
//session_start();
include("../Assets/Connection/connection.php");
include('Head.php');
if(isset($_POST["btn_save"]))
{
	    $reply=$_POST["txt_rep"];
	
	    $upQry = "update tbl_complaint set complaint_reply='".$reply."', complaint_status=1 where complaint_id='".$_GET['cid']."'";
		if($con->query($upQry))
		{
			?>
			<script>
			alert("Replied");
			window.location="ViewuserComplaint.php";
			</script>
			<?php
		}
}
?>
<br /><br /><br />
<h1 class="h1-heading">Give Solution</h1><br />
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="2" align="center">
    <tr>
      <td>Reply</td>
      <td><label for="txt_rep"></label>
      <textarea name="txt_rep" id="txt_rep" cols="20" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_save" value="Submit" />&nbsp;&nbsp;<input type="reset" name="btn_cancel" value="Cancel" /></td>
     
    </tr>
  </table>
</form>
</body><br /><br /<br /><br /><br/><br /><br /><br /><br />
<?php
include('foot.php');
?>
</html>
