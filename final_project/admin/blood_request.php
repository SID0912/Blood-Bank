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
<center>

<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Blood Request</h1>
</strong>
<form method="post" name="f1">
<table border="0">
<tr>
<td> Enter Date</td>
<td><input type="date" name="date"/></td>
</tr>
<tr>
<td> Enter Description</td>
<td><textarea name="desc"></textarea></td>
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
$date=$_POST['date'];
$description=$_POST['desc'];
$u_id=0;
include "connection.php";
$query=mysqli_query($con,"insert into blood_request values('','$date','$description','$u_id')");


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