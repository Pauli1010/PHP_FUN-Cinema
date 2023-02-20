<!DOCTYPE html>
<html lang="pl">
 <head>
  <title>KINO - Paulina Kaminska - Edycja filmu</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../CSSPK/pkaminska_style.css">
  <?php include '../DBPK/pkaminska_db_connection.php'; ?>
  <?php include '../DBPK/pkaminska_find_movie.php'; ?>
 </head>
 <body>
	<?php include '../CommonPK/pkaminska_header.php'; ?>
	<?php include '../CommonPK/pkaminska_flash.php'; ?>
	<article>
		<h2>Edytuj film - <?php echo $pk_item['name_53327'] ?></h2>
        <form action=<?php echo "pkaminska_update_movie.php?id=".$pk_item['id_53327'] ?> method="POST">
            <table>
                <tr>
                    <td>
                        <label for='name'>Nazwa</label>
                        <input type="text" name="name" id="name" value="<?php echo $pk_item['name_53327'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for='price'>Cena</label>
                        <input type="number" step="0.01" min=0 name="price" id="price" value="<?php echo $pk_item['price_53327'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Zapisz"> <a href="pkaminska_index_movies.php">Anuluj</a>
                    </td>
                </tr>
            </table>
        </form>
    </article>
    <article>
        <?php
            $path_prefix = '../';
            include '../CommonPK/pkaminska_nav.php';
        ?>
    </article>
    <?php include '../CommonPK/pkaminska_footer.php'; ?>
 </body>
</html>
