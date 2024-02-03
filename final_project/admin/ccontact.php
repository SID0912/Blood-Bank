<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important;   }
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
<h1>contact</h1>
<form method="post" name="f1">
<table border="0">
<tr>
<td> contact name</td>
<td><input type="text"required="required" placeholder="Enter your name" name="c_nm"/></td>
</tr>
<tr>
<td> contact email </td>
<td><input type="text" placeholder="Enter email " name="c_email"/></td>
</tr>
<tr>
<td> contact message </td>
<td><textarea name="c_msg"></textarea></td>
</tr>
<tr>
<td><input type="submit" name="s1" /></td>
<td><input type="button" value="cancel" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['s1']))
{
include "connection.php";
$nm=mysqli_real_escape_string($con,$_POST['c_nm']);
$em=mysqli_real_escape_string($con,$_POST['c_email']);
$msg=mysqli_real_escape_string($con,$_POST['c_msg']);

$query=mysqli_query($con,"insert into contact value('','$nm','$em'$msg')");
if($query>0)
{
echo "Successfullly";	
}
else
{
echo "Try again...";	
}

}
?>