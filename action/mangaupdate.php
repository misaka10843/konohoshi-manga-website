<?php
//  if( $_SERVER['HTTP_REFERER'] == "" )
//  {
//     print_r("error!");
//     exit;
//  }
//变量设置

//数据库中查询最后一个漫画的id
include("./database.php");
$sql_select = "SELECT * FROM manga_main ORDER BY id DESC LIMIT 0,1;";
$ret = mysqli_query($conn,$sql_select);
$row = mysqli_fetch_array($ret);
echo("数据库最后一个漫画id:".$row["id"]."<br>");

//json匹配数据库最后一个id
$json = file_get_contents('../manga/manga.json');
$json = json_decode($json ,true);
$mangaid = end($json);
$mangaid = $mangaid["id"];
if ($row["id"] < $mangaid){
  $mangaid = $mangaid - $row["id"];
  for($x = 0;$x < $mangaid;$x++){
    $sql_select="SELECT id FROM manga_main WHERE id = '$x'";
    //执行SQL语句
    $ret = mysqli_query($conn,$sql_select);
    $row = mysqli_fetch_array($ret);
    $mangatitle = $json[$x]["title"];
    $chapter = $json[$x]["page"];
    //判断用户名是否已存在
    if($x < $row['id']) {
        //用户名已存在，显示提示信息
        print_r($mangatitle."已存在<br>");
    } else {
        print_r("现在准备插入：".$mangatitle."<br>");
        //用户名不存在，插入数据
        //准备SQL语句
        $sql_insert = "INSERT INTO manga_main(title,page) VALUES('$mangatitle','$chapter')";
        //执行SQL语句
        mysqli_query($conn,$sql_insert);
        print_r($mangatitle."已插入<br>");
    }
  }
  print_r("已完成指令");
}
for($x = 0;$x < $mangaid;$x++){
  $mangachaptertitle = $json[$x]["title"];
  $json = file_get_contents("../manga/{$mangatitle}/chapter.json");
  $json = json_decode($json ,true);
  $lastjson = end($json);
  $chapterid = $lastjson["id"];
  $sql_select="SELECT id FROM manga_chapter WHERE id = '$x'";
  $ret = mysqli_query($conn,$sql_select);
  $row = mysqli_fetch_array($ret);
  $chapter = $row["id"];
  if($chapter < $chapterid){
    $manga_chapterid = $json[$x]["id"];
    $manga_mainid = $x;
    $mangaurl = $json[$x]["url"];
    $page = $json[$x]["page"];
    $sql_insert = "INSERT INTO manga_chapter(title,page,id,mangaid,url,	last_chapter_id) VALUES('$mangachaptertitle','$page','$manga_chapterid','$manga_mainid','$mangaurl','$chapter')";
  }
}
////判断是否id为无效
//if (!empty($mangatitle)){
//  $isid = 0;
//  //获取具体内容
//  $json = file_get_contents("../manga/{$mangatitle}/chapter.json");
//  $json = json_decode($json ,true);
//  $chapterpage = end($json);
//  for ($x = 0;$x <$chapterpage["id"];$x++ ){
//    $page = $json[$x]["page"];
//    $chaptertitle = $json[$x]["title"];
//    $chapterurl = $json[$x]["url"];
//  }
//}else{
//  error_log(print_r("ID无效"));
//}

?>