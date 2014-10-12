public class BaseAndDerived {

	public static void main(String[] args) {
		BaseClass bc = new BaseClass();
		bc.show();
		System.out.println(bc.num);
		System.out.println();
		
		DerivedClass dc = new DerivedClass();
		dc.show();
		System.out.println(dc.num);
		System.out.println();
		// #1. bdc is baseClass type, this.num will access mem var in its own (BASE) class
		// however this.show() will involke show() method from its actual type DerivedClass()
		BaseClass bdc = new DerivedClass();
		bdc.show();
		System.out.println(bdc.num);
		System.out.println();
		
		BaseClass bcd = dc;
		bcd.show();
		System.out.println(bcd.num);
		System.out.println();
	}

}

class BaseClass{
	public int num = 1;
	public void show(){
		System.out.println(this.num);
	}	
}
class DerivedClass extends BaseClass{
	public int num = 2;
	@Override
	public void show() {
		System.out.println(this.num);
	}
}
