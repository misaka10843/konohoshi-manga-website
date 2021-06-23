<?php
$id = 4;
$conn = mysqli_connect('localhost','test123','test123','test123');
//准备SQL语句,查询用户名
$sql_select="SELECT follow_id FROM user WHERE id = '$id'";
//执行SQL语句
$ret = mysqli_query($conn,$sql_select);
$row = mysqli_fetch_array($ret);
$conn->close();

$row = explode(",",$row['follow_id']);

print_r($row);
echo sizeof($row);
?>