<?php
session_start();
 require("./include/connect_db.php");
if($_SESSION['user_name']=="")
{
	echo"<script>alert('请先登录!');history.back(-1);</script>";
	exit;
}
$sql1="select id from user where (username =  '$_SESSION[user_name]' or xuehao = '$_SESSION[user_name]')";
	$result1=Connect_db($sql1);

	$data1=mysql_fetch_object($result1);
	$uid=$data1->id;

$sql2="insert into collect (uid,pid) values('$uid','$id')";

$result2=Connect_db($sql2);
if($result2)
{
	echo"<script>alert('收藏成功！');history.back(-1);</script>";
}
else{
	echo"<script>alert('已经收藏该商品！');history.back(-1);</script>";
}

?>