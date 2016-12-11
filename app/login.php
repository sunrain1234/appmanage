<!DOCTYPE html>
<html>
<head>

<title>用户登录</title>
<style type="text/css">
body{
}
h1 {font-weight:bolder;color:#4682b4;}
p{color:#4682b4;}
input{color:#4682b4;}
a{color:#4682b4;}
</style>
</head>
<body>
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

