<?php
include "header.php";
include "slidebar.php";
?>
<?php
$aid=$_GET['aid'];
include"connection.php";
$query=mysqli_query($con,"delete from area where a_id='$aid'");
if($query>0)
{
	
echo '<meta http-equiv="refresh" content="0;url=show_area.php"/>';
}else{
echo "Oops error occur..!!!";	
}
?>