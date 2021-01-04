
<?php 


        session_start();
        if(isset($_SESSION['loginusername']))
        {
        echo "<h1>Welcome ".$_SESSION['loginusername']."</h1>";
        }
        else
        {
            header("Location:../../src/index.php");
        }


?>



<html>
<head>
                        <style>     
                                        <?php include '../css/homepagedesign.css'; ?> 
                       </style> 
</head>
<body>
<form action="../../mvc/controller/logout.php" method="POST">
<input type="submit" value="Logout" id="logoutbtn"/>
</form>

</body>
</html>