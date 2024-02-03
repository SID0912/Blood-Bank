<html>
<body>
<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important;  font-size:14px; }
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
<h1>Area</h1>
<form method="post" name="f1">
<table border="0">
<tr>
<td> Enter New Area Name</td>
<td><input type="text" required="required" name="a_nm"/></td>
</tr>
<tr>
<td> Enter  New Area Code</td>
<td><input type="text" name="a_code"/></td>
</tr>
<tr>
<td>Select City</td><td>
<select name="city_id">
<option>--Select City--</option>
<?php
include "connection.php";
$query=mysqli_query($con,"select * from city");
while($row=mysqli_fetch_array($query))
{
	$cid=$row['city_id'];
	$cnm=$row['city_nm'];
	echo "<option value='$cid'>".$cnm."</option>";
}
?>	
</select></td></tr>
<tr>
<td><input type="submit" name="btn" value="update"/></td>
<td><input type="reset" value="cancel" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['btn']))
{
$aid=$_GET['aid'];
include "connection.php";
$nm=$_POST['a_nm'];
$code=$_POST['a_code'];
$city_id=$_POST['city_id'];
$query=mysqli_query($con,"update area set a_nm='$nm',a_code='$code' where a_id='$aid'");
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
