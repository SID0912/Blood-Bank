<?php
include "header.php";
include "session.php";
?>
<style>
tr,td{padding:10px !important; font-size:20px; border:1px solid white;color:#000; !important;  }
</style>
      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<center>
<h1 align="center" style="font-size:28px !important; color:white; text-align:center !important;">Notification</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#999999">
<td >notification_Title</td>
<td>notification_time</td>
<td>notification_description</td>
<td>notification_date</td>
<td>Your name</td>
</tr>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$sen=$_SESSION['login'];
$temp=mysqli_query($con,"select * from user where u_fnm LIKE '%$sen%'");
$row1=mysqli_fetch_array($temp);
$unm=$row1['u_id'];
$query=mysqli_query($con,"select * from notification where u_id='$unm'");
while($row=mysqli_fetch_array($query))
{echo"<tr>";
//echo "<td>".$row['noti_id']."</td>";
echo "<td>".$row['noti_name']."</td>";
echo "<td>".$row['noti_time']."</td>";
echo "<td>".$row['noti_desc']."</td>";
echo "<td>".$row['noti_date']."</td>";
echo "<td>".$sen."</td>";
echo "</tr>";
}

?></table>
<br>
<br>
<br>
<br>

<?php
include"footer.php";
?>
