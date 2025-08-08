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
     echo "<h5>" . "La tua password è: " . "<p class='text-primary border border-primary mt-2 p-2 col-3'>$password </p>" . "</h5>";
    } else{
        echo "setta la lunghezza";
    }
    
    ?>