<?php

	require_once 'config.php';
	if($PGDB) echo nl2br("Successfully connected to remote database... \n");
	//connection info comes from config.php
	// Perform SQL query
	$result = pg_query($PGDB, "SELECT * FROM Player");
	
	// Printing results
	if($result)
	{
		while($row = pg_fetch_assoc($result))
		{
			printf("%s    %s    %s", $row["team"], $row["first_name"], $row["last_name"]);
			echo nl2br("\n");
		}
	}

?>