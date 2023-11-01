<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
sort($cars);
rsort($cars);
echo "<br>";
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

$age = array("Peter"=>"39", "Ben"=>"37", "Joe"=>"43");
asort($age);
foreach($age as $x => $x_value) {
  echo "naam=" . $x . ", leeftijd=" . $x_value;
  echo "<br>";

}

$auto = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $auto[0][0].": In stock: ".$auto[0][1].", sold: ".$auto[0][2].".<br>";
echo $auto[1][0].": In stock: ".$auto[1][1].", sold: ".$auto[1][2].".<br>";
echo $auto[2][0].": In stock: ".$auto[2][1].", sold: ".$auto[2][2].".<br>";
echo $auto[3][0].": In stock: ".$auto[3][1].", sold: ".$auto[3][2].".<br>";
?>