<?php
class person{
     
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
$per=new person();
$per_age=new person();
echo $per->set_name("harish");
echo "<br>";
echo $per->set_age("23");

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


<?php
class ParentClass {
    public function show() {
        echo "Show from ParentClass\n";
    }
}

class ChildClass extends ParentClass {
    public function show() {
        echo "Show from ChildClass\n";
    }
}

$child = new ChildClass();
$child->show();
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

<?php
class BankAccount {
    private $accountNumber;
    private $balance;
    protected $accountHolder;

    public function __construct($accountNumber, $accountHolder, $balance) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getAccountHolder() {
        return $this->accountHolder;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function setBalance($amount) {
        if ($amount >= 0) {
            $this->balance = $amount;
        }
    }

    public function displayAccountInfo() {
        echo "Account Number: " . $this->getAccountNumber() . "<br>";
        echo "Account Holder: " . $this->getAccountHolder() . "<br>";
        echo "Balance: " . $this->getBalance() . "<br>";
    }
}

// Example usage
$account = new BankAccount("123456789", "John Doe", 1000);
$account->displayAccountInfo(); // Outputs all account information

$account->setBalance(1500);
$account->displayAccountInfo(); // Outputs updated account information
?>

