<?php
if(!isset($_SESSION['login']) && $_SESSION['login']!=1)
{
?>
<script>
alert("Please Login ...");</script>
<meta http-equiv="refresh" content="0;url=login.php">
<?php	
}


?>