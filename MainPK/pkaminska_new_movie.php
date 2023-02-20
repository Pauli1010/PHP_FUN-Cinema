<!DOCTYPE html>
<html lang="pl">
 <head>
  <meta charset="UTF-8">
  <title>KINO - Paulina Kaminska - Dodawanie filmu</title>
  <link rel="stylesheet" href="../CSSPK/pkaminska_style.css">
  <?php include '../DBPK/pkaminska_db_connection.php'; ?>
 </head>
 <body>
	<?php include '../CommonPK/pkaminska_header.php'; ?>
	<?php include '../CommonPK/pkaminska_flash.php'; ?>
	<article>
		<h2>Nowy przedmiot</h2>
        <form action="pkaminska_create_movie.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label for='name'>Nazwa</label>
                        <input type="text" name="name" id="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for='price'>Cena</label>
                        <input type="number" step="0.01" min=0 name="price" id="price">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Zapisz">
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
