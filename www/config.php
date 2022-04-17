<?php

	$host="ls-99428edba7c928b0c62ad0e6cd11c0ece8660db3.ciw1f5witzxf.us-east-2.rds.amazonaws.com";
	$db="BaseballLeague";
	$user="dbmasteruser";
	$password="masterblaster";
	
	$PGDB= pg_connect(" host=$host port=5432 dbname=$db user=$user password=$password ") or die();
?>