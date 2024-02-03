<?php
include "header.php";
include "slidebar.php";
?>
<style>
tr,td{padding:10px !important; text-align:center;font-size:14px}
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
<h1>Change Status</h1>
<form method="post"><br>
<br>
Select Status<select name="st">
<option>--select Status--</option>
<option>Pending</option>
<option>Approve</option>
<option>Reject</option>
</select><br>
<input type="submit" name="s1" value="Update">
<?php
if(isset($_POST['s1']))
{
$id=$_GET['id'];
$st=$_POST['st'];
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"Update blood_request set status='$st' where req_id='$id'");
if($query>0){ echo "Successfully change status";
echo '<meta http-equiv="refresh" content="0;url=show_blood_request.php"/>';
}

}?>