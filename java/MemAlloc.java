public class MemAlloc {

  public static void main(String[] args) {
    // no matter init when created or in a non-static block, the actual init is done
    // in the constructor, and the final value depend on the written order.
    
    Mem mem1 = new Mem();
    Mem mem2 = new Mem(5);
    mem1.show();
    mem2.show();
    // #3. through instance of the Price class, when calling the constructor
    // the initPrice is set to 0, so the current price is -5, even thought the 
    // initPrice is later set to 50, when calling the constructor now, 
    // the current price will be 50-5.
    System.out.println(Price.instance.currentPrice);
    Price price = new Price(5);
    System.out.println(price.currentPrice);
  }

}

class Mem {
  // #1. only when num2 is static var in class and num1 is non-static, 
  // num1 can use num2 "before" num2 is created
  // because non-static var is init with obj, whereas static var is init with class
  int num1 = num2 + 1;
  static int num2 = 20;
  // #2. 3 ways of init a non-static var: non-static code block, when created, constructor
  {
    weight = 2.0;
  }
  double weight = 2.5;
  public Mem(){
    
  }
  public Mem(int num1){
    // in constructor is where class instance finally set.
    this.num1 = num1;
  }
  public void show(){
    System.out.println("Num1 : " + num1 + ", weight : " + weight);
  }

}
class Price {

  public Price(int discount){
    currentPrice = initPrice - discount;
  }
  static Price instance = new Price(5);
  static int initPrice = 50;
  int currentPrice;
}
