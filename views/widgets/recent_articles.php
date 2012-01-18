<div class="widget_<?= $widget_region ?> widget_blog_recent_articles" id="widget_<?= $widget_id ?>">
	<h2><?= $widget_title ?></h2>
	<ul>
	<?php if ($posts): foreach ($posts as $post): $post_link = post_link($blog_path, $url_style, $post->created_at, $post->title_url); ?>
		<li><a href="<?= $post_link ?>"><?= $post->title ?></a></li>
		<li><?= human_date($date_style, mysql_to_unix($post->created_at)) ?></li>
		<li>&nbsp;</li>
	<?php endforeach; else: ?>
		<li>No Articles Have Been Published</li>
	<?php endif; ?>
	</ul>
</div>