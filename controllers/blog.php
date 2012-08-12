<?php
class Blog extends Site_Controller
{
    function __construct()
    {
        parent::__construct();       

		$this->load->config('blog');
		$this->load->helper('blog');
		
		/* Blog Settings */
		$this->data['blog_path']			= config_item('blog_path');
		$this->data['categories_array']		= $this->social_tools->get_categories_view('module', 'blog');
		$this->data['ratings_allow']		= config_item('blog_ratings_allow');
		$this->data['categories_display']	= config_item('blog_categories_display');
		$this->data['tags_display']			= config_item('blog_tags_display');
		$this->data['url_style'] 			= config_item('blog_url_style');
		$this->data['date_style']			= config_item('blog_date_style');
		$this->data['abbreviate_post']		= config_item('blog_abbreviate_post');
		$this->data['abbreviate_length']	= config_item('blog_abbreviate_length');
		$this->data['posts_per_page']		= config_item('blog_posts_per_page');
		$this->data['comments_allow']		= config_item('blog_comments_allow');
	}
	
	function index()
	{
		$this->data['articles'] = $this->social_igniter->get_content_view('module', 'blog', config_item('blog_posts_per_page'));
		$this->data['page_title'] = 'Blog';		
		
		// Widgets	
				
		$this->render();
	}

	function view() 
	{		
		// Basic Content Redirect
		if ($this->uri->segment(2) == 'view')
		{
			$article = $this->social_igniter->get_content($this->uri->segment(3));
			redirect(post_link(config_item('blog_path'), config_item('blog_url_style'), $article->created_at, $article->title_url), 'refresh');
		}
		else
		{
			$article = $this->social_igniter->get_content_title_url('article', $this->uri->segment($this->uri->total_segments()));
			if (!$article) redirect('blog');
		}	
				
		// Blog Post	
		$this->data['page_title'] 		= $article->title;		
		$this->data['article']			= $article;
		$this->data['article_link']		= post_link(config_item('blog_path'), config_item('blog_url_style'), $article->created_at, $article->title_url);		
		$this->data['content_id']		= $article->content_id;
		$this->data['comments_tool']	= '';

		// Comments	
		$this->render();
	}
	
	function categories()
	{
		$category = $this->social_tools-> get_category_title_url('category', $this->uri->segment(3));
		if (!$category) redirect(404);

		$this->data['articles'] 	= $this->social_igniter->get_content_view('category_id', $category->category_id, config_item('blog_posts_per_page'));
		$this->data['category']		= $category;
		
		$this->data['sub_title']	= $category->category;
		$this->data['page_title']	= 'Categories';

		$this->render();
	}
	
	function day() 
	{	
		$this->data['page_title'] = "Posts on Day";
		
		$this->render();		
	}	

	function month() 
	{	
		$this->data['page_title'] = "Posts on Month";
		
		$this->render();
	}	

	function year() 
	{	
		$this->data['page_title'] = "Posts on Year";
		
		$this->render();		
	}	
	
	/* Widgets */
	function widgets_recent_articles($widget_data)
	{
		$widget_data['posts'] = $this->social_igniter->get_content_view('type', 'article', 5);
		
		$this->load->view('widgets/recent_articles', $widget_data);
	}
	
}
