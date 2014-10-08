public class Arr {

    public static void main(String[] args) {
        // #1 local var must be init before use, even to a null
        int[] myArr = null;
        System.out.println(myArr);
        
        // ＃2 after init, myArr works as a ref var, like a pointer in c
        // points to a piece of mem in heap to store 5 int real vars
        // when calling certain methods or properties, 
        // ref var is replaced with the actual var 
        // without init, myArr.length will cause 'NullPointerException'
        myArr = new int[5];
        System.out.println(myArr);
        System.out.println(myArr.length);
        
        // #3 arr init
        int[] myArr1 = new int[3];
        int[] myArr2 = new int[]{1,2,3};
        int[] myArr3 = {1,2,3};
        System.out.println(myArr1 + " : " + myArr1.length);
        System.out.println(myArr2 + " : " + myArr2.length);
        System.out.println(myArr3 + " : " + myArr3.length);
        
    }

}
