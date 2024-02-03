<?php
include "header.php";
include "slidebar.php";
?>

<style>
tr,td{padding:10px !important; font-size:18px; color:#003;text-align:center;  }
</style>

      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<br>
<br>
<br>
<center>
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Donation Camp </h1>
</strong>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#CC0000">

<td>camp_id</td>
<td>camp_nm</td>
<td>camp_location</td>
<td>camp_date</td>
<td>start_time</td>
<td>End_time</td>
<td>update</td>
<td>delete</td>
</tr>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from donation_camp");
while($row=mysqli_fetch_array($query))
{
	$campid=$row['camp_id'];
	echo"<tr>";
echo "<td>".$row['camp_id']."</td>";
echo "<td>".$row['camp_nm']."</td>";
echo "<td>".$row['camp_location']."</td>";
echo "<td>".$row['camp_date']."</td>";
echo "<td>".$row['start_time']."</td>";
echo "<td>".$row['end_time']."</td>";
echo "<td>"."<a href='update_donation_camp.php?campid=$campid'>UPDATE</a>"."</td>";
echo "<td>"."<a href='delete_donation_camp.php?campid=$campid'>DELETE</a>"."</td>";
echo "</tr>";
}
?>
