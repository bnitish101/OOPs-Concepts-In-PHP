<?php  

	class TV{
		public $model = 'TV101';
		public $volume = 1;

		function volumeUp(){
			return $this->volume ++;
		}
		function volumeDown(){
			return $this->volume --;
		}
	}

	$obj1 = new TV;
	echo $obj1->model;
	echo "<br>";
	echo $obj1->volume;
	echo "<br>";
	$obj1->volumeUp();
	$obj1->volumeUp();
	echo $obj1->volumeUp();
	echo "<br>";
	$obj1->volumeDown();
	$obj1->volumeDown();
	echo $obj1->volumeDown();

	$obj1->model='tv 102'; // no encapsolution here
	echo "<br>";
	echo $obj1->model;
?>