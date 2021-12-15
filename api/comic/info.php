<?php
define( "KRJbfpF9kMovM8BoBBgi", TRUE); 
include("../../config.php"); 
?>

<?php
header("Content-type:application/json");

$sql_select = "SELECT name,thumbnail,introduction,author FROM comic_book_info WHERE id={$_GET["id"]}";
//执行SQL语句
$ret = mysqli_query($db,$sql_select);
$row = mysqli_fetch_array($ret);
if($row){
  $arr = "{\"code\":200,\"id\":\"{$_GET["id"]}\",\"introduction\":\"{$row["introduction"]}\",\"name\":\"{$row["name"]}\",\"thumbnail\":\"{$row["thumbnail"]}\",\"author\":\"{$row["author"]}\"}";
}else{
  $arr = "{\"code\":404,\"error\":\"sql not found\"}";
}
echo($arr);
mysqli_close($db);
?>