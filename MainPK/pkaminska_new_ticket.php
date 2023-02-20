<!DOCTYPE html>
<html lang="pl">
 <head>
  <meta charset="UTF-8">
  <title>KINO - Paulina Kaminska - Dodawanie biletów</title>
  <link rel="stylesheet" href="../CSSPK/pkaminska_style.css">
  <?php include '../DBPK/pkaminska_db_connection.php'; ?>
 </head>
 <body>
	<?php include '../CommonPK/pkaminska_header.php'; ?>
	<?php include '../CommonPK/pkaminska_flash.php'; ?>
	<article>
		<h2 class="text-center">Nowy bilet/zamówienie</h2>
        <h3 class="text-center">W budowie...</h3>
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
