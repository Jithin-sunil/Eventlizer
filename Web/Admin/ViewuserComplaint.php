<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventlizer::View Complaint</title>
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
?>

<h1 class="h1-heading">User Complaints</h1>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <th>Sl.No</th>
      <th>Title</th>
      <th>Content</th>
      <th>Date</th>
      <th>Username</th>
      <th>Action</th>
    </tr>
    <?php
  $i = 0;
  $selQry = "select * from tbl_complaint c inner join tbl_user u on c.user_id=u.user_id where complaint_status=0";
  $row = $con->query($selQry);
  while($data=$row->fetch_assoc())
  {
	  $i++;
  
  ?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $data["complaint_title"]?></td>
    <td><?php echo $data["complaint_content"]?></td>
    <td><?php echo $data["complaint_date"]?></td>
    <td><?php echo $data["user_name"]?></td>   
    <td><a href="Reply.php?cid=<?php echo $data["complaint_id"]?>">Reply</a></td>
    
  </tr>
  <?php
  }
  ?>
  </table>
  <br /><br /><br /><br />
  <h1 class="h1-heading">Replied</h1>
  <table width="200" border="1" align="center">
    <tr>
    <th>Sl.No</th>
      <th>Title</th>
      <th>Content</th>
      <th>Date</th>
      <th>Reply</th>
      <th>Username</th>
      
    </tr>
    <?php
  $i = 0;
  $selQry = "select * from tbl_complaint c inner join tbl_user u on c.user_id=u.user_id where complaint_status=1";
  $row = $con->query($selQry);
  while($data=$row->fetch_assoc())
  {
	  $i++;
  
  ?>
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $data["complaint_title"]?></td>
    <td><?php echo $data["complaint_content"]?></td>
    <td><?php echo $data["complaint_date"]?></td>
    <td><?php echo $data["complaint_reply"]?></td>
    <td><?php echo $data["user_name"]?></td>      
  </tr>
  <?php
  }
  ?>
  </table>
</form>
</body></br></br></br></br></br></br></br></br></br></br></br>
<?php
include('foot.php');
?>
</html>