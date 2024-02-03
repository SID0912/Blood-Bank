<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important; font-size:18px; color:#003;  }
</style>

      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<br>
<br>
<br>
<center>

<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Gallery</h1>
</strong>
<form method="post" name="f1" enctype="multipart/form-data">
<table border="0">
<tr>
<td> Enter Path</td>
<td><input type="text"required="required" name="g_path"/><br /></td>
</tr>
<tr>
<td> Enter Description</td>
<td><textarea name="g_desc"></textarea><br /></td>
</tr>
<tr>
<td> photo</td>
<td><input type="file" name="fimg"/><br /></td>
</tr>
<tr>
<td><input type="Submit" name="s1" /></td>
<td><input type="button" value="Cancel" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['s1']))
{
$path=$_POST['g_path'];
$description=$_POST['g_desc'];
//$photo=$_POST['photo'];
$dir="upload/";
$fpath=$dir.$_FILES['fimg']['name'];
move_uploaded_file($_FILES['fimg']['tmp_name'],$fpath);

$con=mysqli_connect('localhost','root','','bloodbank');
mysqli_select_db($con,'bloodbank');
$query=mysqli_query($con,"insert into gallery values('','1234','$description','$fpath')");
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
