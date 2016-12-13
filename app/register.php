<!DOCTYPE html>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>注册</title>


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
<script>

function gethabit(){
	for (var i=0;i<forml.habit.options.length;i++)
		form1.allselect.value+=(forml.habit.options[i].value);
		form1.submit();
}

</script>
</head>
<body>
<div id="Layer1" style="position:absolute; width:100%; height:100%; z-index:-1">    
<img src="pic.jpg" height="100%" width="100%"/>    
</div>  
<h1 align=center>用户注册</h1>
<form name="forml" id="forml" method="post" action="regcheck.php">
<p align=center>用&nbsp;户&nbsp;名：
<input type="text" class=txt size="20" maxlength="20" name="username"/>
</p>
<p align=center>电子邮件：
<input type="text" class=txt name="e_mail"/>
</p>
<p align=center>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:
<input type="text" class=txt name="password"/>
</p>
<p align=center>确认密码：
<input type="text" class=txt name="confirm"/>
</p>
<p align=center>兴趣选择：
  <select name="habit" id="habit" >
  <option value="chat.php">聊天社交</option>
  <option value="film.php">影视</option>
  <option value="game.php"> 游戏</option>
  <option value="work.php">实用工具</option>
  <option value="shopping.php">时尚购物</option></select></p>
<p align=center>
<input onClick="gethabit()" type="Submit" name="Submit" value="注册" class=but/>
</p>
</form>
</body>
</html>