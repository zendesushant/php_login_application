




<html>
<head>
                       <style> 
                                        <?php include './css/logindesign.css'; ?> 
                       </style>
                               
</head>
<body>

       
        <header >
                <h1>Welcome To User Login</h1>
        </header>

        <section>
        <form action="../mvc/controller/verifyLoginCredentials.php" method="POST">
                <div class="login-details">
                    <label for="username">User Name:</label>
                    <input type="text" name="loginusername" placeholder="Enter MID" class="login-fields"/>
                </div>
                <div class="login-details"> 
                    <label for="password">Password:</label>
                    <input type="text" name="loginpassword" placeholder="Password"  class="login-fields"/>
                </div>
              
                <input type="submit"  value="Login" class="loginbtn login-fields"/>
                <a class="createaccountbtn login-fields" href="./html/registration.php">Create New Account</a>
        </form >
                  
                
                

              
        </section>

        

</body>
</html>