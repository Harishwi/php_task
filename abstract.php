<!-- Write a PHP abstract class called 'Animal' with abstract methods like 'eat()' and 'makeSound()'.
 Create subclasses like 'Dog', 'Cat', and 'Bird' that implement these methods. -->
<?php
abstract class Animal {
    abstract public function eat();
    abstract public function makeSound();
}
class Dog extends Animal {
    public function eat() {
        echo "The dog is eating.";
    }
    public function makeSound() {
        echo "The dog sound: Boow! Boow!";
        echo"<br>";
    }
}
class Cat extends Animal {
    public function eat() {
        echo "The cat is eating.";
    }
    public function makeSound() {
        echo "The cat sound: Meow! Meow!";
        echo"<br>";
    }
}
class Bird extends Animal {
    public function eat() {
        echo "The bird is eating.";
    }
    public function makeSound() {
        echo "The bird sound: Tweet! Tweet!";
    }
}
$dog = new Dog();
$cat = new Cat();
$bird = new Bird();

$dog->eat();
$dog->makeSound();

$cat->eat();
$cat->makeSound();

$bird->eat();
$bird->makeSound();
?>
