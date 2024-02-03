<?php
include "header.php";
include "slidebar.php";
?>
<?php
$bgid=$_GET['bgid'];
include"connection.php";
$query=mysqli_query($con,"delete from blood_group where b_g_id='$bgid'");
if($query>0)
{
	
echo '<meta http-equiv="refresh" content="0;url=show_blood_group.php"/>';
}else{
echo "Oops error occur..!!!";	
}
?>