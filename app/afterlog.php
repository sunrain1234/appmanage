<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body{
   background-image:url(bgs.jpg);
   background-repeat:repeat-y;

}
<!--#menu{
  position:absolute;
  top:180px;
  left:15px;
}
ul#menu{
 margin:0pt;
}
#menu li{
 list-style-type:none;
 float:left;
 text-align:center;
 width:104px;
 margin-right:3px;
 font-size:1.05em
}
#menu li>a,#menu li>strong{
width:auto;
}
#menu a.actual{
background:transparent url(bgs.jpg) no-pepeat;
color:grey;
}
#menu a:hover{
 color:pink;
}-->
h1 {font-weight:bolder;color:#4682b4;}

a{
   background:transparent url(bgs.jpg) none-repeat;
   overflow:hidden;
   display:block;
   height:28px;
   padding-top:3px;
   text-decoration:none;
   twidth:100%;
   font-size:1em;
   font-family:Verdana,"Geneva CE",lucida,snas-serif;
   color:#46822b4;
}
*{list-style:none;margin:0;padding:0;overflow:hidden} 
.tab1{width:801px;border-top:#A8C29F solid 1px;border-bottom:#A8C29F solid 1px;margin:50px 200px;}
.menu{width:800px;background:#eee;height:28px;border-right:#A8C29F solid 1px;border-bottom:#A8C29F solid 1px;} 
li{float:left;width:254px;text-align:center;line-height:28px;height:28px;cursor:pointer;border-left:#A8C29F solid 1px;color:#666;font-size:14px;overflow:hidden} 
.menudiv{width:799px;height:400px;border-left:#A8C29F solid 1px;border-right:#A8C29F solid 1px;border-top:0;background:#fefefe} 
.menudiv div{padding:15px;line-height:28px;} 
.off{background:#E0E2EB;color:#336699;font-weight:bold} 

</style>
<script>

	   document.write("<h1>app管理查询系统</h1>");
        document.write("<h1>你好！欢迎使用</h1>");
       
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("需要输入搜索内容");
        return false;
    }
}
function setTab(name,cursel){ 
cursel_0=cursel; 
for(var i=1; i<=links_len; i++){ 
var menu = document.getElementById(name+i); 
var menudiv = document.getElementById("con_"+name+"_"+i); 
if(i==cursel){ 
menu.className="off"; 
menudiv.style.display="block"; 
} 
else{ 
menu.className=""; 
menudiv.style.display="none"; 
} 
} 
} 
function Next(){ 
cursel_0++; 
if (cursel_0>links_len)cursel_0=1 
setTab(name_0,cursel_0); 
} 
var name_0='one'; 
var cursel_0=1; 
var links_len,iIntervalId; 
onload=function(){ 
var links = document.getElementById("tab1").getElementsByTagName('li') 
links_len=links.length; 
for(var i=0; i<links_len; i++){ 
links[i].onmouseover=function(){ 
clearInterval(iIntervalId); 
} 
} 
document.getElementById("con_"+name_0+"_"+links_len).parentNode.onmouseover=function(){ 
clearInterval(iIntervalId); 
} 
setTab(name_0,cursel_0); 

}

</script>
<body >
<form name="myForm" action="search.php"
onsubmit="return validateForm()" method="post">
<div>
<p>

<input type="submit" value=退出>
</p>
<p align=center>
搜索内容<input type="text" name="fname">
	<input type="submit" value="搜索"class=button>
</p>
</div>
<div class="tab1" id="tab1"> 
<div class="menu"> 
<ul> 
<li id="one1" onclick="setTab('one',1)">软件分类</li> 
<li id="one2" onclick="setTab('one',2)">兴趣推荐</li> 
<li id="one3" onclick="setTab('one',3)">个人中心</li> 
</ul> 
</div> 
<div class="menudiv"> 
  <div id="con_one_1">
    <iframe src=cl.html scrolling="auto" name="c" align=center border=0 frameborder="0" width=100% height=100%></iframe>
  </div> 
  <div id="con_one_2" style="display:none;">
    <iframe src=intrest.html scrolling="auto" name="c" align=center border=0 frameborder="0" width=100% height=100%></iframe>
  </div> 
<div id="con_one_3" style="display:none;"><h4 style="color:red">标签3-内容</h4></div> 
 
</div> 
</div> 
</form>
</body>
</html>

