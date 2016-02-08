<?php
require_once './konekcija.php';

if ($_GET['sadrzaj']) {
	$sadrzaj = $_GET['sadrzaj'];
	$po = $_GET['po'];
	$upit = "SELECT `ime`, `prezime`, `grad` FROM `stanari` WHERE `$po` LIKE '$sadrzaj%'";
	$tabela = mysql_query($upit, $konekcija);
	while ($red = mysql_fetch_array($tabela)) {
		?>
		<li><?php echo $red['ime'] . ' ' . $red['prezime'] . '(' . $red['grad'] . ')'; ?></li>
		<?php
	}
}