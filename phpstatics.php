<?php
class A {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  
  class B {
    public function message() {
      A::welcome();
    }
  }
  
  $obj = new B();
  echo $obj -> message();

  class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  
    public function __construct() {
      self::welcome();
    }
  }
  
  new greeting();
?>