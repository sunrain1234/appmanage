<!DOCTYPE html>
<html>
<head>

<title>ע��</title>


<style type="text/css">
body{
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
<h1 align=center>�û�ע��</h1>
<form name="forml" id="forml" method="post" action="regcheck.php">
<p align=center>��&nbsp;��&nbsp;����
<input type="text" class=txt size="20" maxlength="20" name="username"/>
</p>
<p align=center>�����ʼ���
<input type="text" class=txt name="e_mail"/>
</p>
<p align=center>��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��:
<input type="text" class=txt name="password"/>
</p>
<p align=center>ȷ�����룺
<input type="text" class=txt name="confirm"/>
</p>
<p align=center>��Ȥѡ��
  <select name="habit" id="habit" >
  <option value="chat.php">�����罻</option>
  <option value="film.php">Ӱ��</option>
  <option value="game.php"> ��Ϸ</option>
  <option value="work.php">ʵ�ù���</option>
  <option value="shopping.php">ʱ�й���</option></select></p>
<p align=center>
<input onClick="gethabit()" type="Submit" name="Submit" value="ע��" class=but/>
</p>
</form>
</body>
</html>