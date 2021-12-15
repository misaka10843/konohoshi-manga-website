<?php
define( "KRJbfpF9kMovM8BoBBgi", TRUE); 
include("../../config.php"); 
?>

<?php
header("Content-type:application/json");
$comicID = $_GET["id"];
$sql_select = "SELECT chapter_num FROM comic_book_info WHERE id={$comicID}";
//执行SQL语句
$ret = mysqli_query($db,$sql_select);
$row = mysqli_fetch_array($ret);
$chapter_num = $row["chapter_num"];

$arr = "{\"code\":200,\"data\":[";
for($i = 0;$i <= $chapter_num;$i++)
  {
    $a = $i + 1;
    $sql_select = "SELECT id,chapter_name,chapter_page,update_date,like_num,free,thumbnail FROM chapter WHERE comicid={$comicID} AND chapter_page={$a} order by update_date desc";
    //执行SQL语句
    $ret = mysqli_query($db,$sql_select);
    $row = mysqli_fetch_array($ret);
    if($row){
    $arr = $arr."{\"id\":\"{$row["id"]}\",\"chapter_name\":\"{$row["chapter_name"]}\",\"chapter_page\":\"{$row["chapter_page"]}\",\"update_date\":\"{$row["update_date"]}\",\"thumbnail\":\"{$row["thumbnail"]}\",\"like_num\":\"{$row["like_num"]}\",\"free\":\"{$row["free"]}\"},";
    }else{
      break;
    }
  }
  $arr = rtrim($arr, ",");
  $arr = $arr."]}";
  echo($arr);
mysqli_close($db);
?>