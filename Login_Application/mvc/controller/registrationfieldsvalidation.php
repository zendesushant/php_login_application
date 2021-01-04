<?php
    session_start();
    function validateRegistrationFields($username,$mobile,$email,$password,$retypepassword)
    {
    if(isset($username) & !empty($username))
    {
        $_SESSION['regusername']=$username;
        if(isset($mobile) & !empty($mobile))
        {
            $_SESSION['regmobile']=$mobile;
            if(isset($email) & !empty($email))
            {
                $_SESSION['regemail']=$email;
                if(isset($password) & !empty($password))
                {
                    $_SESSION['regpassword']=$password;
                    if(isset($retypepassword) & !empty($retypepassword))
                    {
                        $_SESSION['regretypepassword']=$retypepassword;
                        return true;
                    }
                    else
                    {
                        unset($_SESSION['regretypepassword']);
                        return false;
                    }
                }
                else
                {
                    unset($_SESSION['regpassword']);
                    return false;
                }
            }
            else
            {
                unset($_SESSION['regemail']); 
                return false;
            }
        }
        else
        {
            unset($_SESSION['regmobile']);
            return false;
        }
    }
    else
    {
        unset($_SESSION['regusername']);
        return false;
    }
    
    }
?>