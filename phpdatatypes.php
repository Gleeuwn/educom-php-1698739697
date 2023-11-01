<?php
class Car {
  public $color;
  public $model;
  public $year;
  public function __construct($color, $model, $year) {
    $this->color = $color;
    $this->model = $model;
    $this->year = $year;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . " from the year " . $this->year . "!";
  }
}

$myCar = new Car("black", "Volvo", "1996");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota", "2012");
echo $myCar -> message();
?>