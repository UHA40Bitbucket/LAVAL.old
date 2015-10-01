<?php
   require 'config.php';
	function _autoload($lass){
		require LIBS .$class. '.php';
	}
	
	$app = new Bootstrap();
	$app->init();
