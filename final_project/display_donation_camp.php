<?php
include "header.php";
include "session.php";
?>

<style>
tr,td{padding:10px !important; font-size:20px;border:1px solid white;color:#000; !important;  }
</style>

      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<center>
<h1 align="center" style="font-size:28px !important; color:white; text-align:center !important;">donation camp</h1>
<br>
<br>
<br>
<br />
<br />
<br />
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#999999">
<td>camp_nm</td>
<td>camp_location</td>
<td>camp_date</td>
<td>start_time</td>
<td>end_time</td>
</tr>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from donation_camp");
while($row=mysqli_fetch_array($query))
{echo"<tr>";
echo "<td>".$row['camp_nm']."</td>";
echo "<td>".$row['camp_location']."</td>";
echo "<td>".$row['camp_date']."</td>";
echo "<td>".$row['start_time']."</td>";
echo "<td>".$row['end_time']."</td>";
echo "</tr>";
}
?>
</table><br>
<br>
<br clear="all">
<br>
<br>
<?php
include "footer.php";
?>
