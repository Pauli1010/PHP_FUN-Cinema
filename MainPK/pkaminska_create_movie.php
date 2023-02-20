<?php
	$pk_item = TRUE; 
	if (isset($_POST['name'])) {$name = $_POST['name'];} else {$pk_item = FALSE;}
	if (isset($_POST['price']) && !empty($_POST['price']) ) {$price = $_POST['price'];} else {$pk_item = FALSE;}
  ?>
  <?php include '../DBPK/pkaminska_db_connection.php'; ?>
  <?php
    session_start();
	if ($pk_item){
		$pk_connection = new mysqli($hostname, $username, $password, $database);
		if ($pk_item) {
			$pk_add_item_query = "INSERT INTO movies_pk_53327(name_53327, price_53327)";
			$pk_add_item_query .= "VALUES('".$name."','".$price."')";
			// echo $pk_add_item_query; // line for debugging
			$pk_connection->query($pk_add_item_query);
		}	
		$pk_connection->close();

        $location = 'pkaminska_index_movies.php';
        $_SESSION['message'] = 'Pomyślnie dodano film';
	} else {
	    $location = 'pkaminska_new_movie.php';
        $_SESSION['message'] = 'Nie udało się dodać filmu';
	}

    header("Location: $location");
  ?>
