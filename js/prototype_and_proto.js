function BaseClass(name) {
	this.name = name;
	console.log("Constructor of Base Class");
}


/*********************************
	prototype && __proto__
**********************************/
var BaseInstance = new BaseClass('wola');
//	in JS everything is an obj, 
//	using __proto__ can always find the constructor of the current instance
console.log(BaseInstance.__proto__ === BaseClass.prototype);		//true
console.log(BaseClass.__proto__ === Function.prototype);			//true
console.log(BaseClass.__proto__.__proto__ === Object.prototype);	//true
console.log(BaseInstance instanceof BaseClass);						//true
console.log(BaseClass instanceof Function);							//true
console.log(BaseClass instanceof Object);							//true
