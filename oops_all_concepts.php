<?php
class Person{
    public $name;
    public $age;

    function set_name($name){
        return $this->name=$name;
    }
    function get_name(){
        $this->name;
    }
    function set_age($age){
        return $this->age=$age;
    }
    function get_age(){
        $this->age;
    }
}
$username=new person();
$userage=new person();
echo $username->set_name("harish");
echo "<br>";
echo $userage->set_age("33");
?>
<br><br>


<!--CONSTRUCTOR-->

<?php
class Person1{
    public $name;
    public $age;
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function get_name() {
        return $this->name;
    }

    function get_age() {
        return $this->age;
    }
}
$user = new Person1("Harish", 33);
echo $user->get_name();
echo "<br>";
echo $user->get_age();
?>
<br><br>

<!-- INHERITANCE -->

<?php 
class vehicle{
    function drive(){
        echo "Drive Safe";
    }
}
class car extends vehicle{

    function info(){
        echo "All features are available";
    }
}
class car2 extends car{

    function info2(){
        echo "New Model";
    }
}
$veh=new car2();
$veh->drive();
echo "<br>";
$veh->info();
echo "<br>";
$veh->info2();
?>
<br><br>

<!-- PROTECTED -->

<?php
class ParentClass {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    protected function getName() {
        return $this->name;
    }
}
class ChildClass extends ParentClass {
    public function display() {
        return $this->getName();
    }
}
$child = new ChildClass("Arun");
echo $child->display(); 
?>
<br><br>

<!-- PRIVATE -->

<?php
class MyClass {
    private $secret;
    public function __construct($secret) {
        $this->secret = $secret;
    }

    private function revealSecret() {
        return "The secret is: " . $this->secret;
    }
    public function showSecret() {
        return $this->revealSecret();
    }
}
$obj = new MyClass("Hidden Message");
echo $obj->showSecret(); 
?>
<br><br>

<!-- Static keyword - Variable and functions -->

<?php
// class Count{
//     public $count = 0; 
//     public function incrementCount() {
//         $this->count++;
//     }
//     public function getCount() {
//         return $this->count;
//     }
// }
// $obj = new Count();
// echo "Initial count: " . $obj->count . "\n"; 
// $obj->incrementCount(); 
// echo "Count after increment: " . $obj->getCount() . "\n"; 
// $obj->incrementCount(); 
// echo "Count after another increment: " . $obj->getCount() . "\n"; 
?>

<?php
class Count {
    public static $count = 0;
    public static function incrementCount() {
        self::$count++;
    }
    public static function getCount() {
        return self::$count;
    }
}
echo "Initial count: " . Count::$count . "\n";
Count::incrementCount(); 
echo "Count after increment: " . Count::getCount() . "\n";
Count::incrementCount();
echo "Count after another increment: " . Count::getCount() . "\n";
?>
<br><br>

<!-- FINAL -->

<?php
// class MyClass {
//     public final $value = 10;
// }
// $obj = new MyClass();
// echo $obj->value;
?>


<?php
class finalmethod {
    public final function myFunction() {
        return "Final Method";
    }
}
class SubClass extends finalmethod {
    // public function myFunction() {
    //         return "Goodbye, world!";
    //     }
}
$obj = new SubClass();
echo $obj->myFunction(); 
?>
<br><br>

<?php
final class finalclass{
    public function myFunction() {
        return "Final Class";
    }
}
// class finalsubclass extends finalclass {
     
// }
$obj = new finalclass();
echo $obj->myFunction(); // Output: Hello, world!
?>
<br><br>


<!-- Abstract -->

<?php

abstract class Animal{
    abstract public function makesound();
}
class dog extends Animal{
    public function makesound(){
        echo"dog Sound";
    }
}
class cat extends Animal{
    public function makesound(){
        echo"cat Sound";
    }
}

$dogs=new dog();
$dogs->makesound();
echo"<br>";
$cats=new cat();
$cats->makesound();
?>
<br><br>




