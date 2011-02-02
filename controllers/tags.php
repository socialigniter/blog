<?php
class Tags extends Site_Controller {

	function __construct() {
	
		parent::__construct();	
			
	}
	
	function index() 
	{	
		$this->data['page_title'] = "Tags";
		
		$this->render();
		
	}

}