<ol>

<?php foreach ($articles as $article): ?>

	<li><?= $article->title ?> <a href="<?= base_url().'home/blog/manage/'.$article->content_id ?>">Edit</a> <a href="<?= base_url().'api/content/destroy/id/'.$article->content_id ?>">Delete</a></li>

<?php endforeach; ?>
</ol>

<h3>Your Posts</h3>


<h3>Others Posts</h3>