<?php
$reqid=$_GET['reqid'];
include"connection.php";
$query=mysqli_query($con,"delete from blood_request where req_id='$reqid'")or die(mysqli_error($con));
if($query>0)
{
	
echo '<meta http-equiv="refresh" content="0;url=show_blood_request.php"/>';
}else{
echo "Oops error occur..!!!";	
}
?>