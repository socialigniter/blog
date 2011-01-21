<div class="content_container">

<h1><a href="<?= $article_link ?>"><?= $article->title ?></a></h1>

<p><?= post_category($categories_display, $blog_path, $categories_array, $article->category_id) ?> by <a href="<?= base_url() ?>profile/<?= $article->username ?>"><?= $article->name ?></a> on <?= human_date($date_style, mysql_to_unix($article->created_at)) ?></p>

<div class="content_text">
	<?= $article->content ?>
</div>

<?php if ((config_item('blog_comments_allow') == 'TRUE') && ($article->comments_allow != 'N')): ?>
<div id="comments">
	<h3><span id="comments_count"><?= $comments_title ?></span> Comments</h3>
	
	<ol id="comments_list">
		<?php if($comments_list) echo $comments_list ?>
	</ol>
	<?= $comments_write ?>
</div>
<?php endif; ?>

</div>
