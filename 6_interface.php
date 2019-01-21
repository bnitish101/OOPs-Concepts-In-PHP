<?php 

	interface StudentInterface{					// define interface, must have declaration of public member functions
		public function StudentDetails($a,$b);
	}
	interface Sports{
		public function SportsDetails();
	}

	class Student implements StudentInterface{	// define interface
		public function StudentDetails($a,$b){
			return $a.' '.$b;
		}
	}
	class SutudentWithSports implements Sports, StudentInterface{
		protected $sportName = 'Cricket'; 
		public function StudentDetails($a,$b){
			return $a.' '.$b;
		}
		function SportsDetails(){
			return $this->sportName;
		}
	}

	$student = new Student;
	echo $student->StudentDetails('Nio', 'Thries');
	echo "<br>============================<br>";

	$student_with_sport = new SutudentWithSports;
	echo "<br>";
	echo $student_with_sport->StudentDetails('Bucky', 'Robert');
	echo "<br>";
	echo $student_with_sport->SportsDetails();
?>