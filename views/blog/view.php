<div class="content_container">

<h1><a href="<?= $article_link ?>"><?= $article->title ?></a></h1>

<p><?= post_category($categories_display, $blog_path, $categories_array, $article->category_id) ?> by <a href="<?= base_url() ?>profile/<?= $article->username ?>"><?= $article->name ?></a> on <?= human_date($date_style, mysql_to_unix($article->created_at)) ?></p>

<div class="content_text">
	<?= $article->content ?>
</div>

<?= $comments_view ?>
