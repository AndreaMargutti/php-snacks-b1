<?php 
    $userName = $_GET["firstName"];
    $userMail = $_GET["mail"];
    $userAge = $_GET["age"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Snack 2</h1>
    <form action="snack2.php" method="GET">
        <label for="name">Inserisci il tuo nome:</label>
        <input type="text" id="firstName" name="firstName" placeholder="name">
        <label for="name">Inserisci la tua mail:</label>
        <input type="email" id="mail" name="mail" placeholder="mail">
        <label for="age">Inserisci la tua età:</label>
        <input type="number" id="age" name="age" placeholder="age">
        <button type="submit">Invia</button>
    </form>
</body>

</html>