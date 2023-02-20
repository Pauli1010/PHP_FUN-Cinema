<?php
    $location = 'pkaminska_index_movies.php';
	$pk_delete_item = TRUE;
	if (isset($_POST['id'])) {$id = $_POST['id'];} else {$pk_delete_item = FALSE;}
?>
<?php include '../DBPK/pkaminska_db_connection.php'; ?>
<?php
    session_start();
    if ($pk_delete_item) {
        $pk_connection = new mysqli($hostname, $username, $password, $database);
        $pk_fetch_item_query = "SELECT * FROM movies_pk_53327 WHERE id_53327='".$id."'";
        $pk_delete_item_query = "DELETE FROM movies_pk_53327 WHERE id_53327='".$id."'";
        if ($pk_connection->query($pk_fetch_item_query)->num_rows > 0) {
            $pk_connection->query($pk_delete_item_query);
            $_SESSION['message'] = 'Pomyślnie usunięto film';
        } else {
            $_SESSION['message'] = 'Nie udało się usunąć filmu';
        }

        $pk_connection->close();
    } else {
        $_SESSION['message'] = 'Nie udało się usunąć filmu';
    }

    header("Location: $location");
?>
