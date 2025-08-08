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
    if(isset($_GET["length"])) {
        $length = $_GET['length'];
    function generate_password($length){
        $characters = "QWERTYUIOPLKJHGFDSAZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890$!?£_.";
        $password = "";
        for($i = 0; $i < $length; $i++){
            $index = random_int(0, strlen($characters) -1);
            $password .= $characters[$index];
          
        } 
         return $password;
    }
    $password = generate_password($length);
     echo "La tua password è: " . $password;
    } else{
        echo "setta la lunghezza";
    }
    
    ?>
   
</body>
</html>