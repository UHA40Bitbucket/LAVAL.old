<?php

  class Bootstrap {
  	
  	public function __construct(){
  		$url = $_GET['url'];
  		$url = trim($url, '/');
  		$url = explode($url);
  	}
     


  }

 ?>
