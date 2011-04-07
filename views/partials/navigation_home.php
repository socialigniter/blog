<h2 class="content_title"><img src="<?= $modules_assets ?>blog_32.png"> Blog</h2>
<ul class="content_navigation">
	<?= navigation_list_btn('home/blog', 'Recent') ?>
	<?php if ($logged_user_level_id <= config_item('blog_crud_permission')): ?>		
	<?= navigation_list_btn('home/blog/write', 'Write') ?>
	<?= navigation_list_btn('home/blog/manage', 'Manage', $this->uri->segment(4)) ?>
	<?php endif; ?>
</ul>