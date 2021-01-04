<?php
    session_start();
    require "../model_db/model_db.php";
    require "../controller/controller.php";
    require "./registrationfieldsvalidation.php";

    $username      =   $_POST['username'];
    $mobile        =   $_POST['mobile'];
    $email         =   $_POST['email'];
    $password      =   $_POST['password'];
    $retypepassword=   $_POST['retypepassword'];

    $connection=getDatabaseConnection();
    if($connection)
    {
    $isAllFieldsAreValid=validateRegistrationFields($username,$mobile,$email,$password,$retypepassword);
    if($isAllFieldsAreValid)
    {
    $isDataSavedToDatabase=saveDataToDatabase($username, $mobile,  $email ,encrypt_password());
    if($isDataSavedToDatabase)
    {
        $_SESSION['onSuccessfulRegistration']=$username;
        $_SESSION['loginusername'] = $username;
        redirectToHomePage();
    }
else
{
    redirectToRegistrationPage();
}
    }
    else
    {
        redirectToRegistrationPage();
    }
    }

?>