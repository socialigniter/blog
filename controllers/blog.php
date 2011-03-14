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

		$this->data['posts'] = $this->social_igniter->get_content_view('module', 'blog', config_item('blog_posts_per_page'));
		$this->data['page_title'] = 'Blog';
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
		}	
				
		// Blog Post	
		$this->data['page_title'] 		= $article->title;		
		$this->data['article']			= $article;
		$this->data['article_link']		= post_link(config_item('blog_path'), config_item('blog_url_style'), $article->created_at, $article->title_url);		
		$this->data['content_id']		= $article->content_id;
		$this->data['comments_tool']	= '';
		
		// Comments
		if ((config_item('blog_comments_allow') == 'TRUE') && ($article->comments_allow != 'N'))
		{
			// Get Comments
			$comments 				= $this->social_tools->get_comments_content($article->content_id);		
			$comments_count			= $this->social_tools->get_comments_content_count($article->content_id);
			
			if ($comments_count)	$comments_title = $comments_count;
			else					$comments_title = 'Write';
			
			$this->data['comments_title']		= $comments_title;			
			$this->data['comments_list'] 		= $this->social_tools->render_comments_children($comments, '0');

			// Write
			$this->data['comment_name']			= $this->session->flashdata('comment_name');
			$this->data['comment_email']		= $this->session->flashdata('comment_email');
			$this->data['comment_write_text'] 	= $this->session->flashdata('comment_write_text');
			$this->data['reply_to_id']			= $this->session->flashdata('reply_to_id');
			$this->data['comment_type']			= 'page';
			$this->data['geo_lat']				= $this->session->flashdata('geo_lat');
			$this->data['geo_long']				= $this->session->flashdata('geo_long');
			$this->data['geo_accuracy']			= $this->session->flashdata('geo_accuracy');
			$this->data['comment_error']		= $this->session->flashdata('comment_error');
			
			// ReCAPTCHA Enabled
			if ((config_item('comments_recaptcha') == 'TRUE') && (!$this->social_auth->logged_in()))
			{			
				$this->load->library('recaptcha');
				$this->data['recaptcha']		= $this->recaptcha->get_html();
			}
			else
			{
				$this->data['recaptcha']		= '';
			}
			
			$this->data['comments_write']		= $this->load->view(config_item('site_theme').'/partials/comments_write', $this->data, true);
		}
	
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
	function widgets_sidebar()
	{
		$this->data['posts'] = $this->social_igniter->get_content_view('type', 'article', 5);
		
		$this->load->view('partials/widgets_sidebar', $this->data);
	
	}	

	
}
