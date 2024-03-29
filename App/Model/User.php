<?php
namespace App\Model;
use App\Core;
/*
 * Gestion des données utilisateur
 */
class User extends Model{

	/*
	 * Enregistre un utilisateur en basse de donnée
	 */

	public function create($firstName, $lastName, $mail, $pass){
		$this->db->query("INSERT INTO users (firstName, lastName, mail, pass) VALUES ('".$firstName."', '".$lastName."', '".$mail."', '".md5($pass)."')");
	}

	/*
	 * Valide l'email et le mot de passe d'un utilisateur pour la connexion
	 * Utilisation : User->checkUser($_POST['user'])
	 */

	public function fetchValidUser(array $user) {
		$data = $this->db->query("SELECT * FROM users WHERE mail = '".$user["mail"]."' AND password = '".md5($user['password'])."'");
		return ($data)? $data : false;
	}

	/*
	 * Trouve un utilisateur en fonction de son mail
	 * Utilisation : User->findByMail(mail)
	 */

	public function findByMail($mail){
		$data = $this->db->query("SELECT * FROM users WHERE mail='$mail'");
		return $data;
	}

	/*
	 * Trouve l'utilisateur actuellement connecté
	 * Utilisation : User->findCurrent($_SESSION['user'])
	 */

	public function findCurrent(array $user){
		$data = $this->db->query('SELECT * FROM users WHERE id='.$user['id']);
		return $data; 
	}

	/*
	 * Supprime un utilisateur
	 * Utilisation : User->delete(25)
	 */

	public function delete($id){
		$this->db->query("DELETE FROM users WHERE id=".$id);
	}

	/*
	 * POUR L'EXEMPLE : Vérif présence mail
	 * Utilisation : User->check(mail)
	 */
	
	public function check($mail) {
		$data = $this->db->query("SELECT * FROM users WHERE mail = '".$mail."'");
		return ($data)? $data : false;
	}
}