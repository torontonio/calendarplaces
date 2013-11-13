<?php
class Controllers_Companies extends Abstract_Controller
{
	
	Protected $viewParams = array();
	Protected $layout = 'backend';
	
	
	

	public function indexAction()
	{
	
	}
	
	public function update_company($request)
	{
		$this->$company_name = $request->$company_name;
		$this->$email = $request->$email;
		$this->$latitude = $request->$latitude;
		$this-> $longitude = $request->$longitude;
		$this->$phone = $request->$phone;
	}
	
}

?>