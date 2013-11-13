<?php

class Controllers_Login extends Abstract_Controller
{

	Protected $viewParams = array();
	Protected $layout = 'login';
	
	
	public function indexAction()
	{
		
	}
	
	public function loginAction()
	{
		if($_POST)
		{
			if (isset($_POST['signup']))
			{
				header('Location: /login/signup'); 
				exit;
			}	
			
			$user = new Model_Login();
			$user->singin($_POST['email'], $_POST['password']); 
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
			
		}
		
		
	}
	public function logoutAction()
	{
		
	}
	
	public function signupAction()
	{
		
	}
	
	
	
}
