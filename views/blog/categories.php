<ul id="content_list">
<li class="content_container">
	
	<h2>Articles in <?= $category->category ?></h2>

	<p><?= $category->description ?></p>

</li>

<?php foreach ($articles as $article): $article_link = post_link($blog_path, $url_style, $article->created_at, $article->title_url); ?>

<li class="content_container">

	<h2><a href="<?= $article_link ?>"><?= $article->title ?></a></h2>

	<h4><?= post_category($categories_display, $blog_path, $categories_array, $article->category_id) ?> by <a href="<?= base_url() ?>profile/<?= $article->username ?>"><?= $article->name ?></a> on <?= human_date($date_style, mysql_to_unix($article->created_at)) ?></h4>

	<div class="content_text">
		<?= post_content($abbreviate_post, $abbreviate_length, $article->content, $article_link) ?>
	</div>
	
	<div class="content_actions">
		<h4><img src="<?= $site_assets ?>icons/comments_24.png"> <?= post_comments($article->comments_count, $article_link, 'Comments').post_write_comments($comments_allow, $article_link, 'Write Comment') ?></h4>
	
		<table border="0" cellpadding="4" width="215">
		<tr>
			<td><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><g:plusone size="medium" href="<?= $article_link ?>"></g:plusone></td>		
			<td><a href="http://twitter.com/share" class="twitter-share-button" data-url="<?= $article_link ?>" data-text="<?= $article->title ?>" data-count="horizontal" data-via="<?= config_item('twitter_default_account') ?>">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></td>
			<td><a name="fb_share" type="box_count" share_url="<?= $article_link ?>" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></td>
		</tr>
		</table>
	
	</div>	

	<div class="clear"></div>
</li>
	
<?php endforeach; ?>
</ul>