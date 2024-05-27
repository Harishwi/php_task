<?php
interface Resizable {
    public function resize($factor);
}
class Square implements Resizable {
    private $sideLength;
    public function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }
    public function getArea() {
        return $this->sideLength * $this->sideLength;
    }
    public function resize($factor) {
        $this->sideLength *= $factor;
    }
    public function getSideLength() {
        return $this->sideLength;
    }
}

$square = new Square(4);
echo "Initial side length: " . $square->getSideLength(). ", ";
echo "Initial area: " . $square->getArea();
echo "<br>";
$square->resize(1.5);
echo "New side length after resizing: " . $square->getSideLength(). ", ";
echo "New area after resizing: " . $square->getArea();
?>
