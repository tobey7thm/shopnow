<?php
require("include/connect_db.php");
$date=date("Y-m-d h:i:sa");
$sql="insert into user (username,pwd,email,date,xuehao) values('$username',MD5($password),'$email','$date','$xuehao')";
$result=connect_db($sql,"ererer");
if($result){
	echo"
	<script>
 alert( '注册成功！请您登陆' );
location.href = 'index.php'
</script>";}
else
{
	echo"
	<script>
 alert( '用户名已存在！' );
location.href = 'index.php'
</script>";}
?>