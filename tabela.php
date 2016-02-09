<?php
require_once './konekcija.php';
$grad = $_GET['grad'];
$upit = "SELECT * FROM `stanari` WHERE grad = '$grad'";
$tabela = mysql_query($upit, $konekcija);
?>
<table>
	<thead>
		<tr>
			<th>Ime</th>
			<th>Prezime</th>
			<th>Pol</th>
			<th>Obrisi</th>
		</tr>
	</thead>
	<tbody>
		<?php while ($stanar = mysql_fetch_array($tabela)) { ?>
			<tr>
				<td><?php echo $stanar['ime']; ?></td>
				<td><?php echo $stanar['prezime']; ?></td>
				<td><?php echo $stanar['pol']; ?></td>
				<td>
					<a onclick="obrisi('<?php echo $stanar['id']; ?>', '<?php echo $stanar['grad']; ?>')">
						<i class="fa fa-trash-o"></i>
					</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<?php


