<?php
session_start();
require("./include/connect_db.php");
$pwd=md5("$password");
$sql="select * from user where username='$username' and pwd='$pwd'";
$result=Connect_db($sql);
$num=mysql_num_rows($result);
$validate=$_POST["yzm"];
if($validate!=$_SESSION["authnum_session"]){
	echo"
	<script>
		alert( '验证码错误' );
		location.href = 'index.php'
	</script>";
}else{
	if($num==1)
	{
		$_SESSION['user_name']=$username;
		echo"
		<script>
			alert( '登陆成功！' );
			location.href = 'index.php'
		</script>";
	}
	else
	{
		echo " <script>
		alert( '用户名或密码错误！' );
		location.href = 'index.php'
	</script>" ;
	exit;
}
}
?>