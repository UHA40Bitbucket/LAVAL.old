<?php
namespace App\Controller;
use App\Core;
use App\Model;
/*
*  Gestion de la logique utilisateur
*/
class UsersController extends Controller {
	function login() {
		if (isset($_POST['user'])) {
			if (isset($_POST['user']['mail']) && isset($_POST['user']['password'])) {
				$user = $this->User->fetchValidUser($_POST['user']);
			}
		}
	}

	/*
	 * Fonction de déconnection
	 * $this->User->logout()
	 * envoie une variable $msg à la vue
	 */
	function logout() {
		session_destroy();
		$msg = "Vous êtes bien deconnecté";
		$this->view->msg = $msg;
		$this->view->render('logout');

	}

	/*
	 * Fonction d'inscription
	 * $this->User->register($_POST['user']);
	 */
	function register(array $user) {
		
	}
	function recovery() {
	}
	function home() {
	}
	function getUser() {
		$erreur = false;
		$user = false;
		if (isset($_POST['mail'])) {
			if (strlen($_POST['mail']) >= 6) {
				if ($this->User->check($_POST['mail'])) {
					$user = $this->User->check($_POST['mail']);
				}
				else $erreur = 'Le mail n\'a pas été trouvé dans la DB';
			}
			else $erreur = 'Le mail est trop court';
		}
		else $erreur = 'Entrez le mail SVP';
		$this->view->erreur = $erreur;
		$this->view->user = $user;
		$this->view->render('getUser');
	}
}