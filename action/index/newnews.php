<li class="top_news_block__item">
	<div class="top_news_block__item__category top_news_block__item__category--manga">
  <?php echo($news["tag"]) ?>
	</div>
	<div class="top_news_block__item__date">
  <?php echo($news["date"]) ?>
	</div>
	<div class="top_news_block__item__title">
		<a href="news/index.php?id=<?php echo($x) ?>" rel="nofollow">
			<?php echo($news["title"]) ?>
		</a>
	</div>
</li>