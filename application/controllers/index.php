<?php

class Controllers_Index extends Abstract_Controller
{
	Protected $viewParams = array();
	Protected $layout = 'frontend';
	

	public function __construct($request, $config)
	{
		$this->request = $request;
		$this->config = $config;
		$this->setLayout($this->layout);
	}

	
	public function indexAction()
	{
		
	}
	
	public function aboutAction()
	{
		
	}
	
	public function contactAction()
	{
	
	}
	
	public function codeAction()
	{
		
	}
	
	
	
}
