
<?php
$cid=$_GET['cid'];
include"connection.php";
$query=mysqli_query($con,"delete from city where city_id='$cid'") or die(mysqli_error($con));
if($query>0)
{
echo '<meta http-equiv="refresh" content="0;url=show_city.php"/>';
}else{
echo "Oops error occur..!!!";	
}
?>