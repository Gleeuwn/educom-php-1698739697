<?php
class Fruit {
    function __destruct() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
      }
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

}

$apple = new Fruit("Apple", "red");
?>