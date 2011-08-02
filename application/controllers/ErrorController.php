<?php
//écriture standardiser d'un controlleur
//les controllers sont subdiviser dans des actions
//action = affichage
//action = traitement
//controller = class = action = methodes
class ErrorController extends Zend_Controller_Action 
{
	public function errorAction()
	{
		$errorHandler = $this->_getParam('error_handler');
		$exception = $errorHandler->exception;
		
		$this->view->message = $exception->getMessage();
		$this->view->code = $exception->getCode();
	}
}

// format d'une url de routage de base ZEND : http://app9.srv212.ip-formation.local/ctrl/action