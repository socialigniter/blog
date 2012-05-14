<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends Oauth_Controller
{
    function __construct()
    {
        parent::__construct();
	}

    /* Install App */
	function install_authd_get()
	{
		// Load
		$this->load->library('installer');
		$this->load->config('install');        

		// Settings & Create Folders
		$settings = $this->installer->install_settings('blog', config_item('blog_settings'));
	
		if ($settings == TRUE)
		{
            $message = array('status' => 'success', 'message' => 'Yay, the Blog App was installed');
        }
        else
        {
            $message = array('status' => 'error', 'message' => 'Dang Blog App could not be uninstalled');
        }		
		
		$this->response($message, 200);
	} 

}