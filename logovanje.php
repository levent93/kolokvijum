<?php

if (isset($_POST['uloguj'])) {
	$name = $_POST['user'];
	$password = $_POST['password'];
	$greske['logovanje'] = '';

	$upit = "SELECT * FROM `korisnik` JOIN `uloga` ON `korisnik`.`id_uloga` = `uloga`.`id` WHERE `korisnicko_ime` = '$name' AND `lozinka` = '$password'";
	//Mora tacno ovakav raspored navodnika!!! testirano
	//Vrednosti kolona moraju da budu okruzeni jednostrukim navodnicima ('),
	//Nazivi kolona moraju da budu okruzeni navodnicima tipa (`).
	//Razlikovati ' i ` !!!

	$tabela = mysql_query($upit, $konekcija);
	$row = mysql_fetch_array($tabela);
	if ($row) {
		$_SESSION['name'] = $row['korisnicko_ime'];
		$_SESSION['uloga'] = $row['naziv'];
	} else {
		$greske['logovanje'] = 'Pogresno korisnicko ime ili lozinka!';
	}
}
?>