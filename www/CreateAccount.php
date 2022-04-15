<?php

    /*//////////////////////////////////////////////////////////////////////////
    /                                                                          /
    /   This document uses HTML to create a webpage into which a user can      /
    /   enter new login credentials to create an account. These credentials    /
    /   are placed in a form which is then sent to and used by the PHP code to /
    /   check if the user's data matches with the data stored in the database. /
    /   If it is found and matches, the new account is rejected. If their data /
    /   is not found or does not match, the new user's credentials are saved   /
    /   in the database and they are logged in.                                /
    /                                                                          /
    //////////////////////////////////////////////////////////////////////////*/


    include_once("./Header.php");


    // Attempts to create an account
    function createAccount()
    {
        // required_values is an array with form inputs
        $required_values = array("Uname", "Pass");

        // Validate each variable in required_values
        foreach($required_values as $required_value)
        {
            // Check that all values are set
            if(!isset($_POST[$required_value]))
            {
                throw new Exception("Value $required_value is not set");
            }

            // Check that values are not empty
            if(!$_POST[$required_value])
            {
                throw new Exception("Value $required_value cannot be empty");
            }

            // Set form username and password to PHP variables
            $username = $_POST["Uname"];
            $password = $_POST["Pass"];
        }


        // TODO: Compare form values with DB values
        // TODO: Set values in DB if not found


        // Stores username of newly created and logged into account
        $_SESSION["Uname"] = $username;
        $_SESSION["Success"] = true;
        return true;
    }


    // If submit button is clicked, determines success of createAccount()
    if(isset($_POST["submit"]))
    {
        if(createAccount())
        {
            header("Location: ./index.php");
        }
        else
        {
            echo "Could not create an account.";
        }
    }
    
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Create Account Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h2>Create Account</h2><br>
        <div class="login">
            <form method="POST">
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
                <button name="submit" id="submit">
                    Submit
                </button>
                <br><br>
                <a href="/LoginPage.php">Login</a>
            </form>
        </div>
    </body>
</html>