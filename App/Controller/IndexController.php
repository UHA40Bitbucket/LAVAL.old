<?php
use App\Core\Controller\Controller;
use App\Core\View\View;
class IndexController extends Controller {
<<<<<<< HEAD
    
=======

>>>>>>> 1d1622b71fb77faf8ae3f624d21f129b50cb6ddd
    function __construct() {
        parent::__construct();
    }
    
    function index() {
<<<<<<< HEAD
        $this->view->q = "moi";
=======
        
>>>>>>> 1d1622b71fb77faf8ae3f624d21f129b50cb6ddd
        $this->view->render('index/index');
    }
    
    
    
}