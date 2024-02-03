<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important; font-size:18px;color:#003;}
</style>
      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<br>
<br>
<br>
<center>
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Blood Group</h1>
</strong>
<br />
<br />
<table border="0" align="center">
<form method="post" name="f1">
<tr>
<td> Enter Type </td>
<td><input type="text" name="b_g_type"/></td>
</tr>
<tr>
<td> Enter Description</td>
<td><textarea name="b_g_desc"></textarea></td>
</tr>
<tr>
<td><input type="submit" name="s1" /></td>
<td><input type="reset" value="cancel" /></td>
</tr>
</form>
</table>
<?php
if(isset($_POST['s1']))
{ 

include "connection.php";
$b_g_type= mysqli_real_escape_string($con,$_POST['b_g_type']);
$b_g_desc= mysqli_real_escape_string($con,$_POST['b_g_desc']);
$query=mysqli_query($con,"insert into blood_group values('','$b_g_type','$b_g_desc')");
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
