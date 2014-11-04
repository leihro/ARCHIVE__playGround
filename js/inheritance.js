
function BaseClass(name) {
	this.name = name;
	console.log("Constructor of Base Class");
}
//	all instances created by target Class will have the properties and methods from prototype
BaseClass.prototype = {
	getName: function(){
		return this.name;
	},
	setName: function(name){
		this.name = name;
	},
	show: function(){
		console.log("this show() is from base class");
	},
	flag: true
};

function DerivedClass(name) {
	this.name = name;
	console.log("Constructor of Derived Class");
}


/*****************
	JS Inheritance
******************/

//	inherit prototype from pararm obj, output a temp instance
function inherit(obj) {
	function Temp(){

	}
	//	set prototype of temp class to whatever is passed in
	Temp.prototype = obj;
	//	return the instance with prototype of param obj
	return new Temp();
}


//	In this way: the prototype of DerivedClass is the same as the Base Class,
//	But constructor of any instance created by the Derived Class will be Object, which is wrong
//	DerivedClass.prototype = inherit(BaseClass.prototype);


//	set prototype of derived Class to the instances with inherited prototype
DerivedClass.prototype = inherit(BaseClass.prototype);
//	set the constructor of instances with inherited prototype to Derived Class
DerivedClass.prototype.constructor = DerivedClass;
DerivedClass.parent = BaseClass.prototype;

DerivedClass.prototype.flag = false;
DerivedClass.prototype.show = function(){
	//	call method from base class
	DerivedClass.parent.show.apply(this);
	console.log("call Baseclass show() first and show in the derived class");
}
//	now DerivedClass has inherited all the attribute from Base Class 
//	and is ready to override some properties or methods
var derivedInstance = new DerivedClass('nooa');

console.log(derivedInstance.flag);
console.log(derivedInstance.show());


