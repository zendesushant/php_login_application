<?php 
   session_start();
   require "../controller/controller.php";
    
    if((isset($_SESSION['loginusername'])))
    {
        unset($_SESSION['loginusername']);
        redirectToLoginPage();    
    }

    else{
        unset($_SESSION['loginusername']);
         redirectToLoginPage(); 
        
    }


?>