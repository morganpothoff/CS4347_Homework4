<?php

require_once 'config.php';

echo nl2br("Is this thing on? \n");

try {
	$dsn = "pgsql:host=$host;port=5432;dbname=$db;";
	// make a database connection
	$pdo = new PDO($dsn, $user, "masterblaster", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

	if ($pdo) {
		echo nl2br("Connected to the database successfully!\n");
	}
} catch (PDOException $e) {
	die($e->getMessage());
}

echo "Database name: ";
echo pg_dbname();

?>