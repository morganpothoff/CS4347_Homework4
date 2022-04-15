<?php

	/*//////////////////////////////////////////////////////////////////////////
	/                                                                          /
	/   This document prints messages to the webpage depending upon whether    /
	/   or not there is a user logged in. If there is a user logged in, the    /
	/   webpage says hello and uses their username as their name. If no user   /
	/   is logged in, they are asked to login.                                 /
	/                                                                          /
	//////////////////////////////////////////////////////////////////////////*/


    include_once("./Header.php");


    // Determines if someone has logged in and prints messages
    if(isset($_SESSION["Uname"]))
    {
    	// HTML output for webpage with a successfully logged in account
    	?>
	    	<br/>
	    	<h1>
	    		Hello, <?php echo $_SESSION["Uname"] ?>
			</h1>
    	<?php
    }
    else
    {
    	// HTML output for webpage without a logged in account
    	?>
    		Please login <a href="/LoginPage.php">here</a>
    	<?php
    }
?>
