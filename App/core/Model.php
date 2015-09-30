<?php namespace App\core\Model;
 use  App\config\Database;

  class Model {
  	

    /* init database connection in model */

    public function __construct() {
      $this->db = new Database();
    }

  }
 ?>
