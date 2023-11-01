<?php
$url = "https://www.w3schools.com";
$email = "john.doe@example.com";
$ip = "127.0.0.1";
$int = 0;
$str = "<h1>Hello World!</h1>";
// Remove all illegal characters
$url = filter_var($url, FILTER_SANITIZE_URL);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$newstr = filter_var($str, FILTER_SANITIZE_STRING);

// Validate
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address");
  } else {
    echo("$ip is not a valid IP address");
  }
if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
  } else {
    echo("Integer is not valid");
  }
echo $newstr;
?>