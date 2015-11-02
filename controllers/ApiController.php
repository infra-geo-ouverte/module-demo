<?php

namespace Demo\Controllers;

class ApiController extends \Phalcon\Mvc\Controller {
	private $psql = NULL;
    private $listeFile = NULL;
    private $pathRafmob = NULL;

    public function test($name = NULL) {
    	if($name){
    		echo $name;
		} else {
	        $config = $this->getDI()->get('chargeurModules')->obtenirModuleConfig('demo');
	        if($config === false){
	            die("Ce service n'est pas permis.");
	        } else if(!isset($config->paramApi)){
	            die("Configuration absente ou incorrecte");
	        }
	        echo $config->paramApi;
	    }
    }
}
