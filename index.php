<?php 
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

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang='zh'>
	<meta charset=utf-8>
	<title>
		
	</title>
	<style>
		div,ul,li,h2 {
			margin:0px;
			padding:0px;
			font-size:100%;
			letter-spacing:0px;
			word-wrap:break-word
		}
		body {
			margin:0
				auto;
			padding:0px;
			color:#333333;
			font-size:12px;
			line-height:120%;
			text-align:center;
		}
		img {
			border:0px;
			-ms-interpolation-mode:bicubic
		}
		.cfix:after {
			content:".";
			display:block;
			height:0px;
			clear:both;
			visibility:hidden
		}
		.cfix {
			display:block
		}
		#wrapper {
			text-align:left
		}
	</style>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="shortcut icon" href="">
	</head>
	<body class="seigatop seiga">
	<?php include ("header.php");?>
		<div id=wrapper>
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
									<div class=popular_illust_block__item>
									<a href='/manga/{$a}'>
										<div class=popular_illust_block__item__thumbnail>
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
								for ($x=1; $x <= $manganum; $x = $x+1){
									$a = $x;
									$b = $a - 1;
									if ($a <= 9){
										$a = $a;
									}
									$dir = './manga/'.$a.'/manga/';
    								$handle = opendir($dir);
    								$i = 0;
    								while(false !== $file=(readdir($handle))){
    								 if($file !== '.' && $file != '..' && $file != 'index.json')
    								 {
    								   $i++;
    								  }
    								}
    								closedir($handle);
									$title = $json['book'][$b]['title'];
									$lastupdate = $json['book'][$b]['lastupdate'];
									echo ("
										<div class=top_personalize_block__body__item>
											<div class=top_personalize_block__body__item--thumbnail>
												<a href='./manga/{$a}'>
													<img class=lazyload data-src='/manga/{$a}/top.jpg' style=display:inline>
												</a>
											</div>
											<div class=top_personalize_block__body__item--info>
												<div class=top_personalize_block__body__item--info-content_title>
													<a href='./manga/{$a}'>
														{$title}
													</a>
												</div>
												<div class=top_personalize_block__body__item--info-episode_title>
													最新話：
													<a href='./manga/{$a}/mangaview.php?page={$i}'>
														第{$i}話
													</a>
												</div>
												<div class=top_personalize_block__body__item--info-last_updated>
													<div class=top_personalize_block__body__item--info-last_updated-inner>
														<time>
														{$lastupdate}
														</time>
													</div>
												</div>
											</div>
										</div>
									</div>
									");
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