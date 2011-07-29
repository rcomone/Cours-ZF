<?php
/*function de controle qui contient l'include path
*echo get_include_path();
*/
define('DS', DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);

//define variable qui va chercher la racine du fichier library :: app9/library
//sinon si on effectue juste dirname(__FILE__) l'arbo seras app9/public/library
define('ROOT_PATH', dirname(dirname(__FILE__)));
define('LIB_PATH', ROOT_PATH . DS . 'library');

set_include_path('/usr/local/zend/share/ZendFramework/library' . PS . LIB_PATH);

require_once ('Zend/application.php');