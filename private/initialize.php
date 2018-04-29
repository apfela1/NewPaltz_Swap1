<?php
//file paths assigned to PHP constants
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

//root url assigned to PHP constant
define("WWW_ROOT", '/NewPaltz_Swap1/public');

require_once('functions.php');

?>
