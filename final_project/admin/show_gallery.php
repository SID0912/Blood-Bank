<?php
include "header.php";
include "slidebar.php";
?>

<style>
tr,td{padding:10px !important; font-size:18px; color:#003;text-align:center;  }
</style>

      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<br>
<br>
<br>
<center>
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Gallery</h1>
</strong>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#CC0000">

<td>g_id</td>
<td>g_path</td>
<td>g_desc</td>
<td>photo</td>
<td>update</td>
<td>delete</td>
</tr>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from gallery");
while($row=mysqli_fetch_array($query))
{
	$gid=$row['g_id'];
	echo"<tr>";
$photo=$row['fimg'];
echo "<td>".$row['g_id']."</td>";
echo "<td>".$row['g_path']."</td>";
echo "<td>".$row['g_desc']."</td>";
echo "<td>"."<img src='$photo' height='200' width='200'>"."</td>";
echo "<td>"."<a href='update_gallery.php?gid=$gid'>UPDATE</a>"."</td>";
echo "<td>"."<a href='delete_gallery.php?gid=$gid'>DELETE</a>"."</td>";
echo "</tr>";
}
?>
