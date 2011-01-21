<?php foreach ($posts as $post): $post_link = post_link($blog_path, $url_style, $post->created_at, $post->title_url); ?>

<div class="content_container">

	<h2><a href="<?= $post_link ?>"><?= $post->title ?></a></h2>

	<p><?= post_category($categories_display, $blog_path, $categories_array, $post->category_id) ?> by <a href="<?= base_url() ?>profile/<?= $post->username ?>"><?= $post->name ?></a> on <?= human_date($date_style, mysql_to_unix($post->created_at)) ?></p>

	<div class="content_text">
		<?= post_content($abbreviate_post, $abbreviate_length, $post->content, $post_link) ?>
	</div>
	
	<div class="content_actions">
		<h3><?= post_comments($post->comments_count, $post_link, 'Comments').post_write_comments($comments_allow, $post_link, 'Write Comment') ?></h3>
	</div>

	<div class="clear"></div>
</div>
	
<?php endforeach; ?>