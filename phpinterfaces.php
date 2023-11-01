<?php
interface Animal {
  public function makeSound();
}
class Cat implements Animal {
  public function makeSound() {
    echo " Miauw ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Woef ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Piep ";
  }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

foreach($animals as $animal) {
  $animal->makeSound();
}
?>