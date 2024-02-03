<?php
//include "header.php";
//include "slidebar.php";
?>
<title>Blood Group Report </title>
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
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Blood Group</h1>
</strong>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#CC0000">

<td>Id</td>
<td>Type</td>
<td>Description</td>
</tr>

<input type="submit" onClick="window.print()" value="Print Report" size="30" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Generate PDF"><br><br>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from blood_group");
while($row=mysqli_fetch_array($query))
{
	$bgid=$row['b_g_id'];
	echo"<tr>";
echo "<td>".$row['b_g_id']."</td>";
echo"<td>".$row['b_g_type']."</td>";
echo"<td>".$row['b_g_desc']."</td>";
echo "</tr>";
}
?>
</body>
</center>
</html>