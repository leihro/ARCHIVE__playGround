public class ThisInConstructor {

	public static void main(String[] args) {
		// #1. when new an instance of DerivedClass, base class constructor will be first called,
		// "this" will point to DerivedClass and since right now DerivedClass has not been constructed
		// the non-static instance is created and set to 0 || false || null, this.show() will print 0.
		// after super(), when constructor of Derived Class is exec, its own non-static instance will be init
		
		new BaseClass();
		System.out.println();
		new DerivedClass();
	}

}
class BaseClass{
	private int instance = 1;
	public BaseClass(){
		this.show();
		System.out.println("Instance of BaseClass is : " + this.instance);
		System.out.println(this.getClass());
	}
	public void show(){
		System.out.println("In Base Class :: The value of instance is : " + this.instance);
	}
}
class DerivedClass extends BaseClass{
	private int instance = 2;
	public DerivedClass(){
		super();
		System.out.println("Instance of Derived Class is : " + this.instance);
		instance  = 3;
		System.out.println("Instance of Derived Class ===AFTER SET=== is : " + this.instance);
	} 
	public void show(){
		System.out.println("In Derived Class :: The value of instance is : " + this.instance);
	}
}

/*
Result
	In Base Class :: The value of instance is : 1
	Instance of BaseClass is : 1
	class thisInConstructor.BaseClass
	
	In Derived Class :: The value of instance is : 0
	Instance of BaseClass is : 1
	class thisInConstructor.DerivedClass
	Instance of Derived Class is : 2
	Instance of Derived Class ===AFTER SET=== is : 3
 */
