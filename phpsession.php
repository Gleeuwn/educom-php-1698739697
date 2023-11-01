<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favcolor"] = "yellow";
$_SESSION["favanimal"] = "lion";
echo "Session variables are set.";
?>

</body>
</html>