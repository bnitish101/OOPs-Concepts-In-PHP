<?php  

	class Profile{
		public $logger;
		public static $a = "var a.";
		public function create(){
			echo "Creating User ";
			$this->logger->log("User Created.");
		}

		public function __construct(LoggerInterface $logger){
			$this->logger = $logger;
		}
	}

?>