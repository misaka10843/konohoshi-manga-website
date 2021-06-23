<?php
define('misaka', TRUE);
?>
<?php
/*******************************
 * 
 *获得上级json存储的此漫画相关信息
 *
 ******************************/

$directoryIterator = new DirectoryIterator(dirname(__FILE__));
$PD = $directoryIterator->getPathInfo()->getFilename();
$PD = $PD - 1;
$json = file_get_contents('../index.json');
$json = json_decode($json, true);
//获取相关信息
$mangatitle = $json['book'][$PD]['title'];
$author = $json['book'][$PD]['author'];
$introduce = $json['book'][$PD]['introduce'];
$updatetime = $json['book'][$PD]['updatetime'];
$lastupdate = $json['book'][$PD]['lastupdate'];



/*******************************
 * 
 * 统计观看次数
 * 
 ******************************/

$filename = 'online.txt';
//数据文件
$cookiename = 'VGOTCN_OnLineCount';
//cookie名称
$onlinetime = 600;
//在线有效时间，单位：秒 (即600等于10分钟)
$online = file($filename);
$nowtime = time();
$nowonline = array();
/*
@ 得到仍然有效的数据
*/
foreach($online as $line) {
	$row = explode('|',$line);
	$sesstime = trim($row[1]);
	if(($nowtime - $sesstime) <= $onlinetime) {
		//如果仍在有效时间内，则数据继续保存，否则被放弃不再统计
		$nowonline[$row[0]] = $sesstime;
		//获取在线列表到数组，会话ID为键名，最后通信时间为键值
	}
}
/*
@ 创建访问者通信状态
使用cookie通信
COOKIE 将在关闭浏览器时失效，但如果不关闭浏览器，此 COOKIE 将一直有效，直到程序设置的在线时间超时
*/
if(isset($_COOKIE[$cookiename])) {
	//如果有COOKIE即并非初次访问则不添加人数并更新通信时间
	$uid = $_COOKIE[$cookiename];
} else {
	//如果没有COOKIE即是初次访问
	$vid = 0;
	//初始化访问者ID
	do {
		//给用户一个新ID
		$vid++;
		$uid = 'U'.$vid;
	}
	while (array_key_exists($uid,$nowonline));
	setcookie($cookiename,$uid);
}
$nowonline[$uid] = $nowtime;
//更新现在的时间状态
/*
@ 统计现在在线人数
*/
$total_online = count($nowonline);
/*
@ 写入数据
*/
if($fp = @fopen($filename,'w')) {
	if(flock($fp,LOCK_EX)) {
		rewind($fp);
		foreach($nowonline as $fuid => $ftime) {
			$fline = $fuid.'|'.$ftime."n";
			@fputs($fp,$fline);
		}
		flock($fp,LOCK_UN);
		fclose($fp);
	}
}



/************************
 * 
 * 检测有几话
 * 
 ************************/

function manga($ff){
    $dir = './manga/'.$ff;
    $handle = opendir($dir);
    $i = 0;
    while(false !== $file=(readdir($handle))){
     if($file !== '.' && $file != '..')
     {
       $i++;
      }
    }
    closedir($handle);
   return $i;
   }
?>
<html lang="zh">
	<head>
	<?php include ( "../../header.php");?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
		<?php echo($mangatitle."-".$title); ?>
		</title>
		<link rel="shortcut icon" href="">
		<link rel="stylesheet" type="text/css" href="./test.css">
	</head>
	<body>
	<?php include ("../../body.php");?>
		<div id="wrapper">
			<div id="main" class="comic fade-in">
				<!-- ▼Main area -->
				<div id="mg_main_column" class="main_column">
					<div id="contents" data-content_id="41670" data-is_favorite="1" data-favorite_count="1964">
						<div class="primaries">
							<div class="main_visual">
								<a href="https://seiga.nicovideo.jp/comic/41670/ep1?track=ct_cover" title="第１話から読む">
									<img class='lazyload' data-src="./picture.jpg">
								</a>
							</div>
							<div class="main_title">
								<h1 style="display: inline;">
									<?php echo($mangatitle); ?>
								</h1>
								<div class="author">
									<h3>
										作者:
										<span>
										<?php echo($author); ?>
										</span>
									</h3>
								</div>
							</div>
							<div class="info_block shortcut">
								<div class="inner">
									<a class="first" href="mangaview.php?page=1">
										第一话阅读
									</a>
								</div>
								<div class="inner">
									<a class="last" href="mangaview.php?page=<?php echo(manga($ff)) ?>">
										最新话阅读
									</a>
								</div>
							</div>
						</div>
						<div class="mg_work_detail">
							<div class="work_detail_inner clearfix">
								<div class="meta_info">
								<?php echo($updatetime); ?>开始 <?php echo($lastupdate); ?>更新
									<span style="padding-left: 16px">
										[ <?php echo(manga($ff)) ?>话连载中 ]
									</span>
									<div id="ko_favorite_top">
									</div>
								</div>
								<div class="meta_info">
									<div class="tip player_type player_vertical">
										<img class='lazyload' data-src="/img/book.png" class="icon" width="10">
										滚动
									</div>
									<div class="tip content_status status_series">
										<span>
											连载
										</span>
									</div>
								</div>
								<dl class="count_info clearfix">
									<dt class="count_info__label count_info__label--view">
										观看(累计)
									</dt>
									<dd class="count_info__item count_info__item--add-border">
									<?php echo($total_online) ?>
									</dd>
								</dl>
								<div class="row">
									<div class="tip common_black">
										作品介绍
									</div>
									<div class="description_text">
									<?php echo($introduce); ?>
									</div>
								</div>
								<div style="text-align: right">
								</div>
							</div>
						</div>
						<div class="mg_episode_list info_block ">
							<div class="list_navigates">
								<h2>
									章节一览
								</h2>
							</div>
							<div id="episode_list" class="inner tile_view">
								<ul style="list-style:none">
									<script>
										for (var i = 1; i <= <?php echo(manga($ff)) ?>; i++) {
											var a = i;
											if (a <= 9) {
												a = a;
											}
											document.write('<li class="episode_item"><div class="episode" data-number="1" data-idx="0"><div class="thumb episode_thumb"><a href="mangaview.php?page=' + i + '"><img class=lazyload data-src="./img/' + i + '.jpg"style="display: inline;"></a></div><div class="description"><div class="title"><a href="mangaview.php?page=' + i + '">第' + i + '话</a></div></div></div></li>');
										}
									</script>
								</ul>
								<div style="clear:both;">
								</div>
							</div>
						</div>
						<div style="clear:both;">
						</div>
						<!-- contents -->
					</div>
				</div>
			</div>
		</div>
	</body>

</html>