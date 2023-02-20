<?php
	$db_connection = new mysqli($hostname, $username, $password, $database);
	$pk_item_query = "SELECT * FROM movies_pk_53327 WHERE id_53327='".$_GET['id']."'";
	$pk_item = $db_connection->query($pk_item_query)->fetch_assoc();
	$db_connection->close();
?>