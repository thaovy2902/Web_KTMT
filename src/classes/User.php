<?php

class User
{
	public $username;
	public $password;

	
	public function __construct($id,$username,$password)
	{
		$this->username = $username;
		$this->password = $password;
		$this->id = $id;

	}
}

?>