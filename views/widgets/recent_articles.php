<div class="widget_<?= $widget_region ?> widget_blog_recent_articles" id="widget_<?= $widget_id ?>">
	<h2><?= $widget_title ?></h2>
	<ul>
	<?php if ($posts): foreach ($posts as $post): ?>
		<li><a href="<?= post_link(config_item('blog_path'), config_item('blog_url_style'), $post->created_at, $post->title_url); ?>"><?= $post->title ?></a></li>
		<li><?= human_date(config_item('blog_date_style'), mysql_to_unix($post->created_at)) ?></li>
		<li>&nbsp;</li>
	<?php endforeach; else: ?>
		<li>No Articles Have Been Published</li>
	<?php endif; ?>
	</ul>
</div>