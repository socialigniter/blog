<form name="settings_update" id="settings_update" method="post" action="<?= base_url() ?>api/settings/modify" enctype="multipart/form-data">
<div class="content_wrap_inner">

	<div class="content_inner_top_right">
		<h3>Module</h3>
		<p><?= form_dropdown('enabled', config_item('enable_disable'), $settings['blog']['enabled']) ?></p>
	</div>
	
	
	<h3>Permissions</h3>

	<p>Create / Manage
	<?= form_dropdown('crud_permission', config_item('users_levels'), $settings['blog']['crud_permission']) ?>
	</p>

</div>

<span class="item_separator"></span>

<div class="content_wrap_inner">		

	<h3>Display</h3>

	<p>Categories
	<?= form_dropdown('categories_display', config_item('yes_or_no'), $settings['blog']['categories_display']) ?>
	</p>

	<p>Tags
	<?= form_dropdown('tags_display', config_item('yes_or_no'), $settings['blog']['tags_display']) ?>
	</p>	

	<p>URL
	<?= form_dropdown('url_style', config_item('url_style_posts'), $settings['blog']['url_style']) ?>
	</p>

	<p>Date
	<?= form_dropdown('date_style', config_item('date_style_types'), $settings['blog']['date_style']) ?>
	</p>

	<p>Abbreviate
	<?= form_dropdown('abbreviate_post', config_item('yes_or_no'), $settings['blog']['abbreviate_post']) ?>
	<input type="text" size="4" name="abbreviate_length" value="<?= $settings['blog']['abbreviate_length'] ?>" /> characters
	</p>

	<p>Posts Per-Page
	<?= form_dropdown('posts_per_page', config_item('amount_increments_all'), $settings['blog']['posts_per_page']) ?>
	</p>

</div>

<span class="item_separator"></span>

<div class="content_wrap_inner">
	
	<h3>Tools</h3>
		
	<p>Ratings
	<?= form_dropdown('ratings_allow', config_item('yes_or_no'), $settings['blog']['ratings_allow']) ?>
	</p>

</div>

<span class="item_separator"></span>

<div class="content_wrap_inner">
			
	<h3>Comments</h3>	

	<p>Allow
	<?= form_dropdown('comments_allow', config_item('yes_or_no'), $settings['blog']['comments_allow']) ?>
	</p>

	<p>Comments Per-Page
	<?= form_dropdown('comments_per_page', config_item('amount_increments_five'), $settings['blog']['comments_per_page']) ?>
	</p>

	<input type="hidden" name="module" value="blog">

	<p><input type="submit" name="save" value="Save" /></p>

</div>
</form>

<?= $shared_ajax ?>