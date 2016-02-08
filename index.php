<?php
require_once './konekcija.php';
require_once './logovanje.php';
//require_once './postovi.php';
require_once './mail.php';
?>
<!DOCTYPE HTML>
<!--
	Prism by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>GitHub Hub</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Banner -->
		<section id="banner">
			<div class="inner split">
				<section>
					<h2 onclick="loadDoc();">Trenutno vreme</h2>
					<p id="timer"></p>
					<input type="button" id="prikazi" class="button special" value="Prikazi" onclick="prikazi(1, 0);">
					<input type="button" id="sakri" class="button special" value="Sakri" onclick="prikazi(0, 0);">
				</section>
				<section>
					<?php if (!isset($_SESSION['name'])) { ?>
						<form name="logovanje" id="logovanje" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="alt" method="POST">
							<div class="row uniform">
								<div class="6u 12u(xsmall)">
									<input name="user" placeholder="User" type="text">
								</div>
								<div class="6u 12u(xsmall)">
									<input name="password" placeholder="Password" type="password">
								</div>
							</div>
							<ul class="actions">
								<li><input name="uloguj" class="button special" value="Uloguj se!" type="submit"></li>
							</ul>
						</form>
					<?php } else { ?>
						<?php echo $_SESSION['name'] . ' (' . $_SESSION['uloga'] . ')' ?>
						<a name="odjava" href="odjava.php" class="button special" >Odjavi se</a><br /><br />
						<div class="6u 12u(xsmall)">
							<div class="row uniform">
								<div class="6u 12u(xsmall)">
									<input type="text" id="polje" onkeyup="mala_slova();" />
								</div>
								<div class="6u 12u(xsmall)">
									<input type="text" id="polje2" />
								</div>
							</div>
						</div>
					<?php } ?>
				</section>
			</div>
		</section>

		<!-- One -->
		<section class="wrapper" id="wrapper">

		</section>
		<!-- Two -->
		<section id="two" class="wrapper style2 alt">
			<div class="inner">
				<div class="spotlight">
					<div class="image">
						<img src="images/pic01.jpg" alt="" />
					</div>
					<div class="content" id="San Francisco">
						<h3>Korisnici koji zive u San Francisku</h3>
						<ul class="actions">
							<li><input type="button" value="prikazi" onclick="tabela('San Francisco');" /></li>
						</ul>
					</div>
				</div>
				<div class="spotlight">
					<div class="image">
						<img src="images/pic02.jpg" alt="" />
					</div>
					<div class="content"  id="Miami">
						<h3>Korisnici koji zive u Majamiju</h3>
						<ul class="actions">
							<li><input type="button" value="prikazi" onclick="tabela('Miami');" /></li>
						</ul>
					</div>
				</div>
				<div class="spotlight">
					<div class="image">
						<img src="images/pic03.jpg" alt="" />
					</div>
					<div class="content"  id="Novi Sad">
						<h3>Korisnici koji zive u Novom Sadu</h3>
						<ul class="actions">
							<li><input type="button" value="prikazi" onclick="tabela('Novi Sad');" /></li>
						</ul>
					</div>
				</div>
				<ul class="actions special">
					<!--<li><input type="button" value="Traži" class="button alt" /></li>-->
					<li>Trazi po:</li>
					<li>
						<select id="nesto" class="alt">
							<option value="ime">Imenu</option>
							<option value="prezime">Prezimenu</option>
							<option value="grad">Gradu</option>
						</select>
					</li>
					<li><input name="trazi" placeholder="Pocni da kucas..." type="text" id="trazi" onkeyup="trazi(this.value);" /></li>
					<ul id="rezultat">

					</ul>
				</ul>
			</div>
		</section>

		<!-- Contact -->
		<section id="contact" class="wrapper">
			<div class="inner split">
				<section>
					<h2>Orci malesuada</h2>
					<p>
						<?php
						$grad = 'Novi Sad';
						echo strstr($grad, 'i', true) . '<br />';
						echo substr($grad, 1);
						?>
					</p>
					<p><?php echo $greske['email']; ?></p>
					<form name="forma_mail" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="alt" method="POST">
						<div class="row uniform">
							<div class="6u 12u(xsmall)">
								<input name="name" placeholder="Name" type="text">
							</div>
							<div class="6u 12u(xsmall)">
								<input name="email" placeholder="Email" type="email">
							</div>
							<div class="12u">
								<textarea name="message" placeholder="Message" rows="4"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input name="send" class="alt" value="Send message" type="submit"></li>
						</ul>
					</form>
				</section>
				<section>
					<ul class="contact">
						<li class="fa-twitter"><a href="#">twitter.com/untitled-tld</a></li>
						<li class="fa-facebook"><a href="#">facebook.com/untitled-tld</a></li>
						<li class="fa-instagram"><a href="#">instagram.com/untitled-tld</a></li>
						<li class="fa-envelope"><a href="#">information@untitled.tld</a></li>
						<li class="fa-home">1234 Somewhere Road Suite 9823<br/>Nashville, TN 00000-0000</li>
					</ul>
				</section>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<div class="copyright">
				&copy; Untitled. All rights reserved. Images: <a href="http://unsplash.com">Unsplash</a>. Design: <a href="http://templated.co">TEMPLATED</a>.
			</div>
		</footer>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
		<!--Moj javaScript-->
		<script src="skripta.js" type="text/javascript"></script>

	</body>
</html>
