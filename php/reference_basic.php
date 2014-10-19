<html>
<head>
	<title>reference</title>
</head>
<body>
	<!--
		1. pass var by value, pass var by reference
		2. pass var as argument in a function, the local action will affect var in global scope
		3. return reference and pass to another value can affect the source var
	-->
	<?php 
		$source1 = 1;
		$pass_by_value = $source1;
		$pass_by_value = 2;

		echo "source1 : {$source1} <br />pass_by_value : {$pass_by_value}";
		echo "<hr />";

		// 1.
		$source2 = 1;
		$pass_by_reference =& $source2;
		$pass_by_reference = 2;
		echo "source2 : {$source2} <br />pass_by_reference : {$pass_by_reference}";
		echo "<hr />";

		//reference will be unset
		unset($pass_by_reference);
		echo "source2 : {$source2} <br />pass_by_reference : {$pass_by_reference}";
		echo "<hr />";

		// 2. pass a reference as argument of a function
		function pass_reference(&$var){
			$var++;
		}
		$source3 = 1;
		pass_reference($source3);
		echo $source3;
		echo "<hr />";

		// 3. return a reference and when pass this reference to another var(instead of pass a value)
		// this var will point to the source var
		function &return_reference(){
			global $source4;
			$source4++;
			return $source4;
		}
		$source4 = 1;
		$ref4 =& return_reference();
		$ref4 = 4;
		echo "source4 : {$source4} <br />return_reference : {$ref4}";
		echo "<hr />";
	 ?>
</body>
</html>
