<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$cars = array("Volvo", "BMW", "Toyota");
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

echo json_encode($age);
echo json_encode($cars);

$obj = json_decode($jsonobj);
$arr = json_decode($jsonobj, true);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
echo "<br>";
echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];

foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
  }

foreach($arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
  }
?>