<?php
if(isset($_POST["submit"]) && $_POST["submit"] == "����"){
    $name=$_POST["name"];
    $con=mysqli_connect("localhost","root","1234","app");
    if (mysqli_connect_errno())
    {
        echo "����ʧ��: " . mysqli_connect_error();
    }
    $sql = "select * from game where name like '%" .$name. "%'";
    $result=mysqli_query( $con,$sql);
    while($row = mysqli_fetch_array($result))
 
{
 
echo "<div style=\"height:24px; line-height:24px; font-weight:bold;\">"; //�Ű����
 
echo $row['name'] . "<br/>";

echo "</div>"; //�Ű����
 
}
$con->close();
    
}
else
{
    echo "<script>alert('�ύδ�ɹ���'); history.go(-1);</script>";
}

?>

