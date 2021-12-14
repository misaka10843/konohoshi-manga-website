<?php
define( "KRJbfpF9kMovM8BoBBgi", TRUE); 
include("../../config.php"); 
?>

<?php
$categoryID = $_GET["id"];
header("Content-type:application/json");
$arr = "{\"code\":200,\"data\":[";
for($i = 0;$i <= 19;$i++)
  {
    $sql_select = "SELECT id,name,url,thumbnail,survey FROM comic_book_info WHERE category={$categoryID} order by update_date desc limit {$i},19";
    //执行SQL语句
    $ret = mysqli_query($db,$sql_select);
    $row = mysqli_fetch_array($ret);
    if($row){
    $arr = $arr."{\"id\":\"{$row["id"]}\",\"url\":\"{$row["url"]}\",\"thumbnail\":\"{$row["thumbnail"]}\",\"name\":\"{$row["name"]}\",\"survey\":\"{$row["survey"]}\"},";
    }else{
      break;
    }
  }
  $arr = rtrim($arr, ",");
  $arr = $arr."]}";
  echo($arr);
mysqli_close($db);
?>