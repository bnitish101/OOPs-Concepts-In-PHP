 <?php  

 	//array type hinting
 	//echo $arr = 3+ "+2-11" +5; /*What will be the output of it.*/
 	/*function arrayTypeHinting(array $arr){ //type hinting "writting the type is the know as type hinting"
 		echo "Doing somthing.<table>";
 		foreach($arr as $k=>$v){
 			echo "<tr><td>$v</td></tr>";
 		}
 	}
 	$arr = ['abc'=>'ABC', 'pqr'=>'PQR', 'xyz'=>'XYZ'];
 	arrayTypeHinting($arr);*/

 	interface testInterface{
 		public function doingSomething();
 	}

 	class Abc implements testInterface{
 		public function doingSomething(){
 			echo "Doing something for ABC";
 		}
 	}

 	class Xyz implements testInterface{
 		public static $count;
 		public static $count1;
 		public $count2;
 		public function doingSomething(){	
 			echo "Doing something for XYZ";
 		}
 	}
 	/*class Test{
 		public function test_fun($var){		// 1.dependancy "class Xyz dependent on class Abc"
 			$var->doingSomething();
 		}
 	}

 	$abc = new Abc();
 	$xyz = new Xyz();
 	$test = new Test();

 	$test->test_fun($xyz);*/
 	$abc = new Abc();
 	//Xyz::doingSomething();
 	Xyz::$count;

 	Xyz::$count1;
 	//$xyz->doingSomething();

 	function test(testInterface $var){	//this typehinting will work for all classes those are implemented "interface testInterface"
 		$var->doingSomething();
 	}

 	test($abc);

// Note: Type hinting can work with array, class, and ineterface
 ?>