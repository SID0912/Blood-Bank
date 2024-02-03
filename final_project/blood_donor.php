<?php
include "header.php";
?>
<style>
tr,td{padding:10px !important;font-size:20px; color:#000;!important;}  
</style>
      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<center>
<h1 align="center" style="font-size:28px !important; color:white; text-align:center !important;">Blood Donor</h1>
<br>
<br>
<br>
<br>
<form method="post" name="f1">
<table border="0">
<tr>
<td> Blood Type</td>
<td><select name="req_type">
<option>--Select blood type--</option>
<?php
include "connection.php";
$query=mysqli_query($con,"select * from blood_group");
while($row=mysqli_fetch_array($query))
{
	$bgid=$row['b_g_id'];
	$bgtype=$row['b_g_type'];
//	$bgdesc=$row['b_g_desc'];
	echo "<option value='$bgid'>".$bgtype."</option>";
}
?>
</td>
</tr>
<tr>
<td> Enter Name</td>
<td><input type="text" name="don_nm"/></td>
</tr>
<tr>
<td> Enter Address</td>
<td><textarea name="don_add"></textarea></td>
</tr>
<tr>
<td> Enter Phone number</td>
<td><input type="text" name="don_pnum"/></td>
</tr>
<tr>
<td> Enter Date Of Birth</td>
<td><input type="date" name="don_dob"/></td>
</tr>
<tr>
<td> Enter Weight(kg)</td>
<td><input type="text" name="don_weight"/></td>
</tr>
<tr>
<td> Enter Height</td>
<td><input type="text" name="don_height"/></td>
</tr>
<tr>
<td> Enter details</td>
<td><textarea name="don_dtl"></textarea></td>
</tr>
<tr>
<td><input type="Submit" name="s1" /></td>
<td><input type="reset" value="Cancel" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['s1']))
{
$type=$_POST['req_type'];
$nm=$_POST['don_nm'];
$add=$_POST['don_add'];
$pnum=$_POST['don_pnum'];
$dob=$_POST['don_dob'];
$weight=$_POST['don_weight'];
$height=$_POST['don_height'];
$dtl=$_POST['don_dtl'];
include "connection.php";
$query=mysqli_query($con,"insert into blood_donor values('','$type','$nm','$add','$pnum','$dob','$weight','$height','$dtl','1')");
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
<?php
include "footer.php";
?>