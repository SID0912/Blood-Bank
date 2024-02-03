<?php
include "header.php";
?>
<style>
tr{ float:left; width:32%; height:350px;}
td{padding:10px !important; font-size:18px;border:1px solid white;color:#000; !important; }
td img:hover{ width:200%; height:400px;}
td,p{ width: 40%;height: auto;}
</style>

      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<center>
<h1 align="center" style="font-size:28px !important; color:#FFF; text-align:center !important;"> Gallery </h1>
<br>
<br>
<br>
<br>
<br><table  cellpadding="15" align="center">
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from gallery");
while($row=mysqli_fetch_array($query))
{echo"<tr>";
$photo=$row['fimg'];
echo "<td>";
echo "<img src='admin/$photo' height='200' width='200'>"."<br><p style='word-break:30px;'>".$row['g_desc']."</p></td>";
echo "</tr>";
}
?></table><br>
<br>
<br>
<br clear="all">
<br>
<?php
include "footer.php";
?>