<?php
session_start();
$login = "admin";
$haslo = "1234";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["login"];
    $pass = $_POST["haslo"];
    if ($user == $login && $pass == $haslo) {
        $_SESSION["zalogowany"] = true;
        header("Location: zabezpieczona.php");
        exit();
    } 
	else {
        $blad = "Niepoprawny login lub hasło!";
    }
}
?>
<!doctype html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://prusak74.github.io/format.css">
<title>Logowanie</title>
</head>
<body>
<h1>Logowanie</h1>
<form method="POST" action="login.php">
    <label for="login">Login</label><br>
    <input type="text" id="login" name="login"
           value="admin"><br>
    <label for="haslo">Hasło</label><br>
    <input type="password" id="haslo" name="haslo"
           value="1234"><br>
    <input type="submit" value="Zaloguj">
</form>
<?php
if (isset($blad)) {
    echo "<p>" . htmlspecialchars($blad) . "</p>";
}
?>
</body>
</html>