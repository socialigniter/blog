<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:		Social Igniter : Blog Module : Config
* Author: 	Brennan Novak
* 		  	contact@social-igniter.com
*         	@brennannovak
*          
* Created by Brennan Novak
*
* Project:	http://social-igniter.com
* Source: 	http://github.com/social-igniter/module-blog
*          
* Created: 06-10-2010 
*
* Description: basic blog and admin functionality module for Social Igniter
*/

// Blog Settings
$config['blog_path']			= 'blog/';
$config['url_style_posts']		= array(
	'all'	=> '2010 / 01 / 01 / name-of-post',
	'month'	=> '2010 / 01 / name-of-post',
	'year'	=> '2010 / name-of-post',
	'posts'	=> 'posts / name-of-post'
);