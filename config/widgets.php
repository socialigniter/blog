<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:		Social Igniter : Blog : Widgets
* Author: 	Brennan Novak
* 		  	contact@social-igniter.com
*         	@brennannovak
*
* Project:	http://social-igniter.com
* Source: 	http://github.com/socialigniter/blog
*          
* Description: Widgets for the Blog App for Social Igniter
*/

$config['blog_widgets'][] = array(
	'regions'	=> array('sidebar'),
	'widget'	=> array(
		'module'	=> 'blog',
		'name'		=> 'Recent Articles',
		'method'	=> 'run',
		'path'		=> 'widgets_recent_articles',
		'multiple'	=> 'FALSE',
		'order'		=> '1',
		'title'		=> 'Recent Articles',
		'content'	=> ''
	)
);

$config['blog_widgets'][] = array(
	'regions'	=> array('sidebar', 'content', 'wide'),
	'widget'	=> array(
		'module'	=> 'blog',
		'name'		=> 'Tag Cloud',
		'method'	=> 'run',
		'path'		=> 'widgets_tag_cloud',
		'multiple'	=> 'FALSE',
		'order'		=> '1',
		'title'		=> 'Tags',		
		'content'	=> ''
	)
);