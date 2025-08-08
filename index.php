<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator</title>
</head>
<body>
    <form method="GET">
<label for="length">Lunghezza password:
    <input name="length" id="length" type="number" min="5" max="20" placeholder="min. 5">
</label>
<button type="submit">Invia</button>
    </form>
<?php
require_once './functions.php';
?>
   
</body>
</html>