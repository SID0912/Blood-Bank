<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" name="f1">
<table border="0">
<tr>
<td> enter name</td>
<td><input type="text" required="required"name="nm"/><br /></td>
</tr>
<tr>
<td> enter location</td>
<td><input type="text" name="loc"/><br /></td>
</tr>
<tr>
<td><input type="submit" name="s1" /></td>
<td><input type="reset" value="cancel" /></td>
</tr>

</table>
</form>
<?php
if(isset($_POST['s1']))
{
$nm=$_POST['nm'];
$location=$_POST['loc'];
include "connection.php";
$query=mysqli_query($con,"insert into location values('','$nm','$location')");


if($query>0)
{
echo "Successfully Added";
}
else
{
echo "Try again...";
}
}
?>
</body>
</html>
