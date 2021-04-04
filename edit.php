<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($mahasiswa as $u) { ?>
	<form action="<?php echo base_url(). 'index.php'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>

				<td>Nama</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $u->nim ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>tempat_tinggal</td>
				<td><input type="text" name="tempat_tinggal" value="<?php echo $u->tempat_tinggal ?>"></td>
			</tr>			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"s>
				<input type="reset" value="Reset"s></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>