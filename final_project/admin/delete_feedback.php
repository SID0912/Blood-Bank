<?php
include "header.php";
include "slidebar.php";
?>
<?php
$fid=$_GET['fid'];
include"connection.php";
$query=mysqli_query($con,"delete from feedback where f_id='$fid'");
if($query>0)
{
	
echo '<meta http-equiv="refresh" content="0;url=show_feedback.php"/>';
}else{
echo "Oops error occur..!!!";	
}
?>
