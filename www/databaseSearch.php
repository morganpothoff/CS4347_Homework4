
<?php
	require_once 'config.php';
	

	$playerName = $_GET('first');
	$id = $_GET('id');
	
	echo nl2br("You searched for: '$playerName' '$pid' \n");
		
	if($PGDB) echo nl2br("Successfully connected to remote database... \n");
	//connection info comes from config.php
	// Perform SQL query
	$result = pg_query($PGDB, "SELECT * FROM Player WHERE first_name='$playerName' and ID='$id'");
	
	if ($result) {
	
		while($row = pg_fetch_assoc($result)) {
			printf("ID: %d First name %s, Last Name %s \n", $row["id"], $row["first_name"], $row["last_name"]);
		}
	}
	
?>