// JS :: constructor, inheritance, method override, call method && constructor from super class

// super class constructor
function Shape(name){
	this.name = name;
}
// attributes and methods
Shape.prototype = {
	area : 0,
	getArea : function(){
		return this.area;
	},
	setArea : function(area){
		this.area = area;
	}
};

function Circle(name){
	//call parent constructor
	Shape.apply(this, arguments);
}


// simple inherit
Circle.prototype = new Shape();
Circle.prototype.constructor = Circle;
Circle.parent = Shape.prototype;

//override getArea() method 
Circle.prototype.getArea = function(){
	console.log("Call this method from Circle");
	return Circle.parent.getArea.apply(this);
};

var circle = new Circle('cir');
circle.setArea(20);
console.log(circle.getArea());


/*
Better way to inherit
function inherit(obj){
	function Temp(){}
	Temp.prototype = obj;
	return new Temp();
}
Circle.prototype = inherit(Shape.prototype);
Circle.prototype.constructor = Circle;
Circle.parent = Shape.prototype;
*/