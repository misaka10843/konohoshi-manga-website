<?php
define( "KRJbfpF9kMovM8BoBBgi", TRUE); 
include("../../config.php"); 
?>

<?php
header("Content-type:application/json");
$arr = "{\"code\":200,\"data\":[";

for($i = 0;$i <= 9;$i++)
  {
    $sql_select = "SELECT id,name,url,comic_id FROM category limit {$i},9";
    //执行SQL语句
    $ret = mysqli_query($db,$sql_select);
    $row = mysqli_fetch_array($ret);
    if($row){
    $arr = $arr."{\"id\":\"{$row["id"]}\",\"name\":\"{$row["name"]}\",\"data\":[";
    }else{
      break;
    }
    $comicid = explode( ",",$row["comic_id"]);
    $comicidnum = count($comicid);
    for($o = 0;$o < $comicidnum;$o++)
    {
      $sql_select = "SELECT id,name,url,thumbnail,survey FROM comic_book_info WHERE id={$comicid[$o]}";
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
    $arr = $arr."]},";
  }
  $arr = rtrim($arr, ",");
  $arr = $arr."]}";
  echo($arr);
mysqli_close($db);
?>
