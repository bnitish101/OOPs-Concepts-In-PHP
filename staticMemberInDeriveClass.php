<?php  

	class Count{
		public static $count=0;
		public function countConstructor(){
			echo self::$count;
		}
		public function __construct(){
			self::$count++;
		}
	}
	class ConstructCount extends Count{
		public function count_from_chield(){
			echo parent::$count;	//self keyword will work too.
		}
	}

	$construct_count = new Count();
	$construct_count = new Count();
	$construct_count->countConstructor();
	$construct_count = new Count();
	echo "<br>";
	$construct_count_obj = new ConstructCount();
	

	$construct_count_obj->count_from_chield();
?>