
<html>
<head>
                        <style> 
                                        <?php include '../css/registrationdesign.css'; ?> 
                       </style>
                               
</head>
<body>

       
        <header >
                <h1>Welcome To User Registration</h1>
        </header>

        <section>
        <form name="registrationform" action="../../mvc/controller/registrationdetails.php" method="POST" onsubmit="return validateForm()">
                <div class="sub-container">
                    <label for="username">User Name:</label>
                    <input type="text" name="username" id="username" placeholder="Enter MID" class="reg-details"  autocomplete="off"/>
                    <span class="regerror" id="usernamereq"></span>
                </div>
                <div class="sub-container">
                    <label for="mobile">Mobile:</label>
                    <input type="text" name="mobile" id="mobile" placeholder="Mobile" class="reg-details" autocomplete="off"/>
                    <span class="regerror" id="mobilereq"></span>
                </div>
                <div class="sub-container">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="Email ID" class="reg-details " autocomplete="off"/>
                    <span class="regerror" id="emailreq"></span>
                </div>
                <div class="sub-container"> 
                    <label for="password">Password:</label>
                    <input type="text" name="password" id="password" placeholder="Password" class="reg-details" autocomplete="off"/>
                    <span class="regerror" id="passwordreq"></span>
                </div>

                <div class="sub-container"> 
                    <label for="retypepassword">Re-type Password:</label>
                    <input type="text" name="retypepassword" id="retypepassword" placeholder="Re-type Password" class="reg-details" autocomplete="off"/>
                    <span class="regerror" id="retypepasswordreq"></span>
                </div>


              
                    <input type="submit" value="Submit"  class="reg-details regbtn"/>
                

            
                    <input type="reset" value="Reset" class="reg-details resetbtn" />
                
           
                
        </form >
        </section>

        
        <script src="./js/registrationvalidation.js"></script>
</body>
</html>