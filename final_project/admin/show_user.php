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
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">User</h1>
</strong>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#CC0000">

<td>u_id</td>
<td>u_pwd</td>
<td>u_fnm</td>
<td>u_mnm</td>
<td>u_lnm</td>
<td>u_dob</td>
<td>u_email</td>
<td>u_add</td>
<td>u_contact</td>
<td>u_role</td>
<td>u_doner</td>
<td>delete</td>
</tr>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from user");
while($row=mysqli_fetch_array($query))
{
	$uid=$row['u_id'];
	echo"<tr>";
echo "<td>".$row['u_id']."</td>";
echo "<td>".$row['u_pwd']."</td>";
echo "<td>".$row['u_fnm']."</td>";
echo "<td>".$row['u_mnm']."</td>";
echo "<td>".$row['u_lnm']."</td>";
echo "<td>".$row['u_dob']."</td>";
echo "<td>".$row['u_email']."</td>";
echo "<td>".$row['u_add']."</td>";
echo "<td>".$row['u_contact']."</td>";
echo "<td>".$row['u_role']."</td>";
echo "<td>".$row['u_doner']."</td>";
echo "<td>"."<a href='delete_user.php?uid=$uid'>DELETE</a>"."</td>";
echo "</tr>";
}
?>
