<?php
        session_start();
        require "../model_db/model_db.php";
        require "../controller/controller.php";
    
        
        $connection=getDatabaseConnection();
        if($connection)
        {
       
        $isvalidUser=verifyUser($_POST['loginusername'],$_POST['loginpassword']);
        if($isvalidUser)
        {
            $_SESSION['loginusername']=$_POST['loginusername'];
            redirectToHomePage();
        }
        else
        {
            redirectToLoginPage();
        }
        }
    
?>