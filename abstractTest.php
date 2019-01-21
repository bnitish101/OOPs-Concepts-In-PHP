<?php  

	abstract class BaseClass{
		public abstract function name();
		function baseClassName(){
			return '<br>BaseClass<br>';
		}
	}
	class DeriveClassOne extends BaseClass{
		function deriveClassOneName(){
			return '<br>DeriveClassOne<br>';
		}
		function name(){
			return 'OK';
		}
	}
	class DeriveClassTwo extends BaseClass{
		function deriveClassTwoName(){
			return '<br>DeriveClassTwo<br>';
		}
		function name(){
			return 'OK';
		}
	}

	/*$bClass = new BaseClass();
	echo $bClass->baseClassName();*/
	$dOne = new DeriveClassOne();
	echo $dOne->deriveClassOneName();
?>