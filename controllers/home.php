<?php
class Home extends Dashboard_Controller
{
    function __construct()
    {
        parent::__construct();

		$this->data['page_title'] = 'Blog';

		$this->load->config('blog');				
		$this->load->helper('blog');

		/* Blog Settings */
		$this->data['blog_path'] = config_item('blog_path');		
	}
	
	function index()
	{		
		redirect('home', 'refresh');
	}

	function editor()
	{				
		if (($this->uri->segment(3) == 'manage') && ($this->uri->segment(4)))
		{
			// Need is valid & access and such
			$article = $this->social_igniter->get_content($this->uri->segment(4));
				
			// Non Form Fields
			$this->data['sub_title']		= $article->title;
			$this->data['form_url']			= base_url().'api/content/modify/id/'.$this->uri->segment(4);
			
			// Form Fields
			$this->data['title'] 			= $article->title;
			$this->data['title_url'] 		= $article->title_url;
			$this->data['wysiwyg_value']	= $article->content;
			$this->data['category_id']		= $article->category_id;
			$this->data['access']			= $article->access;
			$this->data['comments_allow']	= $article->comments_allow;
			$this->data['status']			= $article->status;
		}
		else
		{		
			// Non Form Fields
			$this->data['sub_title']		= 'Write';
			$this->data['form_url']			= base_url().'api/content/create';
			
			// Form Fields
			$this->data['title'] 			= '';
			$this->data['title_url']		= '';
			$this->data['wysiwyg_value']	= $this->input->post('content');
			$this->data['category_id']		= '';
			$this->data['access']			= 'E';
			$this->data['comments_allow']	= '';
			$this->data['status']			= 'U';
		}

		$this->data['wysiwyg_name']		= 'content';
		$this->data['wysiwyg_id']		= 'wysiwyg_content';
		$this->data['wysiwyg_class']	= 'wysiwyg_norm_full';
		$this->data['wysiwyg_width']	= 640;
		$this->data['wysiwyg_height']	= 300;
		$this->data['wysiwyg_resize']	= TRUE;
		$this->data['wysiwyg_media']	= TRUE;			
		$this->data['wysiwyg']	 		= $this->load->view($this->config->item('dashboard_theme').'/partials/wysiwyg', $this->data, true);
		$this->data['categories'] 		= $this->social_tools->get_categories_dropdown('module', 'blog', $this->session->userdata('user_id'), $this->session->userdata('user_level_id'));
							
 		$this->render('dashboard_wide');
	}

	function manage()
	{
		$this->data['sub_title'] = 'Manage';
	
		$this->data['articles'] = $this->social_igniter->get_content_view('module', 'blog');
	
		$this->render();
	}

	function edit()
	{
		redirect(base_url().'home/blog/manage/'.$this->uri->segment(4));
	}

	function users()
	{
		$this->data['sub_title'] = 'Users';
		$this->render();
	}


}