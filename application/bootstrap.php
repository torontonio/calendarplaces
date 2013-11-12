<?php 

class Bootstrap
{
	protected $request;
	protected $layoutparams;
	protected $controller;
	
	public function __construct($configFile)
	{
		require_once ("../application/model/generalModel.php");
		$config=readConfig($configFile, APPLICATION_ENV);
		$this->request=getRequest();
		$this->layoutparams=array(
								"request"=>$this->request,
								"config"=>$config);
	}
	
	public function run()
	{
		//$this->session();
		//$this->routes();
		//$this->db();
		$this->dispatch();
	}
	
	
	public function dispatch()
	{
		$controllerName= "Controllers_".ucfirst($this->request['controller']);
		$actionName=$this->request['action']."Action";
		
		$this->controller = new $controllerName($this->layoutparams['request'],
										  $this->layoutparams['config']);
		$this->controller->$actionName();
	}
	
	public function __destruct()
	{
		echo renderLayout($this->controller->getLayout(), 
						  $this->request['controller'],
						  $this->layoutparams);
	}
}










