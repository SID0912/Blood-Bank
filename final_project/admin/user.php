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
<td> enter firstname</td>
<td><input type="text"required="required" placeholder="Enter your name" name="u_fnm"/></td>
</tr>
<tr>
<td> enter middle name</td>
<td><input type="text"  required="required"name="u_mnm"/></td>
</tr>
<tr>
<td> enter lastname</td>
<td><input type="text" required="required" name="u_lnm"/></td>
</tr>
<tr>
<td> enter password</td>
<td><input type="password" placeholder=" Enter password" name="u_pwd"/><br /></td>
</tr>
<tr>
<tr>
<td> enter dob</td>
<td><input type="date" name="u_dob"/><br /></td>
</tr>
<tr>
<td> enter Email</td>

<td> <input type="text"  placeholder="Enter your Email"name="u_email"/></td>
</tr>
<tr>
<td> enter user address</td>
<td><textarea name="u_add"></textarea></td>
</tr>
<tr>
<td> enter contact</td>
<td><input type="text" name="u_contact"/><br /></td>
</tr>
<tr>
<td> select doner</td>
<td><input type="radio" name="r1" value="Y"/>yes
<input type="radio" name="r1" value="N"/>No</td>
</tr>
<tr>
<td><input type="submit" name="s1" /></td>
<td><input type="button" value="cancel" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['s1']))
{
include "connection.php";
$pwd=mysqli_real_escape_string($con,$_POST['u_pwd']);
$fnm=mysqli_real_escape_string($con,$_POST['u_fnm']);
$mnm=mysqli_real_escape_string($con,$_POST['u_mnm']);
$lnm=mysqli_real_escape_string($con,$_POST['u_lnm']);
$dob=mysqli_real_escape_string($con,$_POST['u_dob']);
$em=mysqli_real_escape_string($con,$_POST['u_email']);
$add=mysqli_real_escape_string($con,$_POST['u_add']);
$cont=mysqli_real_escape_string($con,$_POST['u_contact']);
$donar=mysqli_real_escape_string($con,$_POST['r1']);
$query=mysqli_query($con,"insert into user value('','$pwd','$fnm','$mnm','$lnm','$dob','$em','$add','$cont','Customer','$donar')");
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
</body>
</html>
