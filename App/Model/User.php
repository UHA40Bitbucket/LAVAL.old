<<<<<<< HEAD
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

	public function create($user){
		$this->db->query("INSERT INTO users (firstName, lastName, mail, pass) VALUES ('".$user['firstName']."', '".$user['lastName']."', '".$user['mail']."', '".md5($user['pass'])."')");
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
=======
<?php 
 use App\core\Model\Model;

 Class User extends Model{
	 
 	private $tab = array(1,2,3,4);
	 
 	function _construct(){
 		parent::__construct();
 	}
	
	public function getTab(){
		return $this->tab;
	}
	
 }

>>>>>>> 1d1622b71fb77faf8ae3f624d21f129b50cb6ddd
