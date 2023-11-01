<?php
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
const MYCAR = "Volvo";
echo MYCAR;
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();
?>