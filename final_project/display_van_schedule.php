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
<h1 align="center" style="font-size:28px !important; color:#FFF; text-align:center !important;">Van schedule</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#999999">
<td>van_id</td>
<td>van_date</td>
<td>van_add</td>
<td>start_time</td>
<td>end_time</td>
<td>area_code</td>
</tr>
<?php
include"connection.php";
$query=mysqli_query($con,"select * from van_schedule");
while($row=mysqli_fetch_array($query))
{echo"<tr>";
echo "<td>".$row['van_id']."</td>";
echo "<td>".$row['van_date']."</td>";
echo "<td>".$row['van_add']."</td>";
echo "<td>".$row['start_time']."</td>";
echo "<td>".$row['end_time']."</td>";
$areaid=$row['area_id'];
$temp12=mysqli_query($con,"select * from `area` where `a_id`='$areaid'");
$row1=mysqli_fetch_array($temp12);
$unm12=$row1['a_nm'];
echo "<td>".$unm12."</td>";}
echo "</tr>";

?></table>
<br>
<br>
<br>
<br>

<?php
include"footer.php";
?>
