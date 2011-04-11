<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:		Social Igniter : Blog Module : Routes
* Author: 	Brennan Novak
* 		  	contact@social-igniter.com
*
* Project:	http://social-igniter.com/
* Source: 	http://github.com/socialigniter/blog
*
* Standard installed routes for Blog Module. 
* All routes must start with the first segment being 'blog'
*/
$route['blog'] 																	= 'blog';
$route['blog/categories/(:any)']												= 'blog/categories';
$route['blog/view/(:num)']														= 'blog/view';
$route['blog/(19|20)[0-9]{2}/(0[1-9]|1[012])/(0[1-9]|[12][0-9]|3[01])/(:any)']	= 'blog/view';
$route['blog/(19|20)[0-9]{2}/(0[1-9]|1[012])/(0[1-9]|[12][0-9]|3[01])']			= 'blog/day';
$route['blog/(19|20)[0-9]{2}/(0[1-9]|1[012])/(:any)']							= 'blog/view';
$route['blog/(19|20)[0-9]{2}/(0[1-9]|1[012])']									= 'blog/month';
$route['blog/(19|20)[0-9]{2}']													= 'blog/year';
$route['blog/(19|20)[0-9]{2}/(:any)']											= 'blog/view';
$route['blog/posts/(:any)']														= 'blog/view';
$route['blog/posts']															= 'blog/index';
$route['blog/home/write'] 														= 'home/editor';
$route['blog/home/manage'] 														= 'home/manage';
$route['blog/home/manage/(:num)'] 												= 'home/editor';