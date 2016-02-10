<?php

if (isset($_GET['id'])) {
	require_once './konekcija.php';

	$id = $_GET['id'];
	$upit = "DELETE FROM `stanari` WHERE `id` = '$id'";
	mysql_query($upit, $konekcija);

	require_once './tabela.php';
}
?>