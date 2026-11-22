<?php
session_start();
if (!isset($_SESSION["zalogowany"]) || $_SESSION["zalogowany"] !== true) {
    header("Location: login.php");
    exit();
}
if (isset($_POST["wyloguj"])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://prusak74.github.io/format.css">
<title>Zabezpieczona</title>
</head>
<body>

<h1>Zalogowano pomyślnie.</h1>

<form method="POST">
<input type="submit" name="wyloguj" value="Wyloguj">
</form>
</body>
</html>