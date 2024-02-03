<?php
include "header.php";
?><br>
<style>
tr,td{padding:10px !important; font-size:20px; color:#OOO; }
</style>
<br>
<center>
<strong><h1 style="font-size:30px !important; color:#FFF; text-align:center !important;">Login Form</h1></strong>
<br>
<br>
<br>
<br>
<form method="post">
<table border="0">
<tr>
<td>Enter Email</td>
<td><input type="email" name="em"></td>
</tr>
<tr>
<td>Enter Password</td>
<td><input type="password" name="pwd"></td>
</tr>
<tr>
<td><input type="submit" name="s1"></td>
<td><input type="reset" value="cancel"></td>
</tr>
</table>
</form>
<br>
</center>
<center>
<strong><h1 style="font-size:20px !important; color:#FFF;  !important;"><a href="forget.php">FORGET PADDWORD</a></h1></strong>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
 <?php
	   //em //pwd //s1
	   if(isset($_POST['s1']))
	   {
		$con=mysqli_connect('localhost','root','','bloodbank');
		mysqli_select_db($con,'bloodbank');
		$txt_em=$_POST['em'];
		$txt_pwd=$_POST['pwd'];
		$query=mysqli_query($con,"select * from user where u_email='$txt_em'");
		while($row=mysqli_fetch_array($query))
		{
		if($txt_pwd==$row['u_pwd'])
		{
	$_SESSION['login']=$row['u_fnm'];
		echo "<meta http-equiv='refresh' content='0;url=moreservices.php'/>";
		//echo "<h1>Thank You	</h1>";
		}	
		else
		{
		echo "<h1 font-size:42px; style='color:red;' align='center'>Sorry Please Try again..!!!</h1>";	
		}
		}   
	    }
	?> 
<?php
include "footer.php";
?>