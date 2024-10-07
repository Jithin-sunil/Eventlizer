<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
session_start();
?>

<center><h2>Welcome <?php echo $_SESSION["aname"]?></h2></center>
<table>

<tr>
<td><a href="District.php">District</a></td>
</tr>
<tr>
<td><a href="ServiceCategory.php">Service Category</a></td>
</tr>
<tr>
<td><a href="Place.php">Place</a></td>
</tr>
<tr>
<td><a href="SubCategory.php">SubCategory</a></td>
</tr>
<tr>
<td><a href="Userverification.php">Verification of User</a></td>
</tr>

<tr>
<td><a href="Musicbandverification.php">Verification Music Bands</a></td>
</tr>
<tr>
<td><a href="AcceptedMusicband.php">Music Bands Acception</a></td>
</tr>
<tr>
<td><a href="RejectedMusicband.php">Music Bands Rejection</a></td>
</tr>
<tr>
<td><a href="MusicbandType.php">Types of music bands</a></td>
</tr>
<tr>
<td><a href="Organiserverification.php">Verification of Event Organiser</a></td>
</tr>
<tr>
<td><a href="AcceptedOrganiser.php">Organiser Acception</a></td>
</tr>
<tr>
<td><a href="RejectedOrganiser.php">Organiser Rejection</a></td>
</tr>
<tr>
<td><a href="ViewuserComplaint.php">ViewuserComplaint</td>
</tr>
<tr>
<td><a href="ViewuserFeedback.php">ViewuserFeedback</td>
</tr>
<tr>
<td><a href="BandBookingReport.php">Report of band booking</td>
</tr>
<tr>
<td><a href="EventBookingReport.php">Report of event booking</td>
</tr>
<tr>
<td><a href="MusicBandBookingReport.php">Report of music band</td>
</tr>
<tr>
<td><a href="OrganizerBookingReport.php">report of Organizer</td>
</tr>
</table>
</body>
</html>