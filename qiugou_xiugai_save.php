<?php
session_start();
 require("./include/connect_db.php");
if($_SESSION['user_name']=="")
{
	echo"<script>alert('请先登录！');history.back(-1);</script>";
	exit;
}

$addtime=date("Y-m-d h:i:sa");
$nr=strip_tags($comments);
	$sql="update qiugou set title = '$title',content = '$nr',zuozhe = '$_SESSION[user_name]',addtime = '$addtime',address = '$address',tel = '$tel',qq = '$qq',email = '$email' where id='$id'";

$result=Connect_db($sql);
if($result)
{
	echo"<script>alert('修改成功!');location.href='qiugou_edit.php'</script>";
}


?>