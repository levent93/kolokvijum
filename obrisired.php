<?php
include 'konekcija.php';
	$id = $_GET['id'];
	$upitBrisi = "DELETE  from stanari WHERE id='$id'";
	$obrisi = mysql_query($upitBrisi, $konekcija);

	include './tabela.php';