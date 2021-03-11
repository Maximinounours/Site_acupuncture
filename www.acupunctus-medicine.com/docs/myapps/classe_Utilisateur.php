<?php
class Utilisateur{

	private $_isConnected;
	private $_nom;
	private $_prenom;
	private $_mail;
	
	public function __construct(){
		$this->_isConnected = false;
		$this->_nom = "";
		$this->_prenom = "";
		$this->_mail = "";
	}
	
	public function connexion($nom, $prenom, $mail){
		$this->_isConnected = true;
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_mail = $mail;
	}
	
	public function info(){
		print("Connexion : " . "$this->_isConnected");
		print("Nom : " . "$this->_nom");
		print("Prenom : " . "$this->_prenom");
		print("Mail : " . "$this->_mail");
	}
	
}


?>
