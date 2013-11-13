<?php

class Model_Login_LoginMysql extends Abstract_Mysql
{
	
	public function getCredentials($identity, $credentials)
	{
		$sql="SELECT * FROM users 
				WHERE id_user='".$identity."' AND
					  password='".$credentials."'";
		echo $sql;
		
		$this->linkread
		
	}
	
	public function singup()
	{
		
	}
	
}