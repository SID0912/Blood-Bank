<?php
include "header.php";
include "slidebar.php";
?>
<?php
$sid=$_GET['sid'];
include"connection.php";
$query=mysqli_query($con,"delete from state where s_id='$sid'");
if($query>0)
{
echo '<meta http-equiv="refresh" content="0;url=show_state.php"/>';
}else{
echo "Oops error occur..!!!";	
}
?>