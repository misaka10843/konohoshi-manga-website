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
$lastupdate = $json['book'][$PD]['lastupdate'];



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
 * 获得漫画张数，看到第几章，上下章，判断是否为头/末章，进行逻辑输出
 * 
*************************/
$ff = $_GET["page"];
$fff = 'manga';
$page = $ff;
if ($page == 'home'){
echo('<script>window.location.href="./"</script>');
}else{
if ($page - 1 <= 0){
	$pageupnum = 'home';
    $pageup = '没有上一话啦!<br>点击这里返回首页qwq';
}else{
    $num = $ff - 1;
	$pageupnum = $num;
    $pageup = "第{$num}话";
}
if ($page >= manga($fff)){
	$pagedownnum = 'home';
   $pagedown = '没有下一话啦!<br>点击这里返回首页qwq';
}else{
   $num = $ff + 1;
   $pagedownnum = $num;
   $pagedown = "第{$num}话";
}
}

//获得漫画章节数量和每章多少张图片

function mangajpg($ff){
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
function manga($fff){
 $dir = './'.$fff;
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

			<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
			<html lang="zh">
				<head>
				<?php include ( "../../header.php");?>
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
					<title>
					</title>
					<link rel="shortcut icon" href="https://seiga.nicovideo.jp/favicon.ico">
					<link rel="stylesheet" type="text/css" href="./test.css">
					<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js">
					</script>
					<script>
						window.onload = function() {
							var Height = $('#page_contents').height();
							$("#comment_slider").css({
								height: Height + 'px'
							});
						}
						function getQueryVariable(variable) {
							var query = window.location.search.substring(1);
							var vars = query.split("&");
							for (var i = 0; i < vars.length; i++) {
								var pair = vars[i].split("=");
								if (pair[0] == variable) {
									return pair[1];
								}
							}
							return (false);
						}
						var pagenum = parseInt(getQueryVariable('page'));
						var pageup = pagenum - 1;
						if (pageup <= 0) {
							pageup = 'null'
						}
						var pagedown = pagenum + 1;
					</script>
				</head>
				<body>
					<?php include ( "../../body.php");?>
						<div id="wrapper">
							<div id="content" class="watch">
								<div id="main">
									<article id="detail" class="vertical">
										<div class="detail_inner">
											<!-- watch_head_bar -->
											<div class="private_messages">
											</div>
											<div class="watch_head_bar" id="full_watch_head_bar">
												<div class="inner cfix">
													<div class="inner_content">
														<ul class="other_info">
															<li class="date">
																<span class="created">
																	最后一次更新:
																	<?php echo($lastupdate) ?>
																</span>
															</li>
															<li class="counts">
																<ul class="manga_count">
																	<li class="view">
																		<span class="icon_view_big">
																		</span>
																		<span class="txt">
																			阅读
																		</span>
																		<span class="count_value" id="view_count">
																			<?php echo($total_online) ?>
																		</span>
																	</li>
																</ul>
															</li>
														</ul>
														<div class="title">
															<h1>
																<span class="manga_title">
																	<a href="./">
																		<?php echo($mangatitle) ?>
																	</a>
																</span>
																<span class="episode_title">
																	第
																	<?php echo($page) ?>
																		话
																</span>
															</h1>
														</div>
													</div>
													<div class="inner_content">
														<!-- 作品情報 -->
														<div class="manga_info">
															<div class="manga_info_title">
																<h2>
																	作品情报
																</h2>
																<p class="comic_link">
																	<a href="./">
																		作品页面
																		<span class="icon_arrow_right">
																		</span>
																	</a>
																</p>
															</div>
															<dl>
																<dt class="thum">
																	<div class="center_img  center_img_size_80">
																		<a class="center_img_inner " href="./">
																			<img class='lazyload' data-src="./top.jpg" alt="">
																			<span class="center_img class='lazyload'_spring">
																				&nbsp;
																			</span>
																		</a>
																	</div>
																</dt>
																<dd class="manga_title">
																	<a href="./">
																		<?php echo($mangatitle) ?>
																	</a>
																</dd>
																<dd class="user_name">
																	<span class="caption">
																		作者
																	</span>
																	<strong>
																		<a href="">
																			<span class="author_name">
																				<?php echo($author) ?>
																			</span>
																		</a>
															</dl>
														</div>
													</div>
												</div>
											</div>
											<div class="episode_control_bar" id="full_episode_control_bar">
												<div class="episode_control_bar_inner">
													<div class="episode_navigator before">
														<p class="prev">
															<a href="?page=<?php echo($pageupnum) ?>">
																<span class="icon_arrow_left">
																</span>
																上一话
															</a>
														</p>
														<p class="next">
															<a href="?page=<?php echo($pagedownnum) ?>">
																后一话
																<span class="icon_arrow_right">
																</span>
															</a>
														</p>
													</div>
												</div>
											</div>
											<div class="player vertical">
												<div id="ko_content_list" class="content_list">
													<div class="pages">
														<ul id="page_contents" class="image_container isolated">
															<script>																
															for (var i = 1; i <= <?php echo(mangajpg($ff)) ?>; i++) {
																	var a = i;
																	if (a <= 9) {
																		a = a;
																	}
																	document.write("<li class='page'><div class='note' style='width: 650px; height:1000px; position: relative;'><img class='lazyload' id='manga" + i + "' data-src='./manga/" + <?php echo($page) ?> + "/" + a + ".jpg' style='user-select: none; display: block;'' width='650' height='1000'/></biv></li>");
																}
																var name = pagenum;

																//>>>>>>>>>>>>>>>>>加载漫（ben）画（zi）<<<<<<<<<<<<<<<<<<

															</script>
														</ul>
													</div>
													<div id="comment_slider" class="slider ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all">
													</div>
													<div class="after_player">
														<div class="episode_navigation">
															<div class="episodes">
																<a class="prev" href="?page=<?php echo($pageupnum) ?>">
																	<span class="prev_text">
																		上一话
																	</span>
																	<span class="title">
																		<?php echo($pageup) ?>
																	</span>
																</a>
																<a class="next" href="?page=<?php echo($pagedownnum) ?>">
																	<div class="info_box">
																		<span class="next_text">
																			下一话
																		</span>
																		<span class="title">
																			<?php echo($pagedown) ?>
																		</span>
																	</div>
																</a>
															</div>
														</div>
														<div class="social_block vertical">
															<div class="share">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
							</div>
				</body>
			
			</html>