<?php
//include "header.php";
//include "slidebar.php";
?>
<title>Contact Report </title>
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
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Contact </h1>
</strong>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#CC0000">

<td>c_id</td>
<td>c_nm</td>
<td>c_email</td>
<td>c_msg</td>

</tr>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from contact");
while($row=mysqli_fetch_array($query))
{
	$cid=$row['c_id'];
	echo"<tr>";
echo "<td>".$row['c_id']."</td>";
echo "<td>".$row['c_nm']."</td>";
echo "<td>".$row['c_email']."</td>";
echo "<td>".$row['c_msg']."</td>";
echo "</tr>";
}