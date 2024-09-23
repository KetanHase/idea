2. Write a Java Program to implement Factory method for Pizza Store with createPizza,
orederPizza, prepare. Bake, cut, box. Use this to create variety of pizza's like
NyStyleCheesePizza
abstract class Pizza {
public abstract void prepare();
public abstract void bake();
public abstract void cut();
public abstract void box();
}
class NYStyleCheesePizza extends Pizza {
public void prepare() { System.out.println("Preparing NY Style Cheese Pizza"); }
public void bake() { System.out.println("Baking NY Style Cheese Pizza"); }
public void cut() { System.out.println("Cutting NY Style Cheese Pizza"); }
public void box() { System.out.println("Boxing NY Style Cheese Pizza"); }
}
abstract class PizzaStore {
public Pizza orderPizza(String type) {
Pizza pizza = createPizza(type);
pizza.prepare();
pizza.bake();
pizza.cut();
pizza.box();
return pizza;
}
protected abstract Pizza createPizza(String type);
}
class NYPizzaStore extends PizzaStore {
@Override
protected Pizza createPizza(String type) {
if (type.equals("cheese")) {
return new NYStyleCheesePizza();
}
return null;
}
}
public class ex {
public static void main(String[] args) {
PizzaStore store = new NYPizzaStore();
store.orderPizza("cheese");
}
}
