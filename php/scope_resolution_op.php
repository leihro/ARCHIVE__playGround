<html>
<head>
	<title>scope resolution operator</title>
</head>
<body>
	<?php
		class Base{
			public static $int_static_base = 1;
			public $int_non_base = 10;

			public static function static_plusplus(){
				echo "just static ++" . "<br />";
				self::$int_static_base++;
			}
			public function plusplus(){
				echo "just non static ++" . "<br />";
				$this->int_non_base++;
			}
		}
		class Derived extends Base{
			public function plusplus(){
				echo "both static and non-static ++" . "<br />";
				parent::plusplus();
				parent::static_plusplus();
				parent::$int_static_base++;
			}
		}
		$derived = new Derived();
		$derived->plusplus();

		echo "static value is : " . Derived::$int_static_base;
		// oder $derived::$int_static_base
		echo "<br />";
		echo "non-static value is : " . $derived->int_non_base;
	 ?>
</body>
</html>
