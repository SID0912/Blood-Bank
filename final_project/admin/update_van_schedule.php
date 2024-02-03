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
<h1>Van schedule</h1>
<form method="post" name="f1">
<table border="0">
<tr>
<td> Enter New Van Date</td>
<td><input type="date" name="van_date"/><br /></td>
</tr>
<tr>
<td> Enter New Van Address</td>
<td><textarea name="van_add"></textarea><br /></td>
</tr>
<tr>
<td>Enter New Start Time</td>
<td><input type="time" name="start_time" /></td>
</tr>
<tr>
<td>Enter New End Time</td>
<td><input type="time" name="end_time" /></td>
</tr>
<tr>
<td>Select Area</td>
<td><select disabled="disabled" name="a_id">
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
<td><input type="submit" name="btn" value="update" /></td>
<td><input type="reset" value="cancel" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['btn']))
{
$id=$_GET['vanid'];
include "connection.php";
$date=$_POST['van_date'];
$add=$_POST['van_add'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];

$query=mysqli_query($con,"update van_schedule set van_date='$date',van_add='$add',start_time='$start_time',end_time='$end_time' where van_id='$id'");
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