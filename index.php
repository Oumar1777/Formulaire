<?php
require("Controller/controller.php");

if(isset($_GET['location']))
{
    switch($_GET['location'])
    {
        case $_GET['location'] == "login":
            loginPage();
            break;

        case $_GET['location'] == "signUp":
            signUpPage();
            break;
        
        case $_GET['location'] == "loginCheck":
            loginCheck();
            break;
       
        case $_GET['location'] == "signUpCheck":
            signUpCheck();
            break;
        
        default:
            loginPage();
    }
}
else
{
    loginPage();
}

?>