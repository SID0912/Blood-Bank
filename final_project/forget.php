<?php
include "header.php";
?>
<style>
tr,td{padding:10px !important; font-size:26px; color:#000; }
</style>
<br />
<br />
<center>
<strong><h1 style="font-size:30px !important; color:#FFF; text-align:center !important;">Forget Form</h1></strong>
<br>
<br>
<br>
<br>
<br>
<form method="post">
<table border="0">
<tr>
<td>Enter Email </td>
<td> <input type="text" placeholder="Enter Your email"name="em" /></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr><td><input type="submit" name="s1" /></td>
</tr>
</table>
</form>
</center>
<br />
<br />
<br /><?php 
	   if(isset($_POST['s1']))
	   {
		include"connection.php";
		$txt_em=$_POST['em'];
		$query=mysqli_query($con,"select * from user where u_email='$txt_em'");
		while($row=mysqli_fetch_array($query))
		{echo "your password send on your email id successfully ".$row['']."...";}
		}
?>
<br>
<br>
<br>
<br>
<?php
include "footer.php";
?>