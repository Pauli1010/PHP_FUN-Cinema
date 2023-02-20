<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>KINO - Paulina Kaminska - Lista fimów</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSSPK/pkaminska_style.css">
    <?php include '../DBPK/pkaminska_db_connection.php'; ?>
    <?php include '../DBPK/pkaminska_read_movies.php'; ?>
  </head>
  <body>
    <?php include '../CommonPK/pkaminska_header.php'; ?>
    <?php include '../CommonPK/pkaminska_flash.php'; ?>
	<article>
	    <h2 class='text-center'>Nasze filmy</h2>
        <table>
            <tr>
                <th>#</th>
                <th class='text-left'>Nazwa</th>
                <th>Cena biletu</th>
                <th class='price-cell'>Działania</th>
            </tr>
            <?php
                $pk_deletion_action = "../MainPK/pkaminska_delete_movie.php";
                $pk_edit_action = "../MainPK/pkaminska_edit_movie.php";
                for ($i=0; $i < $pk_items_count; $i++) {
                    $pk_all_items->data_seek($i);
                    $row = $pk_all_items->fetch_assoc();
                    echo "<tr>"
                         ."<td>".($i +1)."</td>" // Liczba porządkowa
                         ."<td>".$row["name_53327"]."</td>"
                         ."<td class='price-cell'>".$row["price_53327"]."</td>"
                         ."<td class='price-cell'>";
                     $_GET['id']=$row["id_53327"]; // id elementu
                     include('../CommonPK/pkaminska_edit_link.php');
                     include('../CommonPK/pkaminska_delete_form.php');
                     echo "</td>"
                         ."</tr>";
                }
            ?>
        </table>
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
