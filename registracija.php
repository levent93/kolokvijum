<?php

$rezultat = "";

if (isset($_POST['napravi'])) {
	$korIme = $_POST['korisnicko_ime'];
	$lozinka = $_POST['lozinka'];
	$email = $_POST['email'];
	$id_uloga['id_uloga'];

	$upit = "INSERT into korisnik VALUES('', $korIme', '$lozinka' '$email', '$id_uloga')";
<<<<<<< HEAD
	$rezultat = mysql_query($upit, $konekcija);
=======
	$rez = mysql_query($upit, $konekcija);
	if ($rez) {
		$rezultat = 'uspesno ste uneli korisnka';
	} else {
		$rezultat = 'Doslo je do greske Mjustafa pjederu!!!!';
	}
>>>>>>> refs/remotes/origin/upis
}

