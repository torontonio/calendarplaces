<?php
class Controllers_Companies extends Abstract_Controller
{
	protected $request;
	protected $config;
	Protected $viewParams = array();
	Protected $layout = 'frontend';
	
	Protected $company_name;
	Protected $email;
	Protected $latitude;
	Protected $longitude;
	Protected $phone;
	

	public function __construct($request, $config)
	{
		$this->request = $request;
		$this->config = $config;
		$this->setLayout($this->layout);
	}
	
	public function update_company($request)
	{
		$this->$company_name = $request->$company_name;
		$this->$email = $request->$email;
		$this->$latitude = $request->$latitude;
		$this-> $longitude = $request->$longitude;
		$this->$phone = $request->$phone;
	}


	/**
	 * @return the $company_name
	 */
	public function getCompany_name() {
		return $this->company_name;
	}

	/**
	 * @return the $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @return the $latitude
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * @return the $longitude
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * @return the $phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * @param field_type $company_name
	 */
	public function setCompany_name($company_name) {
		$this->company_name = $company_name;
	}

	/**
	 * @param field_type $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @param field_type $latitude
	 */
	public function setLatitude($latitude) {
		$this->latitude = $latitude;
	}

	/**
	 * @param field_type $longitude
	 */
	public function setLongitude($longitude) {
		$this->longitude = $longitude;
	}

	/**
	 * @param field_type $phone
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	public function __destruct()
	{
		return getView($this->request['action'],
				$this->request['controller'],
				$this->viewParams,
				$this->config);
	}
	

	public function getLayout() {
		return $this->layout;
	}

	
	public function setLayout($layout) {
		$this->layout = $layout;
	}

}