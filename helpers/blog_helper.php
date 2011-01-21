<?php
/* For Dashboard Only */
function post_edit($post_id)
{
	return base_url().'home/blog/edit/'.$post_id;
}

function post_delete($post_id)
{
	return base_url().'home/blog/delete/'.$post_id;
}

/* For Public & Dashboard */
function post_link($posts_path, $style, $date, $link)
{

	$day 	= date_parser('DAY', mysql_to_unix($date));
	$month	= date_parser('MONTH', mysql_to_unix($date));
	$year	= date_parser('YEAR', mysql_to_unix($date));

	if ($style == 'all')	$post_link = $year.'/'.$month.'/'.$day.'/'.$link;	
	if ($style == 'month')	$post_link = $year.'/'.$month.'/'.$link;	
	if ($style == 'year')	$post_link = $year.'/'.$link;
	if ($style == 'posts')	$post_link = 'posts/'.$link;
	
	return base_url().$posts_path.$post_link;

}

function post_category($category, $blog_path, $category_array, $category_id)
{
	if ($category == 'no')
	{
		return FALSE;
	}

	if (!$category_id)
	{
		return 'Uncategorized';	
	}

	foreach ($category_array as $category)
	{
		if ($category->category_id == $category_id)
		{
			$category_url = base_url().$blog_path.'categories/'.$category->category_url;
		
			return '<a href="'.$category_url.'">'.$category->category.'</a>';
		}
	}
}

function post_content($abbreviate, $length, $content, $link)
{
	$content_clean	= strip_tags($content, '');
	$content_length = strlen($content_clean);

	if (($abbreviate == 'yes') && ($content_length >= $length))
	{
		$content = character_limiter($content_clean, $length) . '<div class="content_read_more"><a href="'.$link.'">read more</a></div>';
	}
	
	return $content;
}

function post_comments($count, $link, $text)
{
	if (!$count)
	{
		return FALSE;
	}

 	return '<a href="'.$link.'#comments">'.$count.' '.$text.'</a> / ';
}

function post_write_comments($allowed, $link, $text)
{
	if ($allowed)
	{
		return '<a href="'.$link.'#comments_write">'.$text.'</a>';
	}

}