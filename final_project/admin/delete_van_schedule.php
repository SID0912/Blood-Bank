<?php
include "header.php";
include "slidebar.php";
?>
<?php
$vanid=$_GET['vanid'];
include"connection.php";
$query=mysqli_query($con,"delete from van_schedule where van_id='$vanid'");
if($query>0)
{
	
echo '<meta http-equiv="refresh" content="0;url=show_van_schedule.php"/>';
}else{
echo "Oops error occur..!!!";	
}
?>
