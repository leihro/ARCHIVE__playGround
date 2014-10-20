<?php 
	class Shape{
		var $area;
		private $name;

		function set_name($name){
			$this->name = $name;
		}
		function get_name($name){
			return $this->name;
		}
	}
	$circle = new Shape();

	$circle->area = 20;
	echo $circle->area . "<br />";

	$circle->set_name("circle");
	echo $circle->get_name() . "<br />";

	// 1. class_exists(classname)
	if(class_exists('Shape')){
		echo "class 'Shape' exists" . "<br />";
	} else {
		echo "class 'Shape' does not exist" . "<br />";
	}
	// 2. property_exists(classname, string);
	if(property_exists('Shape', 'name')){
		echo "in class 'Shape' there is a 'name' property" . "<br />";
	} else {
		echo "in class 'Shape' there is not a 'name' property" . "<br />";
	}
	// 3. get_class_vars(classname)
	$class_vars = get_class_vars('Shape');
	foreach ($class_vars as $key => $value) {
		echo "key : {$key}, value : {$value} <br />";
	}
	// 4. get_class_methods(classname)
	$class_methods = get_class_methods('Shape');
	foreach ($class_methods as $value) {
		echo "value : {$value} <br />";
	}
	// 5. get_class(object)
	echo get_class($circle) . "<br />";

	// 6. is_a(object, classname)
	if(is_a($circle, 'Shape')){
		echo "circle is a shape";
	} else {
		echo "circle is not a shape";
	}


 ?>
