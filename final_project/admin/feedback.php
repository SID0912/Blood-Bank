<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important; font-size:14; }
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
<h1>Feedback</h1>
<form method="post" name="f1">
<table border="0">
<tr>
<td> enter name</td>
<td><input type="text" name="nm"/><br /></td>
</tr>
<tr>
<td> enter description</td>
<td><textarea name="desc"></textarea><br /></td>
</tr>
<tr>
<td><input type="submit" name="s1" /></td>
<td><input type="reset" value="cancle" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['s1']))
{
$nm=$_POST['nm'];
$description=$_POST['desc'];
$u_id=0;
include "connection.php";
$query=mysqli_query($con,"insert into feedback values('','$nm','$description','$u_id')");
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


</body>
</html>
