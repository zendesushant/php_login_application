function validateForm() {
     if( document.getElementById("username").value == "" )
    {
       document.getElementById("usernamereq").innerHTML="* This Field is Required";
       return false;
    }
    
 }
