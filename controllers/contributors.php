<?php
class Contributors extends Site_Controller {

	function __construct() {
	
		parent::__construct();	
			
	}
	
	function index() 
	{	
		$this->data['page_title'] = "Contributors";
		
		$this->render();
		
	}

}