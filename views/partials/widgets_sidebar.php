<h2>Recent Posts</h2>
<ul>
<?php foreach ($posts as $post): $post_link = post_link($blog_path, $url_style, $post->created_at, $post->title_url); ?>
	<li><a href="<?= $post_link ?>"><?= $post->title ?></a></li>
	<li><?= human_date($date_style, mysql_to_unix($post->created_at)) ?></li>
	<li>&nbsp;</li>
<?php endforeach; ?>
</ul>