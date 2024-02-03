<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important; !important;font-size:18px; color:#003; }
</style>

      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<br>
<br>
<br>
<center>
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Donation Camp</h1>
</strong>
<br />
<form method="post" name="f1">
<table border="0">
<tr>
<td> Enter Camp Name</td>
<td><input type="text" required="required" name="camp_nm" /></td>
</tr>
<tr>
<td> Enter Camp Location</td>
<td><textarea name="camp_location"></textarea></td>
</tr>
<tr>
<tr>
<td> Enter Date </td>
<td><input type="date" name="camp_date" /></td>
</tr>
<tr>
<td> Enter Start Time </td>
<td><input type="time" name="start_time" /></td>
</tr>
<tr>
<td> Enter End Time </td>
<td><input type="time" name="end_time" /></td>
</tr>
<td><input type="submit" name="s1" /></td>
<td><input type="reset" value="cancel" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['s1']))
{
include "connection.php";
$name=mysqli_real_escape_string($con,$_POST['camp_nm']);
$loc=mysqli_real_escape_string($con,$_POST['camp_location']);
$date=mysqli_real_escape_string($con,$_POST['camp_date']);
$start_time=mysqli_real_escape_string($con,$_POST['start_time']);
$end_time=mysqli_real_escape_string($con,$_POST['end_time']);
$query=mysqli_query($con,"insert into donation_camp values('','$name','$loc','$date','$start_time','$end_time')");

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
