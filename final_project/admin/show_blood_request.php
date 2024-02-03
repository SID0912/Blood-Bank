
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
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Blood request </h1>
</strong>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#CC0000">

<td>req_id</td>
<td>req_type</td>
<td>req_hospital name</td>
<td>req_hospital add</td>
<td>req_hospital pnum</td>
<td>req_date</td>
<td>req_message</td>
<td>Username</td>
<td>Status</td>
<td>delete</td>
</tr>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from blood_request");
while($row=mysqli_fetch_array($query))
{
	echo"<tr>";
	$id=$row['req_id'];
echo "<td>".$row['req_id']."</td>";
$rid=$row['req_type'];

$query12=mysqli_query($con,"select * from blood_group where b_g_id='$rid'");
while($row123=mysqli_fetch_array($query12))
{
	$reqid=$row['req_id'];
echo "<td>";
echo $row123['b_g_type'];
echo"</td>";
}
echo "<td>".$row['req_hosp_name']."</td>";
echo "<td>".$row['req_hosp_add']."</td>";
echo "<td>".$row['req_hosp_num']."</td>";
echo "<td>".$row['req_date']."</td>";
echo "<td>".$row['req_msg']."</td>";
echo "<td>".$row['u_id']."</td>";
echo "<td>"."<a title='ChangeStatus' href='changestatus.php?id=$id'>".$row['status']."</a>"."</td>";
echo "<td>"."<a href='delete_blood_request.php?reqid=$reqid'>DELETE</a>"."</td>";
echo "</tr>";
			}
?>