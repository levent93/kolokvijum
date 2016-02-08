<?php

$rezultat = "";

if (isset($_POST['napravi'])) {
	$korIme = $_POST['korisnicko_ime'];
	$lozinka = $_POST['lozinka'];
	$email = $_POST['email'];
	$id_uloga['id_uloga'];

	$upit = "INSERT into korisnik VALUES('', $korIme', '$lozinka' '$email', '$id_uloga')";
	$rezultat = mysql_query($upit, $konekcija);
}

