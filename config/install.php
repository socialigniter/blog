<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:			Social Igniter : Blog : Install
* Author: 		Brennan Novak
* 		  		contact@social-igniter.com
*         		@brennannovak
*          
* Created: 		Brennan Novak
*
* Project:		http://social-igniter.com/
* Source: 		http://github.com/socialigniter/blog
*
* Description: 	Install values for Blog App for Social Igniter 
*/
/* Content */
$config['blog_content'][] = array('pages', 'page', 'website', NULL, 1, 'Blog', 'blog', NULL, 'module_page', 'E', 'Y', NULL, NULL, NULL, 'Y', 'A', 'P');

/* Settings */
$config['blog_settings']['enabled']				= 'TRUE';
$config['blog_settings']['create_permission']	= '3';
$config['blog_settings']['publish_permission']	= '2';
$config['blog_settings']['manage_permission']	= '2';
$config['blog_settings']['posts_per_page']		= 'all';
$config['blog_settings']['url_style']			= 'posts';
$config['blog_settings']['date_style']			= 'DIGITS';
$config['blog_settings']['ratings_allow']		= 'no';
$config['blog_settings']['categories_display']	= 'yes';
$config['blog_settings']['abbreviate_post']		= 'no';
$config['blog_settings']['abbreviate_length']	= '100';
$config['blog_settings']['comments_per_page']	= '5';
$config['blog_settings']['comments_allow']		= 'no';
$config['blog_settings']['tags_display']		= 'no';