<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important; font-size:18px; color:#003; }
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

<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">City</h1>
</strong>
<form method="post" name="f1">
<table border="0" align="center"> 
<tr>
<td> Enter City Name</td>
<td><input type="text" name="city_nm"/></td>
</tr>
<tr><td>
Select State</td><td>
<select name="s_id">
<option>--Select State--</option>
<?php
include "connection.php";
$query=mysqli_query($con,"select * from state");
while($row=mysqli_fetch_array($query))
{
	$sid=$row['s_id'];
	$nm=$row['state_nm'];
	echo "<option value='$sid'>".$nm."</option>";
}

?>
</select></td></tr>
<tr>
<td><input type="submit" name="s1" /><br /></td>
<td><input type="reset" value="cancel" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['s1']))
{
$nm=$_POST['city_nm'];
$s_id=$_POST['s_id'];
include "connection.php";
$query=mysqli_query($con,"insert into city values('','$nm','$s_id')");
if($query>0)
{
echo "Successfully Added";
}
else
{
echo "Try again...";	
}
}
?>

</body>
</html>
