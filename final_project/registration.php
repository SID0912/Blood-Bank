<?php
include "header.php";
?>
<style>
tr,td{padding:10px !important;  font-size:20px; color:#000; }
</style>

<center>
<strong><h1 style="font-size:30px !important; color:#FFF; text-align:center !important;">Regisration Form</h1></strong>
<br>
<br>
<br>
<br>

<form method="post" name="f1">
<table border="0">
<tr>
<td> Enter Firstname</td>
<td><input type="text"required="required"  placeholder="Enter your first name"name="u_fnm"/></td>
</tr>
<tr>
<td> Enter MiddleName</td>
<td><input type="text" required name="u_mnm"/></td>
</tr>
<tr>
<td> Enter Lastname</td>
<td><input type="text" required name="u_lnm"/></td>
</tr
><tr>
<td> Enter Password</td>
<td><input type="password" placeholder="Enter your password"name="u_pwd"/></td>
</tr>
<tr>
<tr>
<td> Enter Date Of Birth</td>
<td><input type="date" name="u_dob"/></td>
</tr>
<tr>
<td> Enter Email</td>
<td> <input type="text" placeholder="Enter your email" name="u_em"/><br /></td>
</tr>
<tr>
<td> Enter Address </td>
<td><textarea name="u_add"></textarea></td>
</tr>
<tr>
<td> Enter Contact</td>
<td><input type="text" name="u_contact"/></td>
</tr>
<tr>
<td> Select Doner</td>
<td><input type="radio" name="r1" value="Y"/>yes
<input type="radio" name="r1" value="N"/>No</td>
</tr>
<tr>
<td><input type="Submit" name="s1" /></td>
<td><input type="reset" value="Cancel" /></td>
</tr>
</table>
</form>
<br>
<strong><h1 style="font-size:30px !important; color:#dd2424; text-align:center !important;"> If You Are Already Registred Then Please   <a href="login.php"> LOGIN</a></h1></strong>
<br>
<br>
<br>
<br>
<br>
</center>
<?php
if(isset($_POST['s1']))
{
$pwd=$_POST['u_pwd'];
$fnm=$_POST['u_fnm'];
$mnm=$_POST['u_mnm'];
$lnm=$_POST['u_lnm'];
$dob=$_POST['u_dob'];
$em=$_POST['u_em'];
$add=$_POST['u_add'];
$cont=$_POST['u_contact'];
$donar=$_POST['r1'];
include "connection.php";
$query=mysqli_query($con,"insert into user value('','$pwd','$fnm','$mnm','$lnm','$dob','$em','$add','$cont','Customer','$donar')");
if($query>0)
{
echo "Thank you for Registration";	
}
else
{
echo "Try again...";	
}
}
?>
<?php
include "footer.php";
?>