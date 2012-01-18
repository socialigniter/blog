<div class="widget_<?= $widget_region ?> widget_blog_tag_cloud" id="widget_<?= $widget_id ?>">
	<h2>Tags</h2>
	<?php foreach ($tags as $tag): ?>
		<a href="<?= base_url().'blog/tags/'.$tag->tag_url ?>"><?= $tag->tag ?></a>, 
	<?php endforeach; ?>
</div>