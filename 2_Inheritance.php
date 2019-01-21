<?php
	class TV{
		public $model = 'tv101';
		public $volume = 1;

		function volumeUp(){
			return $this->volume ++;
		}
		function volumeDown(){
			$this->volume --;
		}
		function getTvInfo(){
			return 'Model is '.$this->model.' and Volume is '.$this->volume;
		}
	}

	class TvWithTimer extends TV{
		public $timer;
		function addTimer(){
			return 'This tv with timer.';
		}
	}

	class Plazma extends TvWithTimer{	//plazma will extend all the properties and methods of parent class
		public $timer = true;
		function getTimer(){
			return $this->timer;
		}
	}

	$withTimer = new TvWithTimer;
	$plazma = new Plazma;

	echo $withTimer->model;
	echo "<br>";
	echo $withTimer->addTimer();
	echo "<br>";
	$withTimer->model = 'tv102'; // no encapsolution here because $model is overridding here
	echo $withTimer->model;

	echo "<br>";
	echo $plazma->addTimer();
	echo "<br>";
	echo $plazma->getTvInfo(); //getInfo() methode is defind in TV class, multilevel inheritance (Plazma inherit TvWithTimer and TvWithTimer inherit TV)
?>