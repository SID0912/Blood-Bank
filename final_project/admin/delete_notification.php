<?php
include "header.php";
include "slidebar.php";
?>
<?php
$notiid=$_GET['notiid'];
include"connection.php";
$query=mysqli_query($con,"delete from notification where noti_id='$notiid'");
if($query>0)
{
	
echo '<meta http-equiv="refresh" content="0;url=show_notification.php"/>';
}else{
echo "Oops error occur..!!!";	
}
?>
