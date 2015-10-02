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

