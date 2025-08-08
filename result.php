<?php 
session_start();
$password = $_SESSION['password'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generata</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="bg-dark text-white">
    <div class="container">
         <h1>La tua password <?php echo strlen($password)?> di caratteri è stata generata</h1>
    <?php echo "<h3>" . "La tua password è: " . "<p class='text-primary border border-primary mt-2 p-2 col-3'>$password </p>" . "</h3>";
    ?>
    <a href="./index.php" class="btn btn-secondary">torna indietro</a>
    </div>
   
</body>
</html>