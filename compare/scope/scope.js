//public, private, static var && methods

var Shape = function(name){
	// public property
	this.public_name = name ? name : "sha";
	// private property
	var private_name = "shape";
	// private method
	function private_getName(){
		return private_name;
	}
	// privilege method: have access to private var and methods
	// can be invoked from outside, but not altered
	this.privilege_getName = function(){
		//return private_name;
		return private_getName();
	};
};
// public method
Shape.prototype.public_setName = function(name){
	this.public_name = name;
};
// public property
Shape.prototype.public_area = 0;
// static property, can only be accessed by Class name
Shape.static_name = "my_shape";
// static method
Shape.static_getName = function(){
	return Shape.static_name;
}


/**************
	TEST
***************/
var shape = new Shape();
console.log(shape.public_name);
console.log(shape.private_name); // undefind
//console.log(shape.private_getName()); Error
console.log(shape.privilege_getName());
shape.public_setName("shapesha");
console.log(shape.public_name);
console.log(shape.public_area);
console.log(Shape.static_name); // must be called by Shape
console.log(Shape.static_getName());

