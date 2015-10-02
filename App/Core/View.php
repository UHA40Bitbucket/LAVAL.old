<?php namespace App\Core\View;

  class View {
    
    protected $param = array();

  	public  function __construct(){
  		
  	}
<<<<<<< HEAD
    
    public function getParams(){
      return $this->$param;
    }
   

    public function render($name, $isInclude = false)
  	{
      
=======


    public function render($name, $isInclude = false)
  	{
>>>>>>> 1d1622b71fb77faf8ae3f624d21f129b50cb6ddd
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
