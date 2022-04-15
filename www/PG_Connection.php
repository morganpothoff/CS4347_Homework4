<?php

	$DB_URL = "";
	$DB_PORT = "";
	$DB_NAME = "";
	$DB_USER = "";
	$DB_PASSWORD = "";

	$POSTGRESQL = pg_connect("host=$DB_URL port=$DB_PORT dbname=$DB_NAME user=$DB_USER password=$DB_PASSWORD") or die();

?>