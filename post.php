<!DOCTYPE html>
<html>
<head>
    <title>POST Formulier</title>
</head>
<body>
    <form method="POST" action="post.php">
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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST)) {
            echo "<h2>Ingevoerde gegevens:</h2>";
            echo "<p>Naam: " . $_POST["naam"] . "</p>";
            echo "<p>Achternaam: " . $_POST["achternaam"] . "</p>";
            echo "<p>Leeftijd: " . $_POST["leeftijd"] . "</p>";
            echo "<p>Adres: " . $_POST["adres"] . "</p>";
            echo "<p>Email: " . $_POST["email"] . "</p>";
        }
    }
    ?>
</body>
</html>
