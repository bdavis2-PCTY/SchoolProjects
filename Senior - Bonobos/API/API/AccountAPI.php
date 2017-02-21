<?php 

if(!class_exists("APIBase")) require_once "APIBase.php";
if(!class_exists("DBAccount")) require_once "API/DB/DB_Account.php";

class AccountWithIDNotFoundException extends Exception{
	public function __construct($id){
		parent::__construct("An account with the ID {$id} was not found");}}	


class AccountWithEmailNotFoundException extends Exception{public function __construct($email){parent::__construct("An account with the email {$email} was not found");}}	
class AccountWithEmailAlreadyExists extends Exception{public function __construct($email){parent::__construct("An account with the email '{$email}' already exists");}}	
class InvalidPasswordException extends Exception{public function __construct(){parent::__construct("Invalid password");}}	

class AccountAPI extends APIBase { 

	public function GetAccountByID($id){
		global $Database;
		$req = $Database->query("SELECT * FROM Account WHERE ID='{$id}'");
		if ( $req && $req->num_rows == 1 ){
			$data = $req->fetch_array();
			return new Account($data['Email'], $data['Password'], $data['ID']);
		}
		throw new AccountWithIDNotFoundException($id);
	}

	public function GetAccountByEmail($email){
		global $Database;
		$req = $Database->query("SELECT * FROM Account WHERE Email='{$email}'");
		if ( $req && $req->num_rows == 1 ){
			$data = $req->fetch_array();
			return new Account($data['Email'], $data['Password'], $data['ID']);
		}
		throw new AccountWithEmailNotFoundException($email);
	}
	
	
	public function DoesAccountExist($email, $password){
		global $Database;
		$req = $Database->query("SELECT 1 FROM Account WHERE Email='{$email}' AND Password='{$password}'");
		return $req && $req->num_rows == 1;
	}
	
	public function IsPasswordValid($password){
		return strlen($password) > 5;
	}
	
	public function CreateAccount($email, $password){
		try{
			$this->GetAccountByEmail($email); // Will throw an exception if it doesnt exist
			
			if(!IsPasswordValid($password))
				throw new InvalidPasswordException();
			
			global $Database;
			$Database->query("INSERT INTO Account(Email, Password) VALUES('{$email}', '{$password}')");
			
			$acc = $this->GetAccountByEmail($email);
			return $acc;
		}catch(Exception $e){
			throw new AccountWithEmailAlreadyExists($email);
		}
	}
	
	public function UpdateAccount($id, $email, $password){
		try{
			$ac = GetAccountByID($id);
			$Database->query("UPDATE Account SET Email='{$email}', Password='{$password}' WHERE ID='$id'");
			
			$ac->Email = $email;
			$ac->Password = $password;
			
			return $ac;
		} catch(Exception $e){
			throw new AccountWithIDNotFoundException($id);
		}
	}
	
	public function login ($email, $password){
		try{
			GetAccountByEmail($email)->login().
		}catch(Exception $e){
			throw new AccountWithEmailNotFoundException($email);
		}
	}

}


$AccountAPI = new AccountAPI();
print_r($AccountAPI->GetAccountByEmail("braydon.d@live.com"));