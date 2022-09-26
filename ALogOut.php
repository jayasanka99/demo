<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ceciliyan Tea </title>
</head>

<body>

<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location:main.php");
?>

</body>
</html>