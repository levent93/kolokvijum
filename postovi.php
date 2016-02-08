<?php
include './konekcija.php';

$strana = $_GET['strana'];

$upit = "SELECT * FROM `post` LIMIT 1 OFFSET $strana";
$tabela = mysql_query($upit, $konekcija);

$prikazi = $_GET['prikazi'];

if ($prikazi == 1) {
	while ($red = mysql_fetch_array($tabela)) :
		?>
		<div class="inner split">
			<section>
				<h2><?php echo $red['naslov']; ?></h2>
				<p><?php echo $red['tekst']; ?></p>
				<ul class="actions">
					<li><a href="#" class="button alt">Learn more</a></li>
				</ul>
			</section>
			<section>
				<ul class="checklist">
					<li>Trenutno vreme <?php echo date('H:i:s'); ?></li>
					<li>Danasnji datum <?php echo date('d-M-y'); ?></li>
					<li>Objevljeno u <?php echo date('l, d-M-y \u h:i:s a', $red['vreme']); ?></li>
					<li>Pre <?php echo date('j \d\a\n\a, H \s\a\t\i \i i \m\i\n\u\t\a', time() - $red['vreme']); ?></li>
				</ul>
			</section>
		</div>
		<?php
	endwhile;
} else {
	return "";
}
?>
<ul class="actions special">
	<li><input type="button" value="1" class="button alt" onclick="prikazi(1, 0);" /></li>
	<li><input type="button" value="2" class="button alt" onclick="prikazi(1, 1);" /></li>
	<li><input type="button" value="3" class="button alt" onclick="prikazi(1, 2);" /></li>
</ul>