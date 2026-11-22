<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $street = $_POST["strt"];
    $city = $_POST["city"];
    $county = $_POST["county"];
    $birthday = $_POST["birthday"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $car = $_POST["car"];
    $message = $_POST["message"];
}
?>

<!doctype html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://prusak74.github.io/format.css">
<title>Kwestionariusz</title>
</head>
<body>

<h1>Kwestionariusz</h1>

<form method="POST" action="index.php">
<label for="fname">Imię</label><br>
	<input type="text" id="fname" name="fname" required><br>
	<label for="lname">Nazwisko</label><br>
	<input type="text" id="lname" name="lname" required><br>
	<label for="strt">Ulica</label><br>
	<input type="text" id="strt" name="strt" required><br>
	<label for="city">Miasto</label><br>
	<input type="text" id="city" name="city" required><br>
	<label for="county">Województwo </label>
	<select id="county" name="county" required><br>
		<option value="maz">mazowieckie</option>
		<option value="lod">łódzkie</option>
		<option value="swk">świętokrzyskie</option>
		<option value="pod">podlaskie</option>
		<option value="lub">lubelskie</option>
	</select><br>
	<label for="birthday">Data urodzenia</label><br>
	<input type="date" id="birthday" name="birthday" required><br>
	<label for="number">Nr Telefonu<br><small>Format: +48 000 000 000 lub 000 000 000</small></label><br>
	<input type="tel" id="number" name="number" required><br>
	<label for="email">Email</label><br>
	<input type="email" id="email" name="email" required><br>
	<label for="pass">Hasło</label><br>
	<input type="password" id="pass" name="pass" required><br>
	<label for="car">Czy posiadasz prawo jazdy?</label><br>
	<input type="radio" id="yes" name="car" value="yes"> <label for="yes">Tak</label>
	<input type="radio" id="no" name="car" value="no" checked="checked"> <label for="no">Nie</label><br>
	<label for="message">Uwagi</label><br>
	<textarea name="message" rows="10" cols="30"></textarea><br>
	<input type="submit" value="Ok">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Wprowadzone dane:</h2>";

    echo "Imię: " . htmlspecialchars($fname) . "<br>";
    echo "Nazwisko: " . htmlspecialchars($lname) . "<br>";
    echo "Ulica: " . htmlspecialchars($street) . "<br>";
    echo "Miasto: " . htmlspecialchars($city) . "<br>";
    echo "Województwo: " . htmlspecialchars($county) . "<br>";
    echo "Data urodzenia: " . htmlspecialchars($birthday) . "<br>";
    echo "Telefon: " . htmlspecialchars($number) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Hasło: " . htmlspecialchars($pass) . "<br>";
    echo "Prawo jazdy: " . htmlspecialchars($car) . "<br>";
    echo "Uwagi: " . htmlspecialchars($message) . "<br>";
}
?>
</body>
</html>