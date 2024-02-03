<?php
$bdid=$_GET['bdid'];
include"connection.php";
$query=mysqli_query($con,"delete from blood_donor where don_id='$bdid'")or die(mysqli_error($con));
if($query>0)
{
echo '<meta http-equiv="refresh" content="0;url=show_blood_donor.php"/>';
}else{
echo "Oops error occur..!!!";	
}
?>