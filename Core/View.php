<?php namespace App\Core\View;

  class View {

  	public  function __construct(){
  		 echo "this render my View";
  	}


    public function render($name, $isInclude = false)
  	{
      if($isInclude == true){
        require 'views/' . $name . '.php';
      }else{
        require 'views/header.php';
        require 'views/navbar.php';
        require 'views/' . $name . '.php';
        require 'views/footer.php';
      }

  	}


  }
 ?>
