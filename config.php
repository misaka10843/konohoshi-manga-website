<?php
if(!defined("KRJbfpF9kMovM8BoBBgi")) {
  exit("access denied");
}
/*************************************************
 * 
 * 请不要向此文件插入任何内容（也就是删除/增加行数）
 * 
 *************************************************/
//数据库信息
$dbhost = "127.0.0.1";
$username = "comic123";
$password = "comic123";
$database = "comic123";

$db=new mysqli($dbhost,$username,$password,$database);
if(mysqli_connect_error()){
    echo '数据库连接错误';
    exit;
}

//网站备用域名（防止数据库断连）
$weburl = $_SERVER['HTTP_HOST'];

/************************************************
 * 
 * 此为为了防止有人乱访问所创建的密钥(也就是define判断)，
 * 为了更好的自定义页面，所以就将密钥放到此处
 * 网站前端密钥(?):cGB5mhZv7CoCki1JnbaK
 * API/config.php通讯密钥(?):KRJbfpF9kMovM8BoBBgi
 * 
 ***********************************************/
?>