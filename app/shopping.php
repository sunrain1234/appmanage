<?php


$con=mysqli_connect("localhost","root","1234","app");
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}
$sql = "select * from shopping ";
$result=mysqli_query( $con,$sql);
while($row = mysqli_fetch_array($result))

{

    echo "<div style=\"height:24px; line-height:24px; font-weight:bold;\">"; //排版代码

    echo $row['id'] . "<br/>";
    echo $row['名称'] . "<br/>";
    echo $row['简介'] . "<br/>";
    echo $row['链接'] . "<br/>";
    echo $row['评分'] . "<br/>";
    echo "</div>"; //排版代码

}
$con->close();

?>