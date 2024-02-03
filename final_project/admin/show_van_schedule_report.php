<?php
//include "header.php";
//include "slidebar.php";
?>
<title>Van Schedule Report </title>
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
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Van Schedule </h1>
</strong>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#CC0000">

<td>van_id</td>
<td>van_date</td>
<td>van_address</td>
<td>start_time</td>
<td>end_time</td>
<td>area_id</td>

</tr>
<input type="submit" onClick="window.print()" value="Print Report" size="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Generate PDF"><br><br>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from van_schedule");
while($row=mysqli_fetch_array($query))
{
	$vanid=$row['van_id'];
	echo"<tr>";
echo "<td>".$row['van_id']."</td>";
echo "<td>".$row['van_date']."</td>";
echo "<td>".$row['van_add']."</td>";
echo "<td>".$row['start_time']."</td>";
echo "<td>".$row['end_time']."</td>";
echo "<td>".$row['area_id']."</td>";

echo "</tr>";
}
?>
