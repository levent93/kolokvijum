<?php

if (isset($_GET['id'])) {
	require_once './konekcija.php';

	$id = $_GET['id'];
	$ime = $_GET['ime'];
	$prezime = $_GET['prezime'];
	$pol = $_GET['pol'];
	$upit = "UPDATE stanari SET ime = '$ime', prezime = '$prezime', pol = '$pol' WHERE id = '$id'";
	mysql_query($upit, $konekcija);
	unset($_GET['id']);
	require_once './tabela.php';
}
?>