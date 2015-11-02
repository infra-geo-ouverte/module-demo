<?php

	$configModule = $this->getDI()->get('chargeurModules')->obtenirModuleConfig('demo');
	if(isset($configModule) && isset($configModule->paramView)){
		$this->view->setVar("paramView", $configModule->paramView);
	} else {
		$this->di->get('demoLogger')->logErreur("No module config");
		$this->view->setVar("paramView", "paramView");
	}
	
?>