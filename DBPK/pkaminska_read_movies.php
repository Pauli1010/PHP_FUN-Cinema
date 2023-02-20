<?php
	$db_connection = new mysqli($hostname, $username, $password, $database);
	$pk_all_items_query = "SELECT * FROM movies_pk_53327";
	$pk_all_items = $db_connection->query($pk_all_items_query);
	$db_connection->close();
	$pk_items_count = $pk_all_items->num_rows;
?>
