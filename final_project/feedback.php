<?php 
include "header.php";
?>

<style>
tr,td{padding:10px !important; font-size:20px;border:0px solid white;color:#000; !important;  }
</style>

      <section id="main-content">
          <section class="wrapper">
<br>
<center>
<h1 align="center" style="font-size:28px !important; color:#FFF; text-align:center !important;">Feedback</h1>
<br>
<br>
<br>
<br>
<form method="post" name="f1">
<table border="0">
<tr>
<td> Select feedback</td>
<td><select name="nm">
<option>--select--</option>
<option> suggeestion</option>
<option> Appreciation</option>
</select>
</td>
</tr>
<tr>
<td> Enter Description</td>
<td><textarea name="desc"></textarea><br /></td>
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
$description=$_POST['desc'];
$u_id=$_SESSION['login'];
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
<?php
include "footer.php";
?>