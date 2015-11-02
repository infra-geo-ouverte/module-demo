<?php

namespace Demo\Apis;

use Phalcon\Mvc\Micro\Collection as MicroCollection;

class Api extends MicroCollection {
    public function __construct($api, $module, $config) {
    	$controllerStr = "\\".$module->obtenirNom(true)."\Controllers\ApiController";
        $this->setHandler(new $controllerStr());
        $this->setPrefix('/'.$module->obtenirNom());
        $this->get('/test', 'test');
        $this->get('/test/{name}', 'test');
    }
}
