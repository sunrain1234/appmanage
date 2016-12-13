<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户登录</title>
<style type="text/css">
body{
   background-image:url(bgs.jpg);
   background-repeat:repeat-y;
   font-family:楷体;
   font-weight:bolder;
}

input{font-family:楷体;
   font-weight:bolder
   }
h1 {font-weight:bolder;color:#4682b4;}
p{color:#4682b4;}
input{color:#4682b4;}
a{color:#4682b4;}
</style>
</head>
<body>
<div id="Layer1" style="position:absolute; width:100%; height:100%; z-index:-1">    
<img src="pic.jpg" height="100%" width="100%"/>    
</div>  
<div>
<h1 align=center>用户登录</h1>
<form action="logincheck.php" method="post">
<p align=center>
姓名：<input type="text" id=name name="username"/>
</p>
<p align=center>
密码：<input type="password" id=password name="password"/>
</p>

<p align=center>

<input type="submit" name="submit" value="登陆" />

<a href="register.php">注册</a>

</p>
</form>
</div>
</body>
</html>

