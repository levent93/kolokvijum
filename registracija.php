<?php

$rezultat = "";

if (isset($_POST['napravi'])) {
	$korisnicko_ime = $_POST['korisnicko_ime'];
	$lozinka = $_POST['lozinka'];
	$email = $_POST['email'];
	$id_uloga = $_POST['id_uloga'];

	$upit = "INSERT INTO `korisnik` VALUES('', '$korisnicko_ime', '$lozinka', '$email', '$id_uloga')";
	$rez = mysql_query($upit, $konekcija);
	if ($rez) {
		$rezultat = 'Uspesno ste uneli korisnka';
	} else {
		$rezultat = 'Doslo je do greske';
	}
}
