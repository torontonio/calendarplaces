<?php

class Controllers_Login extends Abstract_Controller
{
	protected $request;  //array
	protected $config;
	Protected $viewParams = array();
	Protected $layout = 'login';
	
	public function __construct($request, $config)
	{
		$this->request=$request;
		$this->config=$config;
		$this->setLayout($this->layout);
	}
	
	public function indexAction(){
		
	}
	
	public function login()
	{
		
	}
	public function logout()
	{
		
	}
	
	
	public function __destruct()
	{
		return getView($this->request['action'], 
				$this->request['controller'], 
				$this->viewParams, 
				$this->config);
	}
	
}
