<?php namespace App\Core\View;

  class View {
    
    protected $param = array();

  	public  function __construct(){
  		
  	}


    public function render($name, $isInclude = false)
  	{
      if($isInclude == true){
        
        require 'View/' . $name . '.php';
      }else{
        require 'App/View/header.php';
        require 'App/View/navbar.php';
        require 'App/View/' . $name . '.php';
        require 'App/View/footer.php';
      }

  	}


  }
 ?>
