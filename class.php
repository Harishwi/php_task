<?php
class Car {
    private $brand;
    private $model;
    private $color;
    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }
    public function display() {
        echo "Brand: " . $this->brand;
        echo"<br>";
        echo "Model: " . $this->model;
        echo"<br>";
        echo "Color: " . $this->color;
    }
}
$car = new Car("Toyota", "Corolla", "Red");
$car->display();
?>
