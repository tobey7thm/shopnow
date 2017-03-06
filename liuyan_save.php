<?php
session_start();
 require("./include/connect_db.php");

if($_SESSION['user_name']=="")
{
	echo"<script>alert('请先登录,在发布留言');history.back(-1);</script>";
	exit;
}
$owner=$_SESSION['user_name'];
$nr=strip_tags($comments);
$sql="insert into liuyan (title,content,goodid,uname) values ('$title','$nr','$goodid','$_SESSION[user_name]')";

$result=Connect_db($sql);
//echo $url;
//exit;
if($result)
{
	echo"<script>alert('发布成功!');location.href='$url';</script>";
}


?>