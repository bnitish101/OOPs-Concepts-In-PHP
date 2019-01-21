<?php  

	abstract class Base{
		protected $fname;
		protected $lname;
		public abstract function getMonthelySalary();
		public function getFullName(){
			echo $this->fname.' '.$this->lname;
		}
		public function __construct($a,$b){
			$this->fname = $a;
			$this->lname = $b;
		}
	}

	class FullTimeEmployee extends Base{
		protected $anual_salary = 84000;
		protected $monthely_salary;

		public function getMonthelySalary(){
			$this->monthely_salary = $this->anual_salary / 12;
			return $this->monthely_salary;
		}
	}

	class PartTimeEmployee extends Base{
		protected $per_hour_salary = 50;
		protected $completed_hour = 120;
		protected $monthely_salary;

		public function getMonthelySalary(){
			$this->monthely_salary = $this->completed_hour * $this->per_hour_salary;
			return $this->monthely_salary;
		}
	}

	$full_emp = new FullTimeEmployee('Nio', 'Thries');
	$part_emp = new PartTimeEmployee('Bucky', 'Robert');
	//$base = new Base('Nitish', 'Bhardwaj');

	//echo $base->getFullName();
	echo "<br>";


	echo $full_emp->getFullName();
	echo "<br>";
	echo $full_emp->getMonthelySalary();

	echo "<br>";
	echo $part_emp->getFullName();
	echo "<br>";
	echo $part_emp->getMonthelySalary();
?>