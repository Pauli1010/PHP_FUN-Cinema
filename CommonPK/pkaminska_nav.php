<?php
    if(!isset($path_prefix)) { $path_prefix = ''; };
	$nav  = '<nav><span class="ul-info">Przeglądaj:</span><ul>'
	.'<li><a href="'.$path_prefix.'indexKaminska.php">Strona główna</a></li>'
	.'<li><a href="'.$path_prefix.'MainPK/pkaminska_index_movies.php">Lista filmów</a></li>'
	.'<li><a href="'.$path_prefix.'MainPK/pkaminska_index_clients.php">Lista klientów</a></li>'
	.'<li><a href="'.$path_prefix.'MainPK/pkaminska_index_tickets.php">Lista zamówień</a></li>'
	.'<li><a href="'.$path_prefix.'MainPK/pkaminska_index_bills.php">Lista rachunków</a></li>'
	.'</ul><br><span class="ul-info">Dodaj:<span><ul>'
	.'<li><a href="'.$path_prefix.'MainPK/pkaminska_new_movie.php">Dodaj film</a></li>'
	.'<li><a href="'.$path_prefix.'MainPK/pkaminska_new_client.php">Dodaj klienta</a></li>'
	.'<li><a href="'.$path_prefix.'MainPK/pkaminska_new_ticket.php">Dodaj zamówienie</a></li>'
	.'<li><a href="'.$path_prefix.'MainPK/pkaminska_new_bill.php">Dodaj rachunek</a></li>'
	.'</ul></nav>';
	echo $nav;
?>
