<?php

if (isset($_POST['send'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$title = 'Vezba za kolokvijum';
	$message = $_POST['message'];

	$to = 'mustafa.levent.27.12@ict.edu.rs';
	if (mail($to, $title, $message)) {
		$greske['email'] = 'Uspesno ste poslali email';
	} else {
		$greske['email'] = 'Vise srece drugi put';
	}
}