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
	$sql="insert into qiugou (title,content,zuozhe,addtime,address,tel,qq,email) values('$title','$nr','$_SESSION[user_name]','$addtime','$address','$tel','$qq','$email')";

$result=Connect_db($sql);
if($result)
{
	echo"<script>alert('发布成功!');location.href='qiugou_list.php'</script>";
}


?>