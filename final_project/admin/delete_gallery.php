<?php
$gid=$_GET['gid'];
include"connection.php";
$query=mysqli_query($con,"delete from gallery where g_id='$gid'") or die(mysqli_error($con));
if($query>0)
{
	
echo '<meta http-equiv="refresh" content="0;url=show_gallery.php"/>';
}else{
echo "Oops error occur..!!!";	
}
?>
