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
<center>
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Area </h1>
</strong>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#CC0000">
<td>a_id</td>
<td>a_nm</td>
<td>a_code</td>
<td>city</td>
<td>update</td>
<td>delete</td>
</tr>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from area");
while($row=mysqli_fetch_array($query))
{
	$aid=$row['a_id'];
	echo"<tr>";
echo "<td>".$row['a_id']."</td>";
echo "<td>".$row['a_nm']."</td>";
echo "<td>".$row['a_code']."</td>";
echo "<td>".$row['city_id']."</td>";
echo "<td>"."<a href='update_area.php?aid=$aid'>UPDATE</a>"."</td>";
echo "<td>"."<a href='delete_area.php?aid=$aid'>DELETE</a>"."</td>";
echo "</tr>";
}
?>