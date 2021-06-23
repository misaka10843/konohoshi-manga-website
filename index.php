<?php 
define('misaka', TRUE);

$num = 1;

function manga($ff){
    $dir = './manga/'.$ff;
    $handle = opendir($dir);
    $i = 0;
    while(false !== $file=(readdir($handle))){
     if($file !== '.' && $file != '..' && $file != 'index.json')
     {
       $i++;
      }
    }
    closedir($handle);
   return $i;
   }
   $manganum = manga($ff);

$json = file_get_contents('manga/index.json');
$json = json_decode($json, true);
?>
<?php include ("action/useraction.php");?>
<script>
	function onload(){
	Notiflix.Notify.Warning('这个系统还是测试版，还请等待misaka的项目推送qwq');
	Notiflix.Notify.Success('初始化完成');
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang='zh'>
	<head>
	<meta charset=utf-8>
	<?php include ("header.php");?>
	<title>主页-<?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="./css/page/index-php.css">
	<link rel="shortcut icon" href="">
	</head>
	<body class="seigatop seiga" onload="onload()">
	<?php include ("body.php");?>
		<div id=wrapper class=manga-card>
			<div id=header_block>
			</div>
			<div id=main class=cfix>
				<div id=content class=cfix>
					<div id=main_area_l class=main_content>
						<div id=top_popular_illust_box class="itemlist_area cfix">
							<div class=popular_illust_block>
								<div class=popular_illust_block__title>
									<h2>
										人气漫画
									</h2>
								</div>
								<div class=popular_illust_block__itemlist>
								<?php 
								for ($x=1; $x <= $manganum; $x = $x+1){
									$a = $x;
									$b = $a - 1;
									if ($a <= 9){
										$a = $a;
									}
									$title = $json['book'][$b]['title'];
									echo ("
									<div class='popular_illust_block__item manga-card'>
									<a href='/manga/{$a}'>
										<div class='popular_illust_block__item__thumbnail'>
											<div class=center_img>
												<span class=center_img_inner>
													<img class=lazyload alt data-src='/manga/{$a}/top.jpg' style=display:inline>
													<span class=center_img_spring>
														&nbsp;
													</span>
												</span>
											</div>
										</div>
										<div class=popular_illust_block__item__info>
											<span class=popular_illust_block__item__info--title>
												{$title}
											</span>
										</div>
									</a>
								</div>
								");
								}
								?>
								</div>
							</div>
						</div>
						<div id=top_event_box class=content_area>
						</div>
					</div>
					<div id=main_area_r>
						<div id=top_personalize_box--manga>
							<div class=top_personalize_block>
								<div class=top_personalize_block__header>
									关注的漫画
								</div>
								<div class=top_personalize_block__body>
									<div class=top_personalize_block__body__itemlist>
									<?php 
								if(!empty($username)){
								$conn = mysqli_connect('localhost','test123','test123','test123');
								//准备SQL语句,查询用户关注
								$sql_select="SELECT follow_id FROM user WHERE id = '$id'";
								//执行SQL语句
								$ret = mysqli_query($conn,$sql_select);
								$row = mysqli_fetch_array($ret);
								$conn->close();
								
								$row = explode(",",$row['follow_id']);
								$a = sizeof($row);
								for ($i = 0; $i < $a ; $i++){
									$b = $i;
									$b = $row[$b];
									$conn = mysqli_connect('localhost','test123','test123','test123');
									//准备SQL语句,查询用户关注
									$sql_select="SELECT * FROM manga WHERE id = '$b'";
									//执行SQL语句
									$ret = mysqli_query($conn,$sql_select);
									$row1 = mysqli_fetch_array($ret);
									$conn->close();

									echo ("
										<div class=top_personalize_block__body__item>
											<div class=top_personalize_block__body__item--thumbnail>
												<a href='./manga/{$row1['id']}'>
													<img class=lazyload data-src='/manga/{$row1['id']}/top.jpg' style=display:inline>
												</a>
											</div>
											<div class=top_personalize_block__body__item--info>
												<div class=top_personalize_block__body__item--info-content_title>
													<a href='./manga/{$row1['id']}'>
														{$row1['title']}
													</a>
												</div>
												<div class=top_personalize_block__body__item--info-episode_title>
													最新話：
													<a href='./manga/{$row1['id']}/mangaview.php?page={$row1['lastpage']}'>
														第{$row1['lastpage']}話
													</a>
												</div>
												<div class=top_personalize_block__body__item--info-last_updated>
													<div class=top_personalize_block__body__item--info-last_updated-inner>
														<time>
														{$row1['lastupdate']}
														</time>
													</div>
												</div>
											</div>
										</div>
									</div>
									");
								}
							}else{
								echo ("<style>
								.top_personalize_block__body__itemlist{
									background:url(./img/nologin.png) no-repeat;
									background-size:150px 200px;  
									background-position:center center;
									height: 300px;
								}
								</style>");
							}
								?>
								</div>
							</div>
						</div>
						<div class=clear>
						</div>
					</div>
					<div class="ads_sidewall left" id=pc_seiga_top_228x1024_sidewall_left
					style=width:0px;display:block;left:0px>
					</div>
					<div class="ads_sidewall right" id=pc_seiga_top_228x1024_sidewall_right
					style=width:0px;display:block;right:0px>
					</div>
				</div>
				<div id=ad_728_90 class=sf-hidden>
					<div id=ads_pc_seiga_footer class=sf-hidden>
					</div>
				</div>
			</div>
		</div>
		<div class=layui-xzxform-label>
		</div>