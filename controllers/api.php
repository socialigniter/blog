<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends Oauth_Controller
{
    function __construct()
    {
        parent::__construct();
	}

    /* Install App */
	function install_get()
	{
		// Load
		$this->load->library('installer');
		$this->load->config('install');        

		// Settings & Create Folders
		$settings = $this->installer->install_settings('blog', config_item('blog_settings'));
	
		if ($settings == TRUE AND $folders == TRUE)
		{
            $message = array('status' => 'success', 'message' => 'Yay, the Blog App was installed');
        }
        else
        {
            $message = array('status' => 'error', 'message' => 'Dang Blog App could not be uninstalled');
        }		
		
		$this->response($message, 200);
	} 

	function uninstall_authd_get()
	{
		$this->load->library('installer');
	
		$settings	= $this->installer->uninstall_settings('media');
		$files		= $this->installer->delete_app('app');
	
		if ($settings == true AND $files == true)
		{		
            $message = array('status' => 'success', 'message' => 'Media App was unistalled');
        }
        else
        {
            $message = array('status' => 'error', 'message' => 'Dang, the Media App could not be uninstalled');
        }		
		
		$this->response($message, 200);	
	}
	
}