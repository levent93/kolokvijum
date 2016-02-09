<?php

require_once './konekcija.php';
$id = $_GET['id'];
$upitBrisi = "DELETE FROM `stanari` WHERE `id` = '$id'";
$obrisi = mysql_query($upitBrisi, $konekcija);

require_once './tabela.php';
