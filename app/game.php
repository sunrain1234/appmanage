<?php
header("Content-Type: text/html; charset=utf-8");
$servername = "xwwfogmxxpww.mysql.sae.sina.com.cn:10588";
$username = "root";
$password = "123456";
$dbname = "app";
    
    $con=mysqli_connect($servername,$username,$password,$dbname);
    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }
    $sql = "select * from game ";
    $result=mysqli_query( $con,$sql);
echo "<div style=\"height:24px; line-height:24px; font-weight:bold;\">";
echo "<table width='300' border='0' cellspacing='0' cellpadding='0'  align='center' style='clolor:blue; font-size:14px; font-weight:bold' >";
    while($row = mysqli_fetch_array($result))
 
{
 
 echo "<tr>";
echo "<td width='100px' style=' display:block; overflow:hidden; clear:both;  height:40px;'>";  
echo $row['name'];
echo "</td>";
echo "<td width='100px' style=' display:block; overflow:hidden; clear:both;  height:40px;'>"; 
echo "<a href=";
echo $row['download'];
echo " target='_blank'";
echo " >";
echo "点击下载";
echo "</a>";
echo "</td>";
echo "<td>";
echo $row['introduction'];
echo "</td>";
echo "</tr>";
}
echo "</table>";
echo "</div>";
$con->close();
?>