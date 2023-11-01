<?php
setcookie("test_cookie", "test", time() + 3600, '/');
$cookie_name = "user";
$cookie_value = "John Doe";
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

</body>
</html>