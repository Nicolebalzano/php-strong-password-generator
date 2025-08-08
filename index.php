<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <div class="container mt-5">
<h1 class="mb-5">Genera la tua password sicura</h1>
        <form method="GET" class="form">
<label for="length" class="input-group-sm">Lunghezza password:
    <input name="length" id="length" type="number" min="5" max="20" placeholder="min. 5"  class="form-control">
</label>
<button type="submit" class="btn btn-secondary">Invia</button>
    </form>
<?php
require_once './functions.php';
?>

    </div>

</body>
</html>