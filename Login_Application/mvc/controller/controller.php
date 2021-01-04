<?php 

//Encrypts Password 
function encrypt_password()
{
$encryptedpassword=password_hash($_POST['password'],PASSWORD_BCRYPT); 
return $encryptedpassword;
}


//On Successfull login or Registration Redirects to Home Page
function redirectToHomePage()
{
    if(isset($_SESSION['onSuccessfulRegistration']) || isset($_SESSION['loginusername']))
    {
        header("Location:../../src/html/homepage.php");
    }
    else
    {
       header("Location:../../src/index.php");
    }
}

function redirectToLoginPage()
{
        header("Location:../../src/index.php");
 
}

function redirectToRegistrationPage()
{
        header("Location:../../src/html/registration.php");
 
}

//Verify if the User is valide
function verifyUser($username,$password)
{
    $isVerified=decrypt_password($username,$password);
    if($isVerified)
    {
        return true;
    }
    else
    {
        return false;
    }
}

//Returns Decrypted Password

function decrypt_password($username,$password)
{
    
    $hashed_password=getHashedPasswordFromDatabase($username,$password);
    $decryptedResult=password_verify (  $password , $hashed_password );
    return $decryptedResult;
    
}

//Retruns Hased Password From Database to decrypt_password FUNCTION
function getHashedPasswordFromDatabase($username,$password)
{
    global $connection;
    $getUserData="SELECT * FROM users_data WHERE username = '$username'";
    $isQueryExecuted=mysqli_query($connection,$getUserData) or die("Query Failed to Execute");
    if($isQueryExecuted)
    {
        while($row=mysqli_fetch_assoc($isQueryExecuted))
        {
            
            return $row['password'];               
        }
    }
    return false;
}



?>