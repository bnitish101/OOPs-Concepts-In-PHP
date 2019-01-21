<?php  
	$a = array();
	function __autoload($className){	// load all classes those are trynig to access here "class name is not Case Senstive"
		include_once "classes/$className.php";
	}
	//print_r($a);
	/*include_once "classes/Profile.php";
	include_once "classes/LoggerDB.php";*/
	//echo profilE::$a;

	interface LoggerInterface{
		public function log($var);
	}

	$logger = new LoggerDB;
	$profile = new Profile($logger);

	$profile->create();
?>