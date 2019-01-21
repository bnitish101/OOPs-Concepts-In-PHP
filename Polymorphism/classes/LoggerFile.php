<?php  

	class LoggerFile Implements LoggerInterface{
		public function log($logger){
			echo "Logging message to File: $logger";
		}
	}

?>