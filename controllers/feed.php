<?php
class Feed extends MY_Controller 
{ 
    function __construct() 
    {
        parent::__construct();
        
        $this->load->helper('xml');        
    }
    
 	function index()
 	{
 	 	$this->data['site_url']		= base_url().'blog';
 	 	$this->data['site_feed']	= base_url().'feed/blog';
		$this->data['encoding']		= 'utf-8'; // the encoding  
		$this->data['language'] 	= 'en-en'; // the language
		$this->data['site_admin']	= config_item('admin_email').' ('.config_item('site_title').')';
		
		$this->data['contents'] 	= $this->social_igniter->get_content_recent('article', 10);  

	    $this->output->set_header('Content-type:application/rss+xml');
        echo $this->load->view('feed/rss', $this->data, true);
  	}
 	
}