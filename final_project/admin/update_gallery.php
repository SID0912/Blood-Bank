<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important; font-size:14px;  }
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
<h1>Gallery</h1>
<form method="post" name="f1" enctype="multipart/form-data">
<table border="0">
<tr>
<td> Enter New Path</td>
<td><input type="text"required="required" name="g_path"/><br /></td>
</tr>
<tr>
<td> Enter New Description</td>
<td><textarea name="g_desc"></textarea></td>
</tr>
<tr>
<td> New photo</td>
<td><input type="file"  disabled="disabled"name="fimg"/></td>
</tr>
<tr>
<td><input type="Submit" name="s1" value="update" /></td>
<td><input type="button" value="Cancel" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['s1']))
{
	$id=$_GET['gid'];
	include"connection.php";
$path=$_POST['g_path'];
$description=$_POST['g_desc'];

$query=mysqli_query($con,"update gallery set g_path='$path',g_desc='$description' where g_id='$id'");
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
