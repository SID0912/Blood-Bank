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
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Blood donor</h1></strong>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#CC0000">
<td>don_id</td>
<td>blood_type</td>
<td>don_name</td>
<td>don_add</td>
<td>don_pnum</td>
<td>don_dob</td>
<td>don_weight</td>
<td>don_height</td>
<td>don_detail</td>
<td>b_g_id</td>
<td>DELETE</td>
</tr>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from blood_donor");
while($row=mysqli_fetch_array($query))
{
	$bdid=$row['don_id'];
	echo"<tr>";
echo "<td>".$row['don_id']."</td>";	
$rid=$row['blood_type'];
$query12=mysqli_query($con,"select * from blood_group where b_g_id='$rid'");
while($row123=mysqli_fetch_array($query12))
{
	$donid=$row['don_id'];
echo "<td>";
echo $row123['b_g_type'];
echo"</td>";
}
echo "<td>".$row['don_nm']."</td>";
echo "<td>".$row['don_add']."</td>";
echo "<td>".$row['don_pnum']."</td>";
echo "<td>".$row['don_dob']."</td>";
echo "<td>".$row['don_weight']."</td>";
echo "<td>".$row['don_height']."</td>";
echo "<td>".$row['don_dtl']."</td>";
echo "<td>".$row['b_g_id']."</td>";
echo "<td>"."<a href='delete_blood_donor.php?bdid=$bdid'>DELETE</a>"."</td>";
echo "</tr>";
}
?>
