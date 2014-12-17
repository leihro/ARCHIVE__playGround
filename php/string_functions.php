<html>
<head>
	<title>string functions</title>
</head>
<body>
	<?php 
		$str = "    <strong>Today</strong> I' had a pizza!       ";
		$needle = "Today i";
		$find = "had";

		5. modification
		echo str_shuffle($str);
		echo "<br>";
		echo md5(str_shuffle($str));
		echo "<br>";
		echo md5($str);
		echo "<br>";
		echo htmlentities($str);
		echo "<br>";
		echo html_entity_decode($str);
		echo "<br>";
		echo addslashes($str);
		echo "<br>";
		echo stripslashes($str);
		echo "<br><hr>";

		// 4. search
		var_dump(strstr($str, $needle));
		echo "<br>";
		var_dump(stristr($str, $needle));
		echo "<br>";
		echo strpos($str, $find);
		echo "<br>";
		echo str_replace($find, "didnot have", $str);
		echo "<br><hr>";


		// 3. count
		echo str_word_count($str);
		echo "<br>";
		echo strlen($str);
		echo "<br>";
		echo strlen(trim($str));
		echo "<br><hr>";

		// 2. case 
		var_dump(ucwords($str));
		echo "<br>";
		var_dump(strtoupper($str));
		echo "<br>";
		var_dump(strtolower($str));
		echo "<br><hr>";

		// 1. trim
		var_dump(ltrim($str));
		echo "<br>";
		var_dump(rtrim($str));
		echo "<br>";
		var_dump(trim($str));
		echo "<br><hr>";		
	 ?>
</body>
</html>
