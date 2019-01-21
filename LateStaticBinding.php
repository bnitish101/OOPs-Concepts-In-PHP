<?php  

	class DB{
		static $table = 'TableName';
		
		function insert(){
			echo "<br>1. Late Static Binding eg. <br>";
			echo "INSERT INTO ".static::$table;		//Late Static Bindind since here used ststic keyword that is why it will hold the var table and looking for the value during the execution time
			echo "<br><br>2. Static eg.<br>";
			echo "INSERT INTO ".self::$table;		//Static since here used self keyword that is why it will assign the value during the php file interpretaion befor exicutoin time; 
		}
		function select(){
			echo "<br>";
			echo "SELECT * FROM ".static::$table;
			echo "<br>";
			echo "SELECT * FROM ".self::$table;
		}
		function update(){
			echo "UPDATE $this->table SET COL = Nio WHERE ID = 1";
		}
		function delete(){
			echo "DELETE $this->table";
		}
	}

	/*$db = new DB('empl');
	$db->select();*/

	class Employee extends DB{
		static $table = 'Emp';
	}
	class Users extends DB{
		static $table = 'Users';
	}

	$emp = new Employee();
	$emp->insert();
	echo "<br>";
	$user = new Users();
	$user->select();
?>