<div class="content_actions">
	<h3>Share</h3>	

	<table border="0" cellpadding="4" width="215">
	<tr>
		<td><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><g:plusone size="medium" href="<?= $article_link ?>"></g:plusone></td>		
		<td><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?= $article_link ?>" data-text="<?= $article->title ?>" data-count="horizontal" data-via="<?= config_item('twitter_default_account') ?>">Tweet</a><script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script></td>
		<td><iframe src="https://www.facebook.com/plugins/like.php?href=<?= $article_link ?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=112321278779214" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe></td>
	</tr>
	</table>
</div>