<?php
class Contributors extends Public_Controller {

	function __construct() {
	
		parent::__construct();	
			
	}
	
	function index() 
	{	
		$this->data['page_title'] = "Contributors";
		
		$this->render();
		
	}

}