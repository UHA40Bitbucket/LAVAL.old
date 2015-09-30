<?php namespace App\core\Controller;

 /**
  * @Controlleur principal
  */
 class Controller
 {

   function __construct()
   {
   	/* main controller */
   	
   	$this->view = new View();
   }

   public function loadModel($name){
     /* recupere le chemin du model */
        $path = 'models/'.$name.'.php';

        /* vérifie si le model exixte et l' initialise */
        if(file_exists($paths)){
          require 'models/'.$name.'.php';
          this->model = new $name();
        }
   }
 }
