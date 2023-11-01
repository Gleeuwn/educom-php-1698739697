<?php
declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, 5);
// since strict is enabled and "5 days" is not an integer, an error will be thrown

function writeMsg() {
  echo "Hello world!<br>";
}

writeMsg();

function familyName($fname, $year) {
  echo "$fname Brennand. born in $year<br>";
}

familyName("James", "1960");
familyName("Chantal", "1966");
familyName("Kristel", "1990");
familyName("Dylan", "1992");
familyName("Glenn", "1996");

function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";

function addNumber(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumber(1.2, 5.2);

function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>