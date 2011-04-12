<h2>Tags</h2>

<?php foreach ($tags as $tag): ?>
	<a href="<?= base_url().'blog/tags/'.$tag->tag_url ?>"><?= $tag->tag ?></a>, 
<?php endforeach; ?>