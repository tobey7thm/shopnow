<?php
require("./include/connect_db.php");
$sql="update goods set ud=0 where id='$id'";
$result=Connect_db($sql);
echo"<script>alert('上架成功！');history.back(-1);</script>";
?>