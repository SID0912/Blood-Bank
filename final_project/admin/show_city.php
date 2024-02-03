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
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">City</h1>
</strong>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#CC0000">

<td>city_id</td>
<td>city_nm</td>
<td>state_id</td>
<td>update</td>
<td>delete</td>
</tr>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from city");
while($row=mysqli_fetch_array($query))
{
$cid=$row['city_id'];	
	echo"<tr>";
echo "<td>".$row['city_id']."</td>";
echo "<td>".$row['city_nm']."</td>";
echo "<td>".$row['s_id']."</td>";
echo "<td>"."<a href='update_city.php?cid=$cid'>UPDATE</a>"."</td>";
echo "<td>"."<a href='delete_city.php?cid=$cid'>DELETE</a>"."</td>";
echo "</tr>";
}
?>
