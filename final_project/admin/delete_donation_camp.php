<?php
$campid=$_GET['campid'];
include"connection.php";
$query=mysqli_query($con,"delete from donation_camp where camp_id='$campid'") or die(mysqli_error($con));
if($query>0)
{
echo '<meta http-equiv="refresh" content="0;url=show_donation_camp.php"/>';
}else{
echo "Oops error occur..!!!";	
}
?>