<?php

if (isset($_GET['id'])) {
	require_once './konekcija.php';

	$_GET['id'];
	$ime = '';
	$prezime = '';
	$pol = '';
	$upit = "UPDATE `stanari` SET `ime` = '$ime', `prezime` = '$prezime', `pol` = '$pol' WHERE `id` = '$id'";
	mysql_query($upit, $konekcija);

	require_once './tabela.php';
}
?>