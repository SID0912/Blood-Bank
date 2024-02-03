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
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">State </h1>
</strong>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#CC0000">

<td>state_id</td>
<td>state_nm</td>
<td>update</td>
<td>delete</td>
</tr>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from state");
while($row=mysqli_fetch_array($query))
{
	$sid=$row['s_id'];
	echo"<tr>";
echo "<td>".$row['s_id']."</td>";
echo"<td>".$row['state_nm']."</td>";
echo "<td>"."<a href='update_state.php?sid=$sid'>UPDATE</a>"."</td>";
echo "<td>"."<a href='delete_state.php?sid=$sid'>DELETE</a>"."</td>";
echo "</tr>";
}
?>

</body>
</html>