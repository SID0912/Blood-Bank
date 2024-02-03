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
<h1>Contact</h1>
  <form  method="post">
  <table border="0">
  <tr>
  <td> Your New Name:</td>
 <td> <input type="text"  name="c_nm"class="input"></td>
 </tr> 
 <tr>
 <td> <span>Your New E-mail:</span></td>
<td><input type="text" name="c_email"class="input"></td>    </tr> 
<tr>
 <td>Your New Message:</td>
 <td><textarea type="textarea" name="c_msg"></textarea>
                </td>
                </tr>
             <tr><td> <input type="submit" name="s1"  value="update"/></td>
             <td> <input type="reset"   value="cancel"/></td>
             </tr>
             </table>
                      </form>
          <?php
		  if(isset($_POST['s1']))
{
	$id=$_GET['cid'];
	include "connection.php";
$nm=$_POST['c_nm'];
$em=$_POST['c_email'];
$mssg=$_POST['c_msg'];

$query=mysqli_query($con,"update contact set c_nm='$nm',c_email='$em',c_msg='$mssg' where c_id='$id'");
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
