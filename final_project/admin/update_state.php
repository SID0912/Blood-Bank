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
<br>
<br>
<center>
<h1>State</h1>
<form method="post" name="f1">
<table border="0">
<tr>
<td> Enter New State Name:</td>
<td><input type="text"required="required" name="nm"/></td>
</tr>
<tr>
<td><input type="Submit" name="btn" value="update"/></td>
<td><input type="reset" value="Cancel" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['btn']))
{
$id=$_GET['sid'];
include "connection.php";
$nm=$_POST['nm'];
$query=mysqli_query($con,"update state set state_nm='$nm' where s_id='$id'");
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
