<?php
//define( "KRJbfpF9kMovM8BoBBgi", TRUE); 

if(!defined("cGB5mhZv7CoCki1JnbaK")) {
  exit("access denied");
}

//include("./config.php"); 
?>
<html>
	<head>
		<!-- stylesheets -->
		<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
		/>
		<link rel="stylesheet" href="/assets/css/header.css" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<link rel="stylesheet" href="/assets/css/footer.css" />
		<link rel="stylesheet" href="/assets/css/index.css" />
		<link rel="stylesheet" href="/assets/css/comic/info.css">
		<!-- JavaScripts -->
		<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-lazyload@1.9.7/jquery.lazyload.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="/assets/js/time.js"></script>
		<script src="//cdn.jsdelivr.net/npm/spacingjs" defer></script>
		<script>
			//lazyload启动
			$(function() {
				$("img").lazyload();
			});

			//手机版菜单
			function sp_menu_open() {
				$("#Header_menu_sp").addClass("fadeIn").removeClass("fadeOut");
				$("#Header_menu_sp").removeClass("hidden");
			}
			function sp_menu_close() {
				$("#Header_menu_sp").addClass("fadeOut").removeClass("fadeIn");
				setTimeout(function() {
					$("#Header_menu_sp").addClass("hidden");
				},
				400);
			}

			//返回顶部按钮
			$(document).ready(function() {
				$("#Base_button").hide();
				$(function() {
					$(window).scroll(function() {
						if ($(window).scrollTop() > 300) {
							$("#Base_button").slideDown(200);
							$("#Base_button").removeClass("Base_top");
						} else {
							$("#Base_button").slideUp(200);
							$("#Base_button").addClass("Base_top");
						}
					});
					$("#Base_button").click(function() {
						$('body,html').animate({
							scrollTop: 0
						},
						500);
						return false;
					});
				});
			});
		</script>
		<!-- metas -->
		<meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<header class="Header_container">
			<div class="Header_main">
				<a href="/">
					<img src="https://comic-fuz.com/assets/logo/fuz_logo.png" class="Header_container__logo">
				</a>
				<nav class="Header_navigation">
					<a class="Header_navigation__item null" href="/rensai">
						<img src="https://comic-fuz.com/assets/navigation/nav_rensai_pc.svg" class="Header_navigation__icon">
						<p class="Header_navigation__text null">
							连载
						</p>
					</a>
				</nav>
				<a class="Header_search" href="/search?keyword=">
					<img src="https://comic-fuz.com/assets/search/search.svg" class="Header_search__icon">
					<p class="Header_search__text">
						作品/作家搜索
					</p>
				</a>
			</div>
		</header>
		<header class="Header_container_sp">
			<a href="/">
				<img class="Header_container_sp__logo" src="https://comic-fuz.com/assets/logo/sp_logo.png">
			</a>
			<img class="Header_container_sp__search" src="https://comic-fuz.com/assets/header/sp_search.svg">
			<img class="Header_container_sp__hamburger" src="https://comic-fuz.com/assets/header/hamburger.svg"
			onclick="sp_menu_open();">
			<div id="Header_menu_sp" class="Header_modal hidden" onclick="sp_menu_close();">
				<div class="Header_modal__dropdown">
					<a class="Header_navigation__item null" href="/rensai">
						<img src="https://comic-fuz.com/assets/navigation/nav_rensai_sp.svg" class="Header_navigation__icon">
						<p class="Header_navigation__text null">
							連載
						</p>
					</a>
				</div>
			</div>
		</header>