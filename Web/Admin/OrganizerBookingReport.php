<?php

include("../Assets/Connection/connection.php");
 

?>
<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<style>
.h1-heading {
    font-size: 45px;
    font-family: "Rockville Solid Regular";
    color: #000000;
    margin-bottom: 20px;
    margin-top: 30px;
   }
</style>
<body><br/>
<h1 class="h1-heading">Report</h1>
<div id="tab" align="center">
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>


var xValues = [
<?php 

  $sel="select * from tbl_eventorganiser";
  $row=$con->query($sel);
  while($data=$row->fetch_assoc())
  {
        echo "'".$data["organiser_name"]."',";
      
  }

?>
];

var yValues = [
<?php 
  $sel="select * from tbl_eventorganiser";
  $row=$con->query($sel);
  while($data=$row->fetch_assoc())
  {
	  
	 $sel1="select count(*) as id from tbl_booking b  inner join tbl_package w on w.package_id=b.package_id inner join tbl_eventorganiser e on e.organiser_id=w.organiser_id WHERE w.organiser_id='".$data["organiser_id"]."'";
	  
	  $row1=$con->query($sel1);
  while($data1=$row1->fetch_assoc())
	  {
			echo $data1["id"].",";
	  }
  }

?>
];



var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
  "#00FFFF",
  "#FF00FF",
  "#FFFF00",
  "#000000"
];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "All Bookings"
    }
  }
});
</script>

</div>
</body>
</html>
