<?php
header("Content-Type: text/html; charset=utf-8");
$servername="xwwfogmxxpww.mysql.sae.sina.com.cn:10588";
$username="root";
$password="123456";
$dbname="app";
$con=mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }

if(isset($_POST["submit"]) && $_POST["submit"] == "提交意见"){
$sql="insert into conment(user,title,lastdate) values ('$_POST[userName]','$_POST[title]',now())";
$result=$con->query($sql);
if($result){
echo"<script>alert('成功！');</script>";
}
}

$con->close();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type='text/CSS'>
 body{
 font-family:'楷体';
 font-size:16px;
 font-style:normal;
 font-color:blue;
}
</style>
</head>
<body>
 <SCRIPT language=javascript>  
function CheckPost()  
{  
    if (myform.userName.value=='')  
    {  
        alert('请填写用户名');  
        myform.user.focus();  
        return false;  
    }  
    if (myform.content.value=='')  
    {  
        alert('必须要填写留言内容');  
        myform.content.focus();  
        return false;  
    }  
      
}  
</SCRIPT>  
  
<form action='conment1.php'  method='post' name = 'myform' onsubmit='return CheckPost();'>  
    用互名:<input type='text' size='10' name='userName' /><br/>    
    内容:<textarea  name='title' cols='60' rows='9' ></textarea><br/>  
    <input type='submit' name='submit' value='提交意见' />  
</form>   
</body>
</html>
<?php 
header("Content-Type: text/html; charset=utf-8");
$servername="localhost";
$username="root";
$password="1234";
$dbname="app";
$con=mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno())
{
    echo "连接失败:" . mysqli_connect_error();
}
$sql = 'select * from conment ';
$result=mysqli_query( $con,$sql);
if($row = mysqli_fetch_array($result)){
    do
    {
        echo "<div>";
        echo $row['user'];
        echo ":";
        echo $row['title'];
        echo $row['lastdate'];
        echo "</div>";
    }while($row = mysqli_fetch_array($result));
}else{
    echo "<tr>";
    echo "<td width='100px' style=' display:block; overflow:hidden; clear:both;  height:40px;'>";
    echo '暂无评论';
    echo '</td>';
}
?>

