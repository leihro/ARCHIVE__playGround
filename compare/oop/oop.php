<?php 
// PHP :: constructor, inheritance, method override, call method && constructor from super class
	class Shape {
		// attributes and methods
		protected $name;
		public $area;
		// super class constructor
		function __construct($name) {
			$this->name = $name;
		}
		public function getArea() {
			return $this->area;
		}
		public function setArea($area) {
			$this->area = $area;
		}
	}

	class Circle extends Shape {
		function __construct($name){
			//call parent constructor
			parent::__construct($name);
			echo "create circle shape : " . $this->name . "<br />";
		}
		// override getArea() methods
		public function getArea(){
			echo "Call this method from Circle. <br />";
			echo parent::getArea();
		}
	}

	$circle = new Circle('cir');
	$circle->setArea(20);
	$circle->getArea();
 ?>