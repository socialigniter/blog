<div class="post_actions">
	<a href="https://twitter.com/home?status=<?php echo urlencode($row_Blog['title'])."+".$PostLink; ?>" target="_blank"><img src="<?php echo $CFG->images; ?>social_icons/twitter.png" border="0" /></a>
	<a href="https://facebook.com/sharer.php?u=<?php echo $PostLink; ?>&t=<?php echo urlencode($row_Blog['title']) ?>" target="_blank"><img src="<?php echo $CFG->images; ?>social_icons/facebook.png" border="0" /></a>
	<a href="https://delicious.com/post?url=<?php echo $PostLink; ?>&title=<?php echo $row_Blog['title']; ?>" target="_blank"><img src="<?php echo $CFG->images; ?>social_icons/delicious.png" border="0" /></a>
	<a href="https://digg.com/submit?phase=2&url=<?php echo $PostLink; ?>" target="_blank"><img src="<?php echo $CFG->images; ?>social_icons/digg.png" border="0" /></a>  
	<a href="https://stumbleupon.com/url/<?php echo $PostLink; ?>" target="_blank"><img src="<?php echo $CFG->images; ?>social_icons/stumbleupon.png" border="0" /></a>
</div>