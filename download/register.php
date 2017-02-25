<?php
class abstract User{
	public $id;
	protected  $username;
	public $email;
	public $password;
	
	
	
	public function __construct(){
		//echo 'Constructor called'.' ';
	}
	public function register(){
		echo 'User Registered'.' ';
	}
	public function login($username, $password){
		$this -> username = $username;
		$this -> password = $password;
		$this->auth_user();
		//echo $username. ' is now logged in';
	}
	public function auth_user($username, $password){
		//echo $this -> username. ' is authenticated';//caling off user from login
		
	}
	
	public function __destruct(){
		//echo 'Destructor called'.' ';
	}
}

$user = new User;
//$user -> register();
$user->login('brad', '1234');
echo $user-> username;



?>