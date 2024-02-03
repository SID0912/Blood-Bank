<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important;  font-size:18; color:#003; }
</style>

      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<br>
<br>
<br>
<center>

<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Notification</h1>
</strong>
<br />
<form method="post" name="f1">
<table border="0">
<tr>
<td> Enter Notification Name</td>
<td><input type="text"required="required" name="noti_nm"/></td>
</tr>
<tr>
<td> Enter Notification Time</td>
<td><input type="time" name="noti_time"/></td>
</tr>
<tr>
<td> Enter Description </td>
<td><textarea name="noti_desc"></textarea></td>
</tr>
<tr>
<td> Enter Notification Date</td>
<td><input type="date" name="noti_date"/></td>
</tr>
<tr>
<td>Select User</td><td>
<select name="user_id">
<option>--Select user--</option>
<?php
include "connection.php";
$query=mysqli_query($con,"select * from user");
while($row=mysqli_fetch_array($query))
{
	$uid=$row['u_id'];
	$pwd=$row['u_pwd'];
	$fnm=$row['u_fnm'];
	$mnm=$row['u_mnm'];
	$lnm=$row['u_lnm'];
	$dob=$row['u_dob'];
	$em=$row['u_email'];
	$add=$row['u_add'];
	$cont=$row['u_contact'];

	echo "<option value='$uid'>".$fnm."</option>";
}
?>
</select></td></tr>
<tr>
<td><input type="submit" name="s1" /></td>
<td><input type="reset" value="cancel" 

</form>
</table>

<?php
if(isset($_POST['s1']))
{
$name=$_POST['noti_nm'];
$noti_time=$_POST['noti_time'];
$desc=$_POST['noti_desc'];
$noti_date=$_POST['noti_date'];
$u_id=$_POST['user_id'];
include "connection.php";
$query=mysqli_query($con,"insert into notification values('','$name','$noti_time','$desc','$noti_date','$u_id')");
if($query>0)
{
echo "Successfully Added";
}
else
{
echo "Try again...".mysqli_error($con);	
}
}
?>
</body>
</html>
