<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->name ='Apple';
$banana->set_name('Banana');
$apple->set_color('red');
$banana->set_color('yellow');

echo $apple->get_name();
echo "<br>";
echo $banana->get_color();
var_dump($apple instanceof Fruit);
?>