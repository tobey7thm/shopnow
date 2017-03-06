<?php
require("./include/connect_db.php");
$sql="update goods set ud=1 where id='$id'";
$result=Connect_db($sql);
echo"<script>alert('下架成功！');history.back(-1);</script>";
?>