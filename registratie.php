<?php 

require "database.php";

 if (isset($_POST['knop'])) {
    $db->insertInto($_POST['naam'], $_POST['Email'], $_POST['leeftijd']);
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <br><label for="naam">Naam:</label>
        <input type="text" name="naam" required> <br>
        <label for="email">Email:</label>
        <input type="email" name="Email" required> <br>
        <label for="leeftijd">Leeftijd:</label>
        <input type="date" name="leeftijd" required> <br> <br>
        <input type="submit" name="knop">
    </form>
</body>
</html>