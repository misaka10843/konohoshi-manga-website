<?php define( 'misaka', TRUE); 
$isview = "0";
$ismain = "1";
?>
	<!DOCTYPE html>
	<html lang="zh">
		<head>
			<?php include ( "header.php");?>
		</head>
<body class="seigatop seiga">
<?php include ( "nav.php");?>
<link href="/css/index.css" rel="stylesheet">
	<div id="wrapper">
		<div id="main" class="cfix">
			<div id="content" class="cfix">
				<div id="top_pickup_area">
					<h2>
						<strong>
							PICKUP CONTENTS!
						</strong>
						<span class="line">
							|
						</span>
						运营推荐
					</h2>
					<div style="position: absolute;padding-top: 7px">
						<div id="top_pickup_list_wrapper">
							<div id="top_pickup_list_items" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 950px;">
								<ul id="top_pickup_list" class="cfix" style="margin: 0px; padding: 0px; position: relative; list-style: none; z-index: 1; ">

									<!--块开始-->
                  <?php include("./action/database.php");
              $sql_select = "SELECT title,tag,date FROM manga_main WHERE ispickup = '1'";
              $ret = mysqli_query($conn,$sql_select);
              $row = mysqli_fetch_array($ret);
              echo count($arr);
              $newsid = 1 + $row["id"];
              for($x = 1; $x < $newsid && $x < 6; $x++){
                $sql_select="SELECT title,tag,date FROM manga_news WHERE id = '$x'";
                //执行SQL语句
                $ret = mysqli_query($conn,$sql_select);
                $news = mysqli_fetch_array($ret);
                include ("./action/index/pickup.php");
               } 
                ?>
                  <!--块结束-->
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div id="main_area_l" class="main_content">
					<div id="top_news_box" class="cfix">
						<div class="top_news_block">
							<div class="top_news_block__title">
								<h2>
									通知
								</h2>
								<a href="https://blog.nicovideo.jp/seiga/">
									全部显示
								</a>
							</div>
							<ul class="top_news_block__itemlist">
                <!--块开始-->
                <?php include("./action/database.php");
              $sql_select = "SELECT * FROM manga_news ORDER BY id DESC LIMIT 0,1;";
              $ret = mysqli_query($conn,$sql_select);
              $row = mysqli_fetch_array($ret);
              $newsid = 1 + $row["id"];
              for($x = 1; $x < $newsid && $x < 6; $x++){
                $sql_select="SELECT title,tag,date FROM manga_news WHERE id = '$x'";
                //执行SQL语句
                $ret = mysqli_query($conn,$sql_select);
                $news = mysqli_fetch_array($ret);
                include ("./action/index/newnews.php");
               } 
                ?>
                <!--块结束-->
							</ul>
						</div>
					</div>
					<div id="top_popular_illust_box" class="itemlist_area cfix">
						<div class="popular_illust_block">
							<div class="popular_illust_block__title">
								<h2>
									最新作品
								</h2>
								<a href="/illust/ranking/">
									全部显示
								</a>
							</div>
              <div class="popular_illust_block__itemlist">
              <?php include("./action/database.php");
              $sql_select = "SELECT * FROM manga_main ORDER BY id DESC LIMIT 0,1;";
              $ret = mysqli_query($conn,$sql_select);
              $row = mysqli_fetch_array($ret);
              $mangaid = 1 + $row["id"];
              for($x = 1; $x < $mangaid; $x++){
                $sql_select="SELECT title,author,introduce FROM manga_main WHERE id = '$x'";
                //执行SQL语句
                $ret = mysqli_query($conn,$sql_select);
                $row = mysqli_fetch_array($ret);
                include ( "./action/index/newmanga.php");
               } 
                ?>
                <!--块结束-->
							</div>
						</div>
					</div>
					<div id="top_popular_manga_box" class="itemlist_area cfix">
						<div class="popular_manga_block">
							<div class="popular_manga_block__title">
								<h2>
									人气作品
								</h2>
								<a href="/manga/ranking?track=seiga_rank">
									全部显示
								</a>
							</div>
              <!--块开始-->
							<div class="popular_manga_block__itemlist">
								<div class="popular_manga_block__item">
									<div class="popular_manga_block__item__thumbnail">
										<a href="/comic/35172?track=top_ranking">
											<img class="lazyload" data-original="./img/thumb/11857291q.png"
											alt="" src="./img/thumb/11857291q.png"
											style="display: inline;">
										</a>
									</div>
									<div class="popular_manga_block__item__info">
										<span class="popular_manga_block__item__info--title">
											<a href="/comic/35172?track=top_ranking">
												test
											</a>
										</span>
										<span class="popular_manga_block__item__info--nickname">
											test
										</span>
									</div>
								</div>
							</div>
              <!--块结束-->
						</div>
					</div>
				</div>
				<div id="main_area_r">
					<div id="top_personalize_box--nologin">
						<div class="top_personalize_block">
							<div class="top_personalize_block__header">
								收藏的漫画
							</div>
							<div class="top_personalize_block__body">
								<div class="top_personalize_block__body__message">
                  <img src="./img/index/icon_no_login.svg">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>