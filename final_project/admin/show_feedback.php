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
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Feedback </h1>
</strong>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#CC0000">

<td>f_id</td>
<td>f_nm</td>
<td>f_desc</td>
<td>u_id</td>
<td>delete</td>
</tr>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from feedback");
while($row=mysqli_fetch_array($query))
{
	$fid=$row['f_id'];
	echo"<tr>";
echo "<td>".$row['f_id']."</td>";
echo "<td>".$row['f_nm']."</td>";
echo "<td>".$row['f_desc']."</td>";
echo "<td>".$row['u_id']."</td>";
echo "<td>"."<a href='delete_feedback.php?fid=$fid'>DELETE</a>"."</td>";
echo "</tr>";
}
?>
