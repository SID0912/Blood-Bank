<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important; font-size:18px; font-color:#003; }
</style>
      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<br>
<br>
<br>
<center>
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">State</h1>
</strong>
<br />
<form method="post" name="f1">
<table border="0">
<tr>
<td> Enter State Name:</td>
<td><input type="text"required="required" name="nm"/></td>
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
$nm=$_POST['nm'];
include "connection.php";
$query=mysqli_query($con,"insert into state values('','$nm')");
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
