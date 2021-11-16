public class ifelseifexample {
    public static void main(String[] args) {

        int salary = 100000;
        if (salary >= 10000 && salary <= 20000) {
            System.out.println("this is a secretary's salary");
        } else if (salary >= 20000 && salary <= 30000) {
            System.out.println("this is a cashier");
        } else if (salary >= 30000 && salary <= 50000) {
            System.out.println("this is a sales manager salary");
        } else if (salary >= 50000 && salary <= 90000) {
            System.out.println("this is a manager's salary");
        } else {
            System.out.println("this is a C.E.O's salary");
        }
    }
}
