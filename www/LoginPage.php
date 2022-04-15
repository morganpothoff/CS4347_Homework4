<?php
    function login()
    {
        $required_values = array("Uname", "Pass");

        foreach($required_values as $required_value)
        {
            // Check that all values are set
            if(!isset($_GET[$required_value])!$_GET[$required_value])
            {
                throw new Exception("Value $required_value is not set");
            }

            if(!$_GET[$required_value])
            {
                throw new Exception("Value $required_value cannot be empty");
            }

            $username = $_GET["Uname"]
            $password = $_GET["Pass"]
        }
        // If not all values are set
        //     Reject
        // Else
        //     Accept
    }


    // this is PHP
    if(isset($_GET["login"]))
    {
        if(login())
        {
            // Proceed to homepage
        }
        else
        {
            // Tell them to go fund themselves
        }
    }
    

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h2>Login Page</h2><br>
        <div class="login">
            <form id="login" name="login" method="get" action="Homework4">
                <label>
                    <b>User Name</b>
                </label>
                <input type="text" name="Uname" id="Uname" placeholder="Username">
                <br><br>

                <label>
                    <b>Passwords</b>
                </label>
                <input type="Password" name="Pass" id="Pass" placeholder="Password">
                <br><br>
                <input type="button" name="log" id="log" value="Log In Here">
                <br><br>
                <a href="/CreateAccount">Create Account</a>
            </form>
        </div>
    </body>
</html>