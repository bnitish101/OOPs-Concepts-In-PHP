<?php  

	class LoggerDB implements LoggerInterface{
		public function log($message){
			echo "Logging Message to Database: $message";
		}
	}

?>