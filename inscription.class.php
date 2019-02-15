<?php

class inscription{
	private $login;
	private $email;
	private $mdp;
	private $mdp2;
	
	  public function _construct($login,$email,$mdp,$mdp2){
		  $login = htmlspecialchars($mdp);
		  $email = htmlspecialchars($email);
		  
		  $this->login = $login;
		  $this->email = $email;
		  $this->mdp = $mdp;
		  $this->mdp2 = $mdp2;
	  } 
}