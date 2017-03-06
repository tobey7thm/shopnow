<?php
 require("./include/connect_db.php");
$sql="delete from qiugou where id='$id'";

$result=Connect_db($sql);
if($result)
{
	echo"<script>alert('删除成功！');location.href='qiugou_edit.php'</script>";
}

?>