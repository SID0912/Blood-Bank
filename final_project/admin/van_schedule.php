<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important;  font-size:18px; color:#003;}
</style>

      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<br>
<br>
<br>
<center>

<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Van schedule</h1>
</strong>
<br />
<form method="post" name="f1">
<table border="0">
<tr>
<td> Enter Van Date</td>
<td><input type="date" name="van_date"/><br /></td>
</tr>
<tr>
<td> Enter Van Address</td>
<td><textarea name="van_add"></textarea><br /></td>
</tr>
<tr>
<td>Enter Start Time</td>
<td><input type="time" name="start_time" /></td>
</tr>
<tr>
<td>Enter End Time</td>
<td><input type="time" name="end_time" /></td>
</tr>
<tr>
<td>Select Area</td>
<td><select name="a_id">
<option>--Select Area--</option>
<?php
include "connection.php";
$query=mysqli_query($con,"select * from area");
while($row=mysqli_fetch_array($query))
{
	$aid=$row['a_id'];
	$nm=$row['a_nm'];
	$code=$row['a_code'];
	echo "<option value='$aid'>".$nm."</option>";
}
?>
</select>
</td>
</tr>
<tr>
<td><input type="submit" name="s1" /></td>
<td><input type="reset" value="cancel" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['s1']))
{
$date=$_POST['van_date'];
$add=$_POST['van_add'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];
$a_id=$_POST['a_id'];
include "connection.php";
$query=mysqli_query($con,"insert into van_schedule values('','$date','$add','$start_time','$end_time','$a_id')");
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
