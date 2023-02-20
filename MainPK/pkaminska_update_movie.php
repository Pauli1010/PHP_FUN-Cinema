<?php include '../DBPK/pkaminska_db_connection.php'; ?>
<?php
    $db_connection = new mysqli($hostname, $username, $password, $database);
    $pk_item_query = "SELECT * FROM movies_pk_53327 WHERE id_53327='".$_GET['id']."'";
	$pk_item = $db_connection->query($pk_item_query)->fetch_assoc();

	$pk_update = TRUE;
	if (isset($_POST['name'])) {$name = $_POST['name'];} else {$pk_update = FALSE;}
	if (isset($_POST['price']) && !empty($_POST['price']) ) {$price = $_POST['price'];} else {$pk_update = FALSE;}
  ?>
  <?php
    session_start();
	if ($pk_update){

        $pk_update_item_query = "UPDATE movies_pk_53327 "
                                ."SET name_53327='".$name."', price_53327='".$price."' "
                                ."WHERE id_53327='".$pk_item['id_53327']."';";
        // echo $pk_update_item_query; // line for debugging
        $db_connection->query($pk_update_item_query);
		$db_connection->close();

        $location = 'pkaminska_index_movies.php';
        $_SESSION['message'] = 'Pomyślnie zaktualizowano film';
	} else {
	    $location = 'pkaminska_edit_movie.php';
        $_SESSION['message'] = 'Nie udało się zaktualizować filmu';
	}

    header("Location: $location");
  ?>
