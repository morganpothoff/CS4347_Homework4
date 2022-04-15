<?php

	/*//////////////////////////////////////////////////////////////////////////
	/                                                                          /
	/   This document prints a message if the session is a success.            /
	/                                                                          /
	//////////////////////////////////////////////////////////////////////////*/


    include_once("./PG_Connection.php");


	session_start();

	// If the session is a success, a success message is printed
	if(isset($_SESSION["Success"]))
	{
		unset($_SESSION["Success"]);
		echo "Something was successful";
	}

?>