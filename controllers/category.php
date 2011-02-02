<?php
class Category extends Site_Controller {

	function __construct() {
	
		parent::__construct();	
			
	}
	
	function index() 
	{	
		$this->data['page_title'] = 'Categories';
		
		$this->render();
		
	}
	
	function view()
	{
	
		$this->data['page_title'] = 'Category: Is';
	
		$this->render();
	
	}

}