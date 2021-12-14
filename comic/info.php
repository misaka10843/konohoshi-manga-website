<?php 
  define( "cGB5mhZv7CoCki1JnbaK", TRUE); 
  include("../header.php"); 
?>
<script src="https://cdn.jsdelivr.net/npm/jquery-lazyload@1.9.7/jquery.lazyload.min.js"></script>
<script>
get_comic_info();
get_comic_info_category();
function get_comic_info() {
  var urlStr = location.pathname.match('[^/]+(?!.*/)')[0];
	$.ajax({
		url: "/api/comic/info?id="+urlStr,
		type: "get",
		dataType: "json",
		success: function(data) {
			$("#introduction").append(data.introduction);
      $("#comic_name").append(data.name);
      $("#author").append(data.author);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			alert(XMLHttpRequest.status);
			alert(XMLHttpRequest.readyState);
			alert(textStatus);
		},
	})

}

function get_comic_info_category() {
  var urlStr = location.pathname.match('[^/]+(?!.*/)')[0];
	$.ajax({
		url: "/api/comic/info_category?id="+urlStr,
		type: "get",
		dataType: "json",
		success: function(data) {
      var item = data.data;
			var htm = "";
			for (var i = 0; i < item.length; i++) {
        if(item[i].free == "1"){
          isfree = "免费";
        }else{
          isfree = "付费";
        }
				htm += "<a class=\"Chapter_chapter false\" href='" + item[i].id + "'><div class=\"Chapter_chapter__thumbnail_wrapper\"><img class=\"Chapter_chapter__thumbnail  FUZImage_image__manga\" data-src=\"" + item[i].thumbnail + "\"></div><div class=\"Chapter_chapter__detail\"><h3 class=\"Chapter_chapter__name\">" + item[i].chapter_name + "</h3><p class=\"Chapter_chapter__subName\"></p><p class=\"Chapter_chapter__updateDate\">2019/03/12</p><div class=\"Chapter_chapter__bottom\"><div class=\"Chapter_chapter__userAction\"><div class=\"Chapter_chapter__userAction_item\"><img class=\"Chapter_chapter__userAction_icon\" src=\"https://comic-fuz.com/assets/manga_detail/like.svg\"><p class=\"Chapter_chapter__userAction_text\">" + item[i].like_num + "</p></div></div><p class=\"Chapter_chapter__price_free\">" + isfree + "</p></div></div></a>";
			}
			$("#comic_info_category_list").append(htm);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			alert(XMLHttpRequest.status);
			alert(XMLHttpRequest.readyState);
			alert(textStatus);
		},
	})

}

function get_comic_info_category_inverted() {
  var urlStr = location.pathname.match('[^/]+(?!.*/)')[0];
	$.ajax({
		url: "/api/comic/info_category?id="+urlStr,
		type: "get",
		dataType: "json",
		success: function(data) {
      var item = data.data;
			var htm = "";
			for (var i = item.length; 0 < i; i-- ) {
        if(item[i].free == "1"){
          isfree = "免费";
        }else{
          isfree = "付费";
        }
        var update_time = item[i].update_time;
				htm += "<a class=\"Chapter_chapter false\" href='" + item[i].id + "'><div class=\"Chapter_chapter__thumbnail_wrapper\"><img class=\"Chapter_chapter__thumbnail  FUZImage_image__manga\" data-src=\"" + item[i].thumbnail + "\"></div><div class=\"Chapter_chapter__detail\"><h3 class=\"Chapter_chapter__name\">" + item[i].chapter_name + "</h3><p class=\"Chapter_chapter__subName\"></p><p class=\"Chapter_chapter__updateDate\">" + update_time + "</p><div class=\"Chapter_chapter__bottom\"><div class=\"Chapter_chapter__userAction\"><div class=\"Chapter_chapter__userAction_item\"><img class=\"Chapter_chapter__userAction_icon\" src=\"https://comic-fuz.com/assets/manga_detail/like.svg\"><p class=\"Chapter_chapter__userAction_text\">" + item[i].like_num + "</p></div></div><p class=\"Chapter_chapter__price_free\">" + isfree + "</p></div></div></a>";
			}
			$("#comic_info_category_list").append(htm);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			alert(XMLHttpRequest.status);
			alert(XMLHttpRequest.readyState);
			alert(textStatus);
		},
	})

}



</script>
<div>
	<div class="title_detail_introduction">
		<div class="title_detail_introduction__wrapper">
			<div class="title_detail_introduction__topSection">
				<img class="title_detail_introduction__thumbnail FUZImage_image__manga"
				data-original="https://img.comic-fuz.com/c/1xjnt5/98.webp?h=J2suSM16KZo03vEZwAFg5w&amp;e=5000000000">
				<div class="title_detail_introduction__misc">
					<div class="title_detail_introduction__top">
						<h1 id="comic_name" class="title_detail_introduction__name">
              <!-- API内容填充 -->
						</h1>
						<div class="title_detail_introduction__fav">
							<img src="https://comic-fuz.com/assets/common/not_fav.svg" class="title_detail_introduction__fav__notfavicon">
						</div>
					</div>
					<div class="title_detail_introduction__authors">
						<a href="/yell/595" class="title_detail_author title_detail_author_enable">
							<img class="title_detail_author__icon FUZImage_image__author"
							data-original="https://img.comic-fuz.com/o/0/9j.webp?h=Oz8CrU2pMUlqzO0KTFp6SA&amp;e=5000000000">
							<p id="author" class="title_detail_author__name">
                <!-- API内容填充 -->
							</p>
						</a>
					</div>
					<div class="title_detail_tags">
						<a class="title_detail_tags__item" href="/manga/tag/3?currentTab=0">
							水曜日
						</a>
						<a class="title_detail_tags__item" href="/manga/tag/12?currentTab=0">
							オリジナル
						</a>
						<a class="title_detail_tags__item" href="/manga/tag/13?currentTab=0">
							男性向け
						</a>
						<a class="title_detail_tags__item" href="/manga/tag/23?currentTab=0">
							学園
						</a>
						<a class="title_detail_tags__item" href="/manga/tag/29?currentTab=0">
							恋愛
						</a>
					</div>
					<div class="title_detail_title_detail__charge">
						<div class="Charge_charge Charge_charge__charged">
							<img class="Charge_charge__icon" src="https://comic-fuz.com/assets/manga_detail/charged.svg">
							<p class="Charge_charge__text">
								チャージ完了！
							</p>
						</div>
					</div>
				</div>
			</div>
			<p id="introduction" class="title_detail_introduction__description">
        <!-- API内容填充 -->
			</p>
			<a class="title_detail_introduction__button">
				开始阅读
				<div class="title_detail_introduction__chevron">
				</div>
			</a>
		</div>
	</div>
  <div class="title_detail_chapters__wrapper">
	<div class="title_detail_chapters__header">
		<p class="title_detail_chapters__header_text">
			章节一览
		</p>
		<img src="https://comic-fuz.com/assets/manga_detail/sort_9_1.svg" class="title_detail_chapters__header_sort">
	</div>
	<div class="title_detail_chapters__list">
		<div class="ChapteGroup_chapterGroup">
			<ul id="comic_info_category_list">
			</ul>
		</div>
	</div>
</div>
</div>
<?php 
  include("../footer.php"); 
?>