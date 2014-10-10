public class MultiInherentance {

  public static void main(String[] args) {
    // TODO Auto-generated method stub
    City city2 = new City();
    System.out.println("------------------------------------");
    City city1 = new City("beijing");
  }

}
// #1. non static code and super class constructor will be called,
// when constructor of a subclass is called, as well as its own non-static code 
class Country{
  {
    System.out.println("A non static code block from Country class");
  }
  public Country(){
    System.out.println("original constructor of Country class");
  }
  public Country(String name){
    this();
    System.out.println("The country is : " + name);
  }
}

class City extends Country{
  {
    System.out.println("A non static code block from City class");
  }
  public City(){
    super();
    System.out.println("original contructor of City class");
  }
  public City(String name){
    this();
    System.out.println("The city is : " + name);
    
  }
}
