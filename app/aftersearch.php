<?php
header("Content-Type: text/html; charset=utf-8");
$servername = "xwwfogmxxpww.mysql.sae.sina.com.cn:10588";
$username = "root";
$password = "123456";
$dbname = "app";
if(isset($_POST["submit"]) && $_POST["submit"] == "搜索"){
    $name=$_POST["name"];
    $con=mysqli_connect($servername,$username,$password,$dbname);
    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }
    $sql = "select * from total where name like '%" .$name. "%'";
    $result=mysqli_query( $con,$sql);
    
        if($row = mysqli_fetch_array($result)){
 echo "<div id='Layer1' style='position:absolute; width:100%; height:100%; z-index:-1'> <img src='pic.jpg' height='100%' width='100%'/> </div>  ";    
     

 echo "<div style=\"height:24px; line-height:24px; font-weight:bold;\">"; //排版代码
 echo "<table width='300' border='0' cellspacing='0' cellpadding='0'  align='center' style='clolor:blue; font-size:14px; font-weight:bold' >";
do{
 


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

}while($row = mysqli_fetch_array($result));
echo "</table>";
echo "</div>"; //排版代码

        }else{
            echo "搜索不到，请自行百度";
        }
   
$con->close();
    
}
else
{
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}
echo"<div><a href=index.html返回登陆前界面</a></div>";

?>

