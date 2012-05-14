<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:		Social Igniter : Blog : Config
* Author: 	Brennan Novak
* 		  	contact@social-igniter.com
*         	@brennannovak
*
* Project:	http://social-igniter.com
* Source: 	http://github.com/socialigniter/blog
*
* Description: Config for Blog App for Social Igniter
*/

$config['blog_path']			= 'blog/';
$config['blog_widgets']			= TRUE;
$config['blog_categories']		= TRUE;
$config['url_style_posts']		= array(
	'all'	=> '2010 / 01 / 01 / name-of-post',
	'month'	=> '2010 / 01 / name-of-post',
	'year'	=> '2010 / name-of-post',
	'posts'	=> 'posts / name-of-post'
);