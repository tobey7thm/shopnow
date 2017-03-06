<?php
require("./include/connect_db.php");
$sql="delete from goods where id='$id'";
$result=Connect_db($sql);
echo"<script>alert('删除成功！');history.back(-1);</script>";
?>