<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>KINO - Paulina Kaminska - Lista biletów</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSSPK/pkaminska_style.css">
    <?php include '../DBPK/pkaminska_db_connection.php'; ?>
  </head>
  <body>
    <?php include '../CommonPK/pkaminska_header.php'; ?>
    <?php include '../CommonPK/pkaminska_flash.php'; ?>
	<article>
	    <h2 class='text-center'>Zamówienia - Bilety</h2>
        <table>
            <tr>
                <th>#</th>
                <th>Klient</th>
                <th>Film</th>
                <th>Cena biletu</th>
                <th>L. biletów</th>
                <th>Zniżka</th>
                <th>Nr. rachunku</th>
                <th class='price-cell'>Działania</th>
            </tr>
            <?php
                $pk_deletion_action = "../MainPK/pkaminska_delete_ticket.php";
                $pk_edit_action = "../MainPK/pkaminska_edit_ticket.php";
                // read from DB
                $db_connection = new mysqli($hostname, $username, $password, $database);
                $pk_all_items_query = "SELECT * FROM tickets_pk_53327 "
                                        ."LEFT JOIN clients_pk_53327 "
                                        ."ON tickets_pk_53327.client_id_53327 = clients_pk_53327.id_53327 "
                                        ."LEFT JOIN movies_pk_53327 "
                                        ."ON tickets_pk_53327.movie_id_53327 = movies_pk_53327.id_53327 "
                                        ."LEFT JOIN bills_pk_53327 "
                                        ."ON tickets_pk_53327.bill_id_53327 = bills_pk_53327.id_53327;";
                // echo $pk_all_items_query; // for debugging
                $pk_all_items = $db_connection->query($pk_all_items_query);
                $db_connection->close();
                $pk_items_count = $pk_all_items->num_rows;
                // end reading from DB

                for ($i=0; $i < $pk_items_count; $i++) {
                    $pk_all_items->data_seek($i);
                    $row = $pk_all_items->fetch_assoc();
                    echo "<tr>"
                         ."<td>".($i +1)."</td>" // Liczba porządkowa
                         ."<td>".$row["full_name_53327"]."</td>"
                         ."<td>".$row["name_53327"]."</td>"
                         ."<td class='price-cell'>".$row["price_53327"]."</td>"
                         ."<td class='price-cell'>".$row["tickets_quantity_53327"]."</td>"
                         ."<td class='price-cell'>".$row["discount_53327"]."</td>"
                         ."<td class='price-cell'>".$row["bill_name_53327"]."</td>"
                         ."<td class='price-cell'>";
                     $_GET['id']=$row["id_53327"]; // id elementu
                     // include('../CommonPK/pkaminska_edit_link.php');
                     // include('../CommonPK/pkaminska_delete_form.php');
                     echo "w budowie</td>"
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
