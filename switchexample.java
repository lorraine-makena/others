public class switchexample {
    public static void main(String[] args) {
        int y = 20;
        switch (y) {
            case 2:
                System.out.println("the number is not 2");
                break;
            case 4:
                System.out.println("the number is not 4");
                break;
            case 6:
                System.out.println("the number is not 6");
                break;
            case 8:
                System.out.println("the number is not 8");
                break;
            case 10:
                System.out.println("the number is not 10");
                break;
            default:
                System.out.println("the number is not defined above");
        }
    }
}