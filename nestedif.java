public class nestedif {
    public static void main(String[] args) {
        int age = 19;
        int weight = 40;
        if (age >= 18) {
            if (weight > 40) {
                System.out.println("you are an adult ! you can consider donating blood");

            } else {
                System.out.println("sorry you are under age.Grow up first");
            }
        } else {
            System.out.println("you cannot donate blood! kindly consider investing more on eating");
        }
    }
}
