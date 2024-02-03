<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important;  }
</style>

      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<h1>user</h1>
<form method="post" name="f1">
<table border="0">
<tr>
<td> enter New firstname</td>
<td><input type="text"required="required" placeholder="Enter your name" name="u_fnm"/></td>
</tr>
<tr>
<td> enter New middle name</td>
<td><input type="text"  required="required"name="u_mnm"/></td>
</tr>
<tr>
<td> enter New lastname</td>
<td><input type="text" required="required" name="u_lnm"/></td>
</tr>
<tr>
<td> enter New password</td>
<td><input type="password" placeholder=" Enter password" name="u_pwd"/></td>
</tr>
<tr>
<tr>
<td> enter dob</td>
<td><input type="date"  disabled="disabled" name="u_dob"/></td>
</tr>
<tr>
<td> enter  New Email</td>
<td> <input type="text"  placeholder="Enter your Email"name="u_email"/></td>
</tr>
<tr>
<td> enter New address</td>
<td><textarea name="u_add"></textarea></td>
</tr>
<tr>
<td> enter New contact</td>
<td><input type="text" name="u_contact"/><br /></td>
</tr>
<tr>
<td><input type="submit" name="btn"  value="update"/></td>
<td><input type="button" value="cancel" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['btn']))
{
	$id=$_GET['uid'];
include "connection.php";
$pwd=mysqli_real_escape_string($con,$_POST['u_pwd']);
$fnm=mysqli_real_escape_string($con,$_POST['u_fnm']);
$mnm=mysqli_real_escape_string($con,$_POST['u_mnm']);
$lnm=mysqli_real_escape_string($con,$_POST['u_lnm']);
$em=mysqli_real_escape_string($con,$_POST['u_email']);
$add=mysqli_real_escape_string($con,$_POST['u_add']);
$cont=mysqli_real_escape_string($con,$_POST['u_contact']);
//$donar=mysqli_real_escape_string($con,$_POST['r1']);

$query=mysqli_query($con,"update user set `u_pwd`='$pwd',`u_fnm`='$fnm',`u_mnm`='$mnm',`u_lnm`='$lnm',`u_email`='$em',`u_add`='$add',`u_contact`='$cont' where `u_id`='$id'") or die(mysqli_error($con));

if($query>0)
{
echo "Successfullly";	
}
else
{
echo "Try again...";	
}

}
?>
