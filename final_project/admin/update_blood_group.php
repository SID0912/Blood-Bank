<html>
<body>
<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important; font-size:14px; }
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
<h1>Blood Group</h1>
<table border="0" align="center">
<form method="post" name="f1">
<tr>
<td> Enter New Type </td>
<td><input type="text" name="b_g_type"/></td>
</tr>
<tr>
<td> Enter New Description</td>
<td><textarea name="b_g_desc"></textarea></td>
</tr>
<tr>
<td><input type="submit" name="btn" value="update"/></td>
<td><input type="reset" value="cancel" /></td>
</tr>
</form>
</table>
<?php
if(isset($_POST['btn']))
{ 
$id=$_GET['bgid'];
include "connection.php";
$b_g_type= mysqli_real_escape_string($con,$_POST['b_g_type']);
$b_g_desc= mysqli_real_escape_string($con,$_POST['b_g_desc']);
$query=mysqli_query($con,"update blood_group set b_g_type='$b_g_type', b_g_desc='$b_g_desc' where b_g_id='$id'");
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
