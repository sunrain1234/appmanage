<?php

   
    $con=mysqli_connect("localhost","root","1234","app");
    if (mysqli_connect_errno())
    {
        echo "����ʧ��: " . mysqli_connect_error();
    }
    $sql = "select * from game ";
    $result=mysqli_query( $con,$sql);
    while($row = mysqli_fetch_array($result))
 
{
 
echo "<div style=\"height:24px; line-height:24px; font-weight:bold;\">"; //�Ű����
 
echo $row['id'] . "<br/>";
echo $row['name'] . "<br/>";
echo $row['introduction'] . "<br/>";
echo $row['download'] . "<br/>";
echo $row['goal'] . "<br/>";

echo "</div>"; //�Ű����
 
}
$con->close();
?>