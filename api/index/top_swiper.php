<?php
define( "KRJbfpF9kMovM8BoBBgi", TRUE); 
include("../../config.php"); 
?>

<?php
header("Content-type:application/json");
$arr = "{\"code\":200,\"data\":[";
for($i = 0;$i <= 8;$i++)
  {
    $sql_select = "SELECT name,url,thumbnail FROM index_pickup WHERE id = \"$i\"";
    //执行SQL语句
    $ret = mysqli_query($db,$sql_select);

    $row = mysqli_fetch_array($ret);
    if($row["thumbnail"]){
    $arr = $arr."{\"id\":\"{$i}\",\"url\":\"{$row["url"]}\",\"thumbnail\":\"{$row["thumbnail"]}\"},";
    }
  }
  $arr = rtrim($arr, ",");
  $arr = $arr."]}";
  echo($arr);
mysqli_close($db);
?>