<?php
if(isset($_POST["submit"]) && $_POST["submit"] == "搜索"){
    $name=$_POST["name"];
    $con=mysqli_connect("localhost","root","1234","app");
    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }
    $sql = "select * from game where name like '%" .$name. "%'";
    $result=mysqli_query( $con,$sql);
    while($row = mysqli_fetch_array($result))
 
{
 
echo "<div style=\"height:24px; line-height:24px; font-weight:bold;\">"; //排版代码
 
echo $row['name'] . "<br/>";

echo "</div>"; //排版代码
 
}
$con->close();
    
}
else
{
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}

?>

