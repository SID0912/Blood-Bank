<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important;  font-size:14; }
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
<h1>Notification</h1>
<form method="post" name="f1">
<table border="0">
<tr>
<td> Enter New Notification Name</td>
<td><input type="text"required="required" name="noti_nm"/></td>
</tr>
<tr>
<td> Enter New Notification Time</td>
<td><input type="time" name="noti_time"/></td>
</tr>
<tr>
<td> Enter New Description </td>
<td><textarea name="noti_desc"></textarea></td>
</tr>
<tr>
<td> Enter New Notification Date</td>
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
<td><input type="submit" name="s1" value="update" /></td>
<td><input type="reset" value="cancel" 

</form>
</table>

<?php
if(isset($_POST['s1']))
{
	$id=$_GET['notiid'];
	include "connection.php";
$name=$_POST['noti_nm'];
$noti_time=$_POST['noti_time'];
$desc=$_POST['noti_desc'];
$noti_date=$_POST['noti_date'];
$u_id=$_POST['user_id'];

$query=mysqli_query($con,"update notification set noti_name='$name',noti_time='$noti_time',noti_desc='$desc',noti_date='$noti_date' where noti_id='$id'");
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
