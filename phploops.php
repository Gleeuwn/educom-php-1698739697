<?php
$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}

$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x is $val jaar oud <br>";
}
$x = 0;

while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}
?>