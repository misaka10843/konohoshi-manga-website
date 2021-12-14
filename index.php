<?php 
  define( "cGB5mhZv7CoCki1JnbaK", TRUE); 
  include("./header.php"); 
?>
<script>
get_top_swiper();
get_main_time_swiper();
get_category_swiper();
function top_swiper() {

	var topswiper = new Swiper(".top-swiper", {
		slidesPerView: "auto",
		centeredSlides: true,
		centeredSlidesBounds: true,
		loop: true,
		preloadImages: false,
		lazy: {
			loadPrevNext: true,
			loadPrevNextAmount: 5,
		},
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
	});
}
function time_swiper() {
	var mainswiper = new Swiper(".main-swiper", {
		slidesPerView: "auto",
		centeredSlides: true,
		centeredSlidesBounds: true,
		preloadImages: false,
		spaceBetween: 30,
		freeMode: true,
		lazy: {
			loadPrevNext: true,
			loadPrevNextAmount: 5,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
}
function category_swiper() {
	var mainswiper = new Swiper(".category-swiper", {
		slidesPerView: "auto",
		centeredSlides: true,
		centeredSlidesBounds: true,
		preloadImages: false,
		spaceBetween: 30,
		freeMode: true,
		lazy: {
			loadPrevNext: true,
			loadPrevNextAmount: 5,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
}
function get_top_swiper() {
	$.ajax({
		url: "/api/index/top_swiper",
		type: "get",
		dataType: "json",
		success: function(data) {
			var item = data.data;
			var htm = "";
			for (var i = 0; i < item.length; i++) {
				htm += "<div class='swiper-slide'><a href='" + item[i].url + "'><img class='Banner_banner swiper-lazy' data-src='" + item[i].thumbnail + "'></a></div>";
			}
			$("#top-swiper-list").append(htm);
			top_swiper();
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			alert(XMLHttpRequest.status);
			alert(XMLHttpRequest.readyState);
			alert(textStatus);
		},
	})

}
function get_main_time_swiper() {
	$.ajax({
		url: "/api/index/time_swiper",
		type: "get",
		dataType: "json",
		success: function(data) {
			var item = data.data;
			var htm = "";
			for (var i = 0; i < item.length; i++) {
				htm += "<div class='swiper-slide TitleSection_slide swiper-slide-active'><a class='Title_title Title_title__swiper' href='/comic/" + item[i].id + "'><img class='Title_title__thumbnail Title_title__thumbnail__swiper FUZImage_image__manga__38_gb swiper-lazy'data-src='" + item[i].thumbnail + "'><i class='Title_title__badge Title_title__update'>更新</i><h3 class='Title_title__name'>	<span class='Title_title__mangaName'>" + item[i].name + "</span></h3><p class='Title_title__description Title_title__info'>" + item[i].survey + "</p></a></div>";
			}
			$("#time-swiper-list").append(htm);
			time_swiper();
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			alert(XMLHttpRequest.status);
			alert(XMLHttpRequest.readyState);
			alert(textStatus);
		},
	})

}
function get_category_swiper() {
	$.ajax({
		url: "/api/index/category",
		type: "get",
		dataType: "json",
		success: function(data) {
			var item = data.data;
			var htm = "";
			for (var i = 0; i < item.length; i++) {
				htm += "<section class='TitleSection_titles'><h2 class='TitleSection_header'>" + item[i].name + "</h2><a class='TitleSection_more' href='/" + item[i].url + "'>查看更多</a><div class='swiper category-swiper TitleSection_titles'><div class='swiper-button-prev swiper-button-disabled'></div><div class='swiper-button-next'></div><div id='time-swiper-list' class='swiper-wrapper'>";
				var comic_item = item[i].data;
				for (var o = 0; o < comic_item.length; o++) {
					htm += "<div class='swiper-slide TitleSection_slide swiper-slide-active'><a class='Title_title Title_title__swiper' href='/comic/" + comic_item[o].id + "'><img class='Title_title__thumbnail Title_title__thumbnail__swiper FUZImage_image__manga__38_gb swiper-lazy'data-src='" + comic_item[o].thumbnail + "'><i class='Title_title__badge Title_title__update'>更新</i><h3 class='Title_title__name'>	<span class='Title_title__mangaName'>" + comic_item[o].name + "</span></h3><p class='Title_title__description Title_title__info'>" + comic_item[o].survey + "</p></a></div>";
				}
				htm += "</div></div></section>";
			}
			$("#category-swiper-list").append(htm);
			category_swiper();
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			alert(XMLHttpRequest.status);
			alert(XMLHttpRequest.readyState);
			alert(textStatus);
		},
	})

}
</script>
<main class="top_top">
	<div class="swiper top-swiper">
		<div id="top-swiper-list" class="swiper-wrapper">
      <!-- API内容填充 -->
		</div>
		<div class="swiper-pagination">
		</div>
	</div>
	<div class="top_top__titles">
		<section class="TitleSection_titles">
			<h2 class="TitleSection_header">
				最近更新作品
			</h2>
			<a class="TitleSection_more" href="/rensai">
				查看更多
			</a>
			<div class="swiper main-swiper TitleSection_titles">
				<div class="swiper-button-prev swiper-button-disabled">
				</div>
				<div class="swiper-button-next">
				</div>
				<div id="time-swiper-list" class="swiper-wrapper">
					<!-- API内容填充 -->
				</div>
			</div>
		</section>
	</div>
  <div id="category-swiper-list" class="top_top__titles">
    <!-- API内容填充 -->
  </div>
</main>
<?php 
  include("./footer.php"); 
?>