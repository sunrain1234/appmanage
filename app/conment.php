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
$sql = "select * from conment ";
$result=mysqli_query( $con,$sql);
if($row = mysqli_fetch_array($result)){
    do
{
echo $row['user'];
echo $row['title'];
echo $row['lastdate'];
    
}while($row = mysqli_fetch_array($result));
}else{
    echo "<tr>";
echo "<td width='100px' style=' display:block; overflow:hidden; clear:both;  height:40px;'>";  
echo "暂无评论";
echo "</td>";
}
$con->close();
?>