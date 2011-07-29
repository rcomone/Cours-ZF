<?php

/*definir un gestionnaire d'erreurs
 * mettre le gestionnaire d'erreur car une FATAL arrête tout le scritp directement
*deux parametre pour la fonction
*1.un entier et 2.une chaine
*/

define('APPLICATION_ENV', getenv('APPLICATION_ENV'));

set_error_handler(function($erno, $errstr)
	{
		if ('development' === APPLICATION_ENV){
			echo 'Erreurs générale : ' . $errstr;
		} else {
			echo 'Erreurs générale : ';
		}
		
	}
);

set_exception_handler(
//function qui prend lesception en parametre
	function ($exeption)
	{
		echo 'Exception générale : ' . $exeption->getmessage();
	}
);

//__________________________________________________________________________

/*function de controle qui contient l'include path
*echo get_include_path();
*/
define('DS', DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);

//define variable qui va chercher la racine du fichier library :: app9/library
//sinon si on effectue juste dirname(__FILE__) l'arbo seras app9/public/library
define('ROOT_PATH', dirname(dirname(__FILE__)));
define('LIB_PATH', ROOT_PATH . DS . 'library');
define('CONFIG_PATH', ROOT_PATH . DS . 'application' . DS . 'configs');
define('APPLICATION_PATH', ROOT_PATH . DS . 'application');

set_include_path('/usr/local/zend/share/ZendFramework/library' . PS . LIB_PATH);

/******************************
/* Démarrage de l'application
******************************/
require_once ('Zend/Application.php');
//environnement puis declaration .ini dans config
$application = new Zend_Application( APPLICATION_ENV, CONFIG_PATH . DS . 'application.ini');//APPLICATION_ENV est une option
//creation de bootstrap pour instanciation de tout les objets
$application->bootstrap();
//lancer le bootstrap
$application->run();

