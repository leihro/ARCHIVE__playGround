<html>
<head>
	<title>arr funcs</title>
</head>
<body>
	<?php 
		$numeric_arr = array(1,2,3,4,5,6,7,8);
		$associative_arr = array('one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5);
		print_r($numeric_arr);
		echo "<br />";
		print_r($associative_arr);
		echo "<br /><hr />";

		// 1 array_shift : pop the first elem out
		$first = array_shift($numeric_arr);
		echo "first elem: $first". "<br/>";
		print_r($numeric_arr);
		echo "<br /><hr />";

		// 2 array_unshift : push in as the first elem
		array_unshift($numeric_arr, "first");
		print_r($numeric_arr);
		echo "<br /><hr />";

		// 3 array_pop : pop the last elem out
		$last = array_pop($numeric_arr);
		echo "last elem: $last". "<br />";
		print_r($numeric_arr);
		echo "<br /><hr />";

		// 4 array_push : push in as the last elem
		array_push($numeric_arr, "last");
		print_r($numeric_arr);
		echo "<br /><hr />";	

		// 5 array_combine : combine 2 arrs as associative array
		$numeric_arr2 = array('one','two','three','four','five','six','seven','eight');
		$combined_arr = array_combine($numeric_arr2, $numeric_arr);
		print_r($combined_arr);
		echo "<br /><hr />";

		// 6 array_chunk : split an arr into chunks
		print_r(array_chunk($numeric_arr, 3));
		echo "<br />";
		print_r(array_chunk($numeric_arr, 3, true));
		echo "<br /><hr />";		

		// 7 array_diff : find differences in arrays, not consider keys	
		print_r(array_diff($numeric_arr, $associative_arr));
		echo "<br /><hr />";	

		// 8 array_diff_assoc : find diffs in arrays, include keys
		print_r(array_diff_assoc($numeric_arr, $associative_arr));
		echo "<br /><hr />";	

		// 9 array_diff_key : find diff keys in arrays
		print_r(array_diff_key($combined_arr, $associative_arr));
		echo "<br /><hr />";	

		// 10 array_filter : filter array by user defined func
		function bigger_than_3($var){
			return ($var > 3);
		}
		print_r(array_filter($numeric_arr,'bigger_than_3'));
		echo "<br /><hr />";

		// 11 array_flip : exchanges all keys with their associated values
		print_r($combined_arr);
		echo "<br />";
		print_r(array_flip($combined_arr));
		echo "<br /><hr />";

		// 12 array_intersect_assoc : finds the intersection of arrays, keys and values
		print_r(array_intersect_assoc($associative_arr, $combined_arr));
		echo "<br /><hr />";		

		// 13 differences between array_key_exists() and isset()
		$array_with_null = array('first' => null, 'second' => 1);
		function echo_isset($var){
			return isset($var) ? 1 : 0;
		}
		echo echo_isset($array_with_null['first']);
		echo "<br />";
		echo array_key_exists('first', $array_with_null);
		echo "<br /><hr />";

		// 14 array_map : applies a callback func to an arr
		function plus_one($var){
			return $var + 1;
		}
		print_r(array_map('plus_one', $numeric_arr));
		echo "<br /><hr />";

		// 15 array_merge_recursive: merge arrays
		print_r(array_merge_recursive($associative_arr, $combined_arr));
		echo "<br />"; // elem in second arr are mostly ignored
		print_r(array_merge($associative_arr, $combined_arr));
		echo "<br /><hr />";

		// 16 array_reverse
		print_r(array_reverse($numeric_arr));
		echo "<br /><hr />";

		// 17 array_search
		echo array_search(2, $associative_arr);
		echo "<br /><hr />";

		// 18 array_slice
		print_r(array_slice($numeric_arr, 1,4));
		echo "<br /><hr />";

		// 19 array_splice
		print_r($numeric_arr);
		echo "<br />";		
		array_splice($numeric_arr, -1);
		print_r($numeric_arr);
		echo "<br /><hr />";	
	 ?>
</body>
</html>
