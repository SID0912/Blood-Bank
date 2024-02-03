<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important;  font-size:18px; color:#003; }
</style>
      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<br>
<br>
<br>
<center>
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Area</h1>
</strong>
<br />

<form method="post" name="f1">
<table border="0">
<tr>
<td> Enter Area Name</td>
<td><input type="text" required="required" name="a_nm"/></td>
</tr>
<tr>
<td> Enter Area Code</td>
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
<td><input type="submit" name="s1" /></td>
<td><input type="reset" value="cancel" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['s1']))
{
$nm=$_POST['a_nm'];
$code=$_POST['a_code'];
$city_id=$_POST['city_id'];
include "connection.php";
$query=mysqli_query($con,"insert into 
area values('','$nm','$code','$city_id')");
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
