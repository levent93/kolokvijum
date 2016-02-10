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
			<th>Izmeni</th>
		</tr>
	</thead>
	<tbody>
		<?php while ($stanar = mysql_fetch_array($tabela)) { ?>
			<?php if (isset($_GET['id']) && $_GET['id'] == $stanar['id']) { ?>
			<form>
				<tr>
					<td><input type="text" name ="name" value="<?php echo $stanar['ime']; ?>" /></td>
					<td><input type="text" name ="prezime" value="<?php echo $stanar['prezime']; ?>" /></td>
					<td><input type="text" name ="pol" value="<?php echo $stanar['pol']; ?>" /></td>
					<td>
						<a title="Obrisi" onclick="brisanje('<?php echo $stanar['id']; ?>', '<?php echo $stanar['grad']; ?>')">
							<i class="fa fa-trash-o"></i>
						</a>
					</td>
					<td>
						<a title="Sacuvaj" onclick="izmena('<?php echo $stanar['id']; ?>', '<?php echo $stanar['grad']; ?>')">
							<i class="fa fa-save"></i>
						</a>
					</td>
				</tr>
			</form>
		<?php } else { ?>
			<tr>
				<td><?php echo $stanar['ime']; ?></td>
				<td><?php echo $stanar['prezime']; ?></td>
				<td><?php echo $stanar['pol']; ?></td>
				<td>
					<a title="Obrisi" onclick="brisanje('<?php echo $stanar['id']; ?>', '<?php echo $stanar['grad']; ?>')">
						<i class="fa fa-trash-o"></i>
					</a>
				</td>
				<td>
					<a title="Izmeni" onclick="izmena('<?php echo $stanar['id']; ?>', '<?php echo $stanar['grad']; ?>')">
						<i class="fa fa-pencil"></i>
					</a>
				</td>
			</tr>
		<?php }
	}
	?>
</tbody>
</table>
