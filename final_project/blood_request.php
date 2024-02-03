<?php
include "header.php";
?>
<style>
tr,td{padding:10px !important; font-size:20px;solid;color:#000;!important; color:#000;}  
</style>
      <section id="main-content">
          <section class="wrapper">
<br>
<center>
<h1 align="center" style="font-size:28px !important; color:#FFF; text-align:center !important;">blood request</h1>
<br>
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
	$bgdesc=$row['b_g_desc'];
	echo "<option value='$bgid'>".$bgtype."</option>";
}
?></select>
</td>
</tr>
<tr>
<td> Enter Hospital Name</td>
<td><input type="text" name="req_hosp_name"/></td>
</tr>
<tr>
<td> Enter Hospital Address</td>
<td><textarea name="req_hosp_add"></textarea></td>
</tr>
<tr>
<td> Enter Hospital Phone number</td>
<td><input type="text" name="req_hosp_num"/></td>
</tr>
<tr>
<td> Enter Blood Required Date</td>
<td><input type="date" name="req_date"/></td>
</tr>
<tr>
<td> Enter Message</td>
<td><textarea name="req_msg"></textarea></td>
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
$req_name=$_POST['req_hosp_name'];
$req_add=$_POST['req_hosp_add'];
$req_num=$_POST['req_hosp_num'];
$req_date=$_POST['req_date'];
$req_msg=$_POST['req_msg'];
$u_id=$_SESSION['login'];
include "connection.php";
$query=mysqli_query($con,"insert into blood_request values('','$type','$req_name','$req_add','$req_num','$req_date','$req_msg','$u_id','Pending')");
if($query>0)
{
echo "Successfully Send";
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