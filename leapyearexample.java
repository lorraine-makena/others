public class leapyearexample {
    public static void main(String[] args) {
        int number = 4;
        if ((number % 2 == 0) && (number % 2 != 0)) {
            // (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0)) {
            System.out.println("this an even number");
        } else {
            System.out.println("this is an odd number");
        }
    }
}