<?php  

	//encapsulation : Wrapping up data and function into one unit[using public, protected and private keywords] is called Encapsulation.
	
	class TV{
		protected $model;
		private $volume;

		public function getTvInfo(){
			return 'TV Model is: '.$this->model.' and TV Vol is '.$this->volume;
		}
		private function getModel(){
			return $this->model;
		}
		protected function getVolume(){
			return $this->volume;
		}
		function __construct($a,$b){
			$this->model = $a;
			$this->volume = $b;
		}
	}

	class Sony extends TV{
		public $timer = true;

		public function getModel(){
			return $this->model;
		}
		protected function getVolume(){ //less or equal secure access level, Exmp. here this methode can be public but it can not be private since in the parent class this methode is declared as protected access level
			return $this->volume;
		}
	}

	$sony_obj = new Sony('sony101', 10);
	echo $sony_obj->getTvInfo();

	echo "<br>";
	echo $sony_obj->getModel();

	// can not be access protected variables through the objects "Encapsulation"
	/*echo $sony_obj->model= 'Sona10001';
	echo "<br>";
	echo $sony_obj->getTvInfo();*/

?>