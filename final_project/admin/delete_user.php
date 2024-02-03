<?php
$uid=$_GET['uid'];
include"connection.php";
$query=mysqli_query($con,"delete from user where u_id='$uid'")or die(mysqli_error($con));

if($query>0)
{
echo '<meta http-equiv="refresh" content="0;url=show_user.php"/>';
}else{
echo "Oops error occur..!!!";	
}
?>