<?php
ob_start();
require("./include/connect_db.php");
$sql="update user set pwd=MD5('$pwd'),email='$email',xuehao='$xuehao' where username='$username'";
$result=Connect_db($sql);
if($result)
{
	echo"<script>alert('修改成功！');location.href='user.php'</script>";
}
?>