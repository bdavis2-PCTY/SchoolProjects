<?php 


class Account {
	public $Email, $Password, $UID;
	public function __construct ($pEmail, $pPasswordHash, $pUID){
		$this->Email = $pEmail;
		$this->Password = $pPasswordHash;
		$this->UID = $pUID;
	}
	
	public function login(){
		
	}
}


