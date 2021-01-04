
<?php 

    $servere="localhost";
    $user="root";
    $password="";
    $databaseName="user_registration_details";
    $connection=mysqli_connect($servere,$user,$password,$databaseName);

    


    //Establishing MYSQL Connection

    function getDatabaseConnection()
    {
        global $connection;
        if(!$connection)
        {
            die('Failed To Establish Database Connection '. mysqli_connect_error());
        }
        else
        {
            return $connection;
        }
    }

    //Saving Registration Data To Database

    function saveDataToDatabase($username, $mobile,  $email ,$password )
    {
        global $connection;
        $insertDataToDatabase="insert into users_data(username,mobile,email,password) values('$username',' $mobile', ' $email' ,'$password')";
        $isDataInsertedToDatabase=mysqli_query($connection,$insertDataToDatabase);
    
        if($isDataInsertedToDatabase)
        {
            return true;
        }
        else
        {
            echo 'Error Occured While Registering User '.mysqli_error($connection);
            return false;
        }
    }

    
    

   
?>