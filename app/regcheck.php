<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "app";

if(isset($_POST["Submit"]) && $_POST["Submit"] == "ע��")
{
    $user = $_POST["username"];
    $psw = $_POST["password"];
    $psw_confirm = $_POST["confirm"];
    $e_mail=$_POST["e_mail"];
    
    $habit=$_POST['habit'];
 
    if($user == "" || $psw == "" || $psw_confirm == "" || $e_mail=="")
    {
        echo "<script>alert('��ȷ����Ϣ�����ԣ�'); history.go(-1);</script>";
    }
    else
    {
        if($psw == $psw_confirm)
        {
            $conn = new mysqli($servername, $username, $password, $dbname);
            mysqli_query("set names'utf8'");
           
            
           
               
               
                
            $res_insert=$conn->query("INSERT INTO users (username,password,e_mail,habit) VALUES('$user','$psw','$e_mail','$habit')");
     
                if($res_insert==TRUE)
                {
                    echo "<script>alert('ע��ɹ���');location='login.php'</script>";
                }
                else
                {
                    echo "<script>alert('ϵͳ��æ�����Ժ�'); history.go(-1);</script>";
                }
            
        }
        else
        {
            echo "<script>alert('���벻һ�£�'); history.go(-1);</script>";
        }
    }
}
else
{
    echo "<script>alert('�ύδ�ɹ���'); history.go(-1);</script>";
}
?>