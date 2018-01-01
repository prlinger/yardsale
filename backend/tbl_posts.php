<?php 
	require_once "db_conn.php";

	$sql = "CREATE TABLE IF NOT EXISTS postdata (
				id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				title VARCHAR(100),
				description TEXT,
				date TIMESTAMP
			)";

	
?>