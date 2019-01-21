<?php  

	class TV{
		public $model;
		public $volume;

		function volumeUp(){
			return $this->volume ++;
		}
		function volumeDown(){
			return $this->volume --;
		}
		function getTvInfo(){
			return 'Model is: '.$this->model.' Volume is: '.$this->volume;
		}
		
		function __construct($a, $b){ //this method will call when new object will be creating
			$this->model = $a;
			$this->volume = $b;
		}
		//Fatal error: Cannot redeclare TV::__construct()
		/*function __construct($x){
			$this->model = $x.'TV Model Test';
			$this->volume= 'TV Vol Test';
		}*/
	}

	class Plazma extends TV{
		public $timer = true;
	}

	class Plazma1 extends Plazma{
		public $test = 1;
	}

	class Sony extends TV{
		public $model;
		public $volume;
		function __construct(){ // first preority of chield class
			$this->model;
			$this->volume;
		}

	}

	$plazma = new Plazma('Pazma101', 5);
	echo $plazma->getTvInfo();


	$sony = new Sony;
	$sony->model = 'Sony101'; // no encapsolution
	$sony->volume=10; // no encapsolution

	echo "<br>";
	echo $sony->getTvInfo();


	//Fatal error: Cannot redeclare TV::__construct()
	/*$tvTest = new Plazma('Test');
	echo "<br>";
	echo $tvTest->getTvInfo();
*/
?>