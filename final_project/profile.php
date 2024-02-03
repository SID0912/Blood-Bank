<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td
{padding:10px !important; font-size:24px;text-align:center; color:#000;  }
</style>
      <section id="main-content">
          <section class="wrapper">
<br>
<center>
<h5><?php  echo $_SESSION['login']?> Profile...</h5>
<br />
<br />
<table border="1" align="center">
<tr bgcolor="#CCCCCC">
</tr>
<?php
$sen=$_SESSION['login'];
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from user where u_fnm='$sen'");
while($row=mysqli_fetch_array($query))
{

echo "<tr><td>First Name</td><td>".$row['u_fnm']."</td></tr>";
echo "<tr><td>Middle Name</td><td>".$row['u_mnm']."</td></tr>";
echo "<tr><td>Last Name</td><td>".$row['u_lnm']."</td></tr>";
echo "<tr><td>Password</td><td>"."*******"."</td></tr>";
echo "<tr><td>Dob</td><td>".$row['u_dob']."</td></tr>";
echo "<tr><td>Email_id</td><td>".$row['u_email']."</td></tr>";
echo "<tr><td>Address</td><td>".$row['u_add']."</td></tr>";
echo "<tr><td>Contact</td><td>".$row['u_contact']."</td></tr>";
echo "<tr><td>Donor</td><td>".$row['u_doner']."</td></tr>";

}
?></table>
<?php
include "footer.php";
?>
