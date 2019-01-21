<?php  
	// Stacic member deals/related with and accessible through class only
	
	class Designation{
		public  $dname = 'Manager';
		public static $var_test = 'test';
		public function test(){
			echo "string";
		}	
		public  function test1(){
			//echo ' Var: '.$this->var_test;
			echo ' Var: ';
		}
	}
	$t = new Designation;
	$t->test1();
	Designation::$var_test;
	Designation::test();
	Designation::test1();


	/*class Employee extends Designation{
		public static $fname = 'Nio';
		public static $lname = 'Thries';

		public static function getEmp(){
			return self::$fname.' '.self::$lname;
		}

		public  function getDesignation(){
			return self::$dname;
		}
	}

	$emp = new Employee;
	echo $emp->getEmp();
	echo "<br>";
	echo $emp->getDesignation();
	echo "<br>";
	//echo $emp->fname;
	echo "<br>======================<br>";
	echo "<br>";
	echo Employee::$fname;
	echo " ";
	echo Employee::$lname;
	echo "<br>";
	echo Employee::getDesignation();*/
?>