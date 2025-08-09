<?php
      $password = "";
    if(isset($_GET["length"])) {
        $length = intval($_GET['length']);
    function generate_password($length){
        $letters = "QWERTYUIOPLKJHGFDSAZXCVBNMqwertyuiopasdfghjklzxcvbnm";
        $numbers = "1234567890";
        $symbols = "$!?£_.%&=";
        $allchar = "";
        if(isset($_GET['letters']) && $_GET['letters'] == "on"){
            $allchar .= $letters;
        }
             if(isset($_GET['numbers']) && $_GET['numbers'] == "on"){
            $allchar .= $numbers;
        }
             if(isset($_GET['symbols']) && $_GET['symbols'] == "on"){
            $allchar .= $symbols;
        }
        $message = "";
                 if($allchar == ""){
            $message = "Scegli cosa includere";
         }
       
        for($i = 0; $i < $length; $i++){
            $index = random_int(0, strlen($allchar) -1);
            $password .= $allchar[$index];
          
        } 
         return $password;
    }
    $password = generate_password($length);
    } 
    
    ?>