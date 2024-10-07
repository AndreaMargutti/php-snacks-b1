<?php 
require_once (__DIR__ . "/../functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Snack 5 - Functions PHP</h1>
    <main>
        <form action="./index.php" method="POST">
            <label for="word">Inserisci la tua parola:</label>
            <input type="text" name="word" id="word">
            <button type="submit">Send</button>
        </form>

        <div id="result">
            <?php if(true) { ?>
            <p>La parola è palindroma</p>
            <? } else { ?>
            <p>La parola NON è palindroma</p>
            <?php } ?>
        </div>
    </main>
</body>

</html>