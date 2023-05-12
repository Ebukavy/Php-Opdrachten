<!DOCTYPE html>
<html>
<head>
    <title>GET Formulier</title>
</head>
<body>
    <form method="GET" action="get.php">
        <label>Naam:</label>
        <input type="text" name="naam"><br>

        <label>Achternaam:</label>
        <input type="text" name="achternaam"><br>

        <label>Leeftijd:</label>
        <input type="text" name="leeftijd"><br>

        <label>Adres:</label>
        <input type="text" name="adres"><br>

        <label>Email:</label>
        <input type="text" name="email"><br>

        <input type="submit" value="Verzenden">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (!empty($_GET)) {
            echo "<h2>Ingevoerde gegevens:</h2>";
            echo "<p>Naam: " . $_GET["naam"] . "</p>";
            echo "<p>Achternaam: " . $_GET["achternaam"] . "</p>";
            echo "<p>Leeftijd: " . $_GET["leeftijd"] . "</p>";
            echo "<p>Adres: " . $_GET["adres"] . "</p>";
            echo "<p>Email: " . $_GET["email"] . "</p>";
        }
    }
    ?>
</body>
</html>
