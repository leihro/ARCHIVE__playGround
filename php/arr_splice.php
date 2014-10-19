<html>
<head>
	<title>array splice</title>
</head>
<body>
	<?php 
		$arr = array(1,2,3,4,5,6);
		print_r($arr);
		echo "<hr />";

		array_shift($arr);
		print_r($arr);
		echo "<br />";
		// 1 == array_unshift
		array_splice($arr, 0, 0, 1);
		print_r($arr);
		echo "<hr />";

		array_unshift($arr, 0);
		print_r($arr);
		echo "<br />";
		// 2 == array_shift
		array_splice($arr, 0, 1);
		print_r($arr);
		echo "<hr />";

		array_pop($arr);
		print_r($arr);
		echo "<br />";
		// 3 == array_push 
		array_splice($arr, count($arr), 0, 6);
		print_r($arr);
		echo "<hr />";

		array_push($arr, 7);
		print_r($arr);
		echo "<br />";
		// 4 == array_pop
		array_splice($arr, -1);
		print_r($arr);
		echo "<hr />";

		$arr[3] = "four";
		print_r($arr);
		echo "<br />";
		// replace an elem in an arr
		array_splice($arr, 3, 1, 4);
		print_r($arr);
		echo "<hr />";

	 ?>
</body>
</html>
