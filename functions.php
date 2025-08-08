<?php
      $password = "";
    if(isset($_GET["length"])) {
        $length = $_GET['length'];
    function generate_password($length){
        $characters = "QWERTYUIOPLKJHGFDSAZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890$!?£_.";
       
        for($i = 0; $i < $length; $i++){
            $index = random_int(0, strlen($characters) -1);
            $password .= $characters[$index];
          
        } 
         return $password;
    }
    $password = generate_password($length);
    } 
    
    ?>